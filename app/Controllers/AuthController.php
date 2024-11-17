<?php namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function register()
{
    if ($this->request->getMethod() == 'POST') {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];

        if ($builder->insert($data)) {
            return redirect()->to('/login');
        } else {
            echo "Error: " . json_encode($db->error());
        }
    } 

    return view('register');
}


public function login()
{
    if ($this->request->getMethod() == 'POST') {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'user_id' => $user['id'],
                'user_name' => $user['name'],
                'logged_in' => true,
            ]);

            return redirect()->to('/contacts');
        } else {
            session()->setFlashdata('error', 'Invalid email or password');
            return redirect()->to('/login');
        }
    }

    return view('login');
}

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
