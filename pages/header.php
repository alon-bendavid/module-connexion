<?php



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live On Mars</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<header>
    <nav>
        <ul>
            <div class="navBar">
                <li> <a href="index.php">home</a> </li>
                <li> <a href="inscription.php">Sign Up</a> </li>
                <li> <a href="connexion.php">Sign In</a> </li>
                <li> <a href="profil.php">Profile</a> </li>

                <li> <a href="admin.php">Admin Page</a> </li>
                <?php if (isset($_SESSION['admin'])) {
                    '  <li> <a href="index.php">test</a> </li>  ';
                } ?>
            </div>

        </ul>
    </nav>

</header>