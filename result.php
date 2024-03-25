<?php
$errors = [];

$data = array_map('trim', $_POST);
$data = array_map('htmlentities', $data);

if(empty($data['name'])) {
    $errors[] = 'The \'name\' field is required.';
}
if(empty($data['email'])) {
    $errors[] = 'The \'email\' field is required.';
}
if(empty($data['subject'])) {
    $errors[] = 'The \'subject\' field is required.';
}
if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'The email given is not a valid email address.';
}
if (!empty($errors)) {
    require 'index.php';
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome on board</title>
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="stylesheet" href="/assets/styles/result.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php include '_navbar.php' ?>
    </header>
    <main>
        <section class="container">
            <h2 class="merci">Merci pour votre message !</h2>
            <p>
                Votre message a été envoyé. <br>
                Notre équipe reviendra vers vous dans les 48 heures.
            </p>
            <p>    
                Passez une bonne journée et à bientôt 😊
            </p>
        </section>
        </main>
    <?php include '_footer.php' ?>
</body>

</html>