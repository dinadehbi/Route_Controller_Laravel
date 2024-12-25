<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <p>Name: <?php echo e($user->name); ?></p>
    <p>Email: <?php echo e($user->email); ?></p>
    <p>Account created at: <?php echo e($user->created_at); ?></p>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Route_Controller_Laravel\Tuto14\resources\views/profile.blade.php ENDPATH**/ ?>