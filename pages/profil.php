<?php
session_start();
include('header.php');

?>

<body>
    <h1>profile page</h1>
    <?php
    if (isset($_SESSION['user'])) {
        foreach ($_SESSION['useInfo'] as $info) {
            echo $info . " ";
        }
        // echo $_SESSION['useInfo'][1] . $_SESSION['useInfo'][2];
    }


    ?>




</body>

</html>