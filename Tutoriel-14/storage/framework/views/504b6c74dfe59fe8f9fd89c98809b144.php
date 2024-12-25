<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard!</h1>
    <p>Hello, <?php echo e(Auth::user()->name); ?>. Your account was created on <?php echo e(Auth::user()->created_at); ?>.</p>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Route_Controller_Laravel\Tuto14\resources\views/dashboard.blade.php ENDPATH**/ ?>