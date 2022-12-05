<?php

include('header.php');
// include('../inclueds/login.php');
// include('../inclueds/myadmin.php');
include('../includes/connect.php');




?>
<!-- fetching information from database to present it in the site -->

<body>
    <h1>admin page</h1>
    <p>All site users</p>

    <?php

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con, "SELECT * FROM utilisateurs");

    echo "<table   class='styled-table'>
<tr>
<th>id</th>
<th>username</th>
<th>prenom</th>
<th>nom</th>
<th>password</th>
</tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
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