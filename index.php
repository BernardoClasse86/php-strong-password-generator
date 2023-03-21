<?php

include 'functions.php';

if (isset($_GET['submit'])) {

    $password_length = $_GET['length'];

    if (empty($password_length) || $password_length <= 0 || $password_length >= 72) {
        ?>
        <div class="container py-3">
            <p>cant generate password</p>
        </div>
        <?php
    } else {
        $your_password = generatePassword($password_length);
        ?>
        <div class="container py-3">
            <p>your password is: <?= $your_password ?></p>
        </div>
        <?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container py-3">

        <form class="row g-3" method="get">
            <div class="col-auto">
                <p>Password Length:</p>
            </div>
            <div class="col-auto">
                <input type="number" class="form-control" name="length">
            </div>
            <div class="col-auto">
                <button type="submit" name="submit" class="btn btn-primary mb-3">Generate password</button>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>