<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <h2>Vous avez reçu un nouveau message de contact</h2>

    <p><strong>Nom :</strong> {{ $name }}</p>
    <p><strong>Email :</strong> {{ $email }}</p>
    <p><strong>Message :</strong> {{ $msg }}</p> <!-- Changed 'Email' to 'Message' -->
</body>
</html>