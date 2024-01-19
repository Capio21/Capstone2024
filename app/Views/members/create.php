<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- app/Views/members/create.php -->

<h2>Create Member</h2>

<form action="/members/store" method="post">
    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" required><br>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" required><br>

    <label for="middle_name">Middle Name:</label>
    <input type="text" name="middle_name"><br>

    <label for="contact_number">Contact Number:</label>
    <input type="text" name="contact_number" required><br>

    <label for="sex">Sex:</label>
    <select name="sex" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select><br>

    <label for="location">Location:</label>
    <input type="text" name="location" required><br>

   

    <!-- Add more fields as needed -->

    <button type="submit">Save</button>
</form>


<a href="/members">Back to List</a>

</body>
</html>