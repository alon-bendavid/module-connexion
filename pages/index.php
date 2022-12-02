<?php
include('header.php');

?>

<body>
    <main>

        <h1>home page</h1>

        <?php
        if (isset($_SESSION['admin'])) {

            echo  "<p>admin is logged</p>";
        }


        ?>


    </main>

</body>

</html>