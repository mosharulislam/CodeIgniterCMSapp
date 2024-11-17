<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/css/login.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="/register" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="button">Register</button>
        </form>
        <p class="footer">
            Already have an account? <a href="/login">Login here</a>
        </p>
    </div>
</body>
</html>
