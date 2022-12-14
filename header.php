<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/script.js"></script>
    <title>Székesfehérvári Fogház és Korrekciós Központ</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="wrapper">
            <a href="index.php"><img src="images/bvlogo2.png" alt="SzFKK"></a>
            <ul class="menu">
                <li><a href="index.php">Főoldal</a></li>
                <li><a href="inmates.php">Fogvatartottak</a></li>
                <li><a href="contact.php">Kapcsolat</a></li>

                <?php
                    if (isset($_SESSION["useremail"])) {
                        echo "<li><a href='profil.php'>Profil</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Kijelentkezés</a></li>";
                    }
                    else {
                        echo "<li><a href='signup.php'>Regisztráció</a></li>";
                        echo "<li><a href='login.php'>Bejelentkezés</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>
    <div class="wrapper">
