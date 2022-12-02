<?php

include('header.php');
include('../inclueds/login.php');



?>

<body>
    <h1>admin page</h1>
    <table>
        <tr>
            <?php
            foreach ($users as $user) {
                // print_r($user);
                echo " <td> $user </td>";
            }





            ?>
        </tr>
    </table>


</body>

</html>