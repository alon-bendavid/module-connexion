<?php
session_start();
include('header.php');

?>

<body>
    <main>

        <h1>Welcome To Log In Site</h1>


        <?php
        // if ($_SESSION['user'] = 'admin') {
        // }
        if ($_SESSION['admin'] == 'active') {
            echo " <div class='box'><li > <a href='admin.php'>admin page</a> </li></div>";

            // echo "work";
        } else {
            echo " ";
        }


        ?>


    </main>

</body>

</html>