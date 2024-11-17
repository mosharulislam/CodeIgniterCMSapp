<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/css/contact.css" rel="stylesheet">
    <title>Add New Contact</title>
</head>
<body>
    <div class="container">
        <h1>Add New Contact</h1>
        <form action="/contacts/create" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <button type="submit" class="button">Add Contact</button>
        </form>
        <p class="footer">
            <a href="/contacts">Back to Contacts</a>
        </p>
    </div>
</body>
</html>