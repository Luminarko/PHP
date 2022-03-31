<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Digital Signature Creator</title>
</head>
<body style="background-color: darkslategray; text-align: center">
<header>Digital Signature Creator</header>
<?php
if (isset($_POST['submit'])) {
    include 'dat/dbh.php';
    include 'dat/signature.php';
    header('Location: ' . $_SERVER['PHP_SELF']);
    }
?>


<form action="dat/form_data.php" method="POST">
        <input type="text" name="firstname" placeholder="Name" required>
        <br>
        <input type="text" name="surname" placeholder="Surname" required>
        <br>
        <input type="date" name="expire" placeholder="Date of expiration" required>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

