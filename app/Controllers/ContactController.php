<?php namespace App\Controllers;

use App\Models\ContactModel;

class ContactController extends BaseController
{
    public function index()
    {
        $model = new ContactModel();
        $contacts = $model->where('user_id', session()->get('user_id'))->findAll();
        return view('contacts/index', ['contacts' => $contacts]);
    }

    public function create()
    {
        if ($this->request->getMethod() == 'POST') {
            $model = new ContactModel();
            $data = [
                'user_id' => session()->get('user_id'),
                'name' => $this->request->getVar('name'),
                'phone' => $this->request->getVar('phone'),
                'email' => $this->request->getVar('email'),
                'address' => $this->request->getVar('address'),
            ];
            $model->save($data);
            return redirect()->to('/contacts');
        }
        return view('contacts/create');
    }

    public function edit($id)
    {
        $model = new ContactModel();
        $contact = $model->where('user_id', session()->get('user_id'))->find($id);
        return view('contacts/edit', ['contact' => $contact]);
    }

    public function update($id)
    {
        if ($this->request->getMethod() == 'POST') {
            $model = new ContactModel();
            $data = [
                'name' => $this->request->getVar('name'),
                'phone' => $this->request->getVar('phone'),
                'email' => $this->request->getVar('email'),
                'address' => $this->request->getVar('address'),
            ];
            $model->update($id, $data);
            return redirect()->to('/contacts');
        }
    }

    public function delete($id)
    {
        $model = new ContactModel();
        $model->where('user_id', session()->get('user_id'))->delete($id);
        return redirect()->to('/contacts');
    }
}
