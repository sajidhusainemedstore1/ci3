<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <h2>Edit User</h2>
    <form method="post">
        Name: <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
