<?php
session_start();
include('header.php');

?>

<body>
    <main>

        <h1>home page</h1>

        <?php
        // if ($_SESSION['user'] = 'admin') {
        // }
        if ($_SESSION['admin'] == 'active') {
            echo " <div class='box'><li > <a href='admin.php'>admin page</a> </li></div>";

            // echo "work";
        } else {
            echo "admin is not connected";
        }


        ?>


    </main>

</body>

</html>