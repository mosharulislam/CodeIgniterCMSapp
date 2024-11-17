<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/css/login.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if (session()->getFlashdata('error')): ?>
            <p style="color: #dc2626; text-align: center;"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>
        <form action="/login" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="button">Login</button>
        </form>
        <p class="footer">
            Don't have an account? <a href="/register">Register here</a>
        </p>
    </div>
</body>
</html>
