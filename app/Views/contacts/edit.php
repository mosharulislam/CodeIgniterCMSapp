<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/css/contact.css" rel="stylesheet">
    <title>Edit Contact</title>
</head>
<body>
    <div class="container">
        <h1>Edit Contact</h1>
        <form action="/contacts/update/<?= $contact['id'] ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?= esc($contact['name']) ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= esc($contact['email']) ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value="<?= esc($contact['phone']) ?>" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="<?= esc($contact['address']) ?>" required>
            </div>
            <button type="submit" class="button">Update Contact</button>
        </form>
        <p class="footer">
            <a href="/contacts">Back to Contacts</a>
        </p>
    </div>
</body>
</html>