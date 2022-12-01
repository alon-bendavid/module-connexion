<?php
include('header.php');

?>

<body>
    <h1>admin page</h1>
    <?php if (isset($_SESSION['admin'])) {
        echo "welcome back admin";
    } ?>

</body>

</html>