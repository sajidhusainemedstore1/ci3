<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <h2>User List</h2>
    <a href="<?php echo base_url('users/create'); ?>"> Add User</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Actions</th>
        </tr>
        <?php foreach ($users as $u): ?>
        <tr>
            <td><?php echo $u->id; ?></td>
            <td><?php echo $u->name; ?></td>
            <td><?php echo $u->email; ?></td>
            <td>
                <a href="<?php echo base_url('users/edit/'.$u->id); ?>">Edit</a> | 
                <a href="<?php echo base_url('users/delete/'.$u->id); ?>" onclick="return confirm('Delete user?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
