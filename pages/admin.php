<?php

include('header.php');
// include('../inclueds/login.php');
// include('../inclueds/myadmin.php');
include('../inclueds/connect.php');




?>

<body>
    <h1>admin page</h1>

    <?php
    // $con=mysqli_connect("example.com","peter","abc123","my_db");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con, "SELECT * FROM utilisateurs");

    echo "<table border='1'>
<tr>
<th>username</th>
<th>prenom</th>
<th>nom</th>
<th>password</th>
</tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['login'] . "</td>";
        echo "<td>" . $row['prenom'] . "</td>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";

        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
    ?>

</body>

</html>