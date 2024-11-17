<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/css/contact.css" rel="stylesheet">
    <title>Contacts</title>
</head>
<body>
    <div class="container">
        <h1>Your Contacts</h1>
        <a href="/contacts/create">Add New Contact</a>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td><?= esc($contact['name']) ?></td>
                        <td><?= esc($contact['email']) ?></td>
                        <td><?= esc($contact['phone']) ?></td>
                        <td>
                            <a href="/contacts/edit/<?= $contact['id'] ?>">Edit</a>
                            <a href="/contacts/delete/<?= $contact['id'] ?>" class="text-red-600">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
