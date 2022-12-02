<?php
// session_start();
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
            <div class="navBar" method="post">
                <li> <a href="index.php">home</a> </li>
                <li> <a href="inscription.php">Sign Up</a> </li>
                <li> <a href="connexion.php">Sign In</a> </li>
                <li> <a href="profil.php">Profile</a> </li>
                <!-- <?php echo "hello"; ?> -->

                <?php
                if ($_SESSION['user'] = true) {
                    echo " <li> <a href='logdoff.php'>logout</a> </li>";
                }
                // if ($_SESSION['admin'] == 'active') {
                //     echo "<li > <a href='admin.php'>admin page</a> </li>";

                //     // echo "work";
                // }

                // if ($_SESSION['admin'] = true) {
                //     echo "<li><a href='index.php'>admin</a></li> ";
                // }


                // if ($_SESSION['active'] = true) {

                //     echo "   <button type='submit' name='delSes'>logout </button> ";
                // } else {
                //     echo "   <button type='submit' name='delSes'>login </button> ";
                // }
                ?>
                <table>

                </table>




            </div>

        </ul>
    </nav>

</header>