<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/css/contact.css" rel="stylesheet">
    <title>Delete Contact</title>
</head>
<body>
    <div class="container">
        <h1>Delete Contact</h1>
        <p>Are you sure you want to delete this contact?</p>
        <form action="/contacts/delete/<?= $contact['id'] ?>" method="post">
            <button type="submit" class="button">Delete Contact</button>
            <a href="/contacts" class="button">Cancel</a>
        </form>
    </div>
</body>
</html>