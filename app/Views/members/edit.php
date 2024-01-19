<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- app/Views/members/edit.php -->

<h2>Edit Member</h2>

<form action="/members/update" method="post">
    <input type="hidden" name="id" value="<?= $member['id']; ?>">

    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" value="<?= $member['first_name']; ?>" required><br>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" value="<?= $member['last_name']; ?>" required><br>

    <label for="middle_name">Middle Name:</label>
    <input type="text" name="middle_name" value="<?= $member['middle_name']; ?>"><br>

    <label for="contact_number">Contact Number:</label>
    <input type="text" name="contact_number" value="<?= $member['contact_number']; ?>" required><br>

    <label for="sex">Sex:</label>
    <select name="sex" required>
        <option value="Male" <?= ($member['sex'] == 'Male') ? 'selected' : ''; ?>>Male</option>
        <option value="Female" <?= ($member['sex'] == 'Female') ? 'selected' : ''; ?>>Female</option>
        <option value="Other" <?= ($member['sex'] == 'Other') ? 'selected' : ''; ?>>Other</option>
    </select><br>

    <label for="location">Location:</label>
    <input type="text" name="location" value="<?= $member['location']; ?>" required><br>

    

    <!-- Add more fields as needed -->

    <button type="submit">Update</button>
</form>


<a href="/members">Back to List</a>

</body>
</html>