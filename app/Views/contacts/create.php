<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/css/contact.css" rel="stylesheet">
    <title>Add New Contact</title>
    <script>
        function validatePhoneNumber(event) {
            const phoneInput = document.getElementById('phone');
            const phonePattern = /^[0-9]{10,15}$/;
            if (!phonePattern.test(phoneInput.value)) {
                alert('Please enter a valid phone number with 10-15 digits.');
                event.preventDefault();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Add New Contact</h1>
        <form action="/contacts/create" method="post" onsubmit="return validatePhoneNumber(event)">
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
                <input type="text" id="phone" name="phone" pattern="[0-9]{10,15}" required
                       title="Phone number must be 10-15 digits">
            </div>
            <button type="submit" class="button">Add Contact</button>
        </form>
        <p class="footer">
            <a href="/contacts">Back to Contacts</a>
        </p>
    </div>
</body>
</html>
