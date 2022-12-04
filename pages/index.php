<?php
session_start();
include('header.php');

?>

<body>
    <main>
        <h1 class="viedo_text">Welcome To Log In Site</h1>


        <video class="video" autoplay loop muted src="..\media\pexels-rostislav-uzunov-9150545.mp4"></video>
        <p class="viedo_text">
        </p>


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