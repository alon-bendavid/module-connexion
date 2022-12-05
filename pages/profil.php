<?php
session_start();
include('header.php');
include('../includes/connect.php')

?>

<body>
    <h1>profile page</h1>
    <p>Change your profile info and password.</p>
    <?php
    $data = ['username', 'name', 'last name ', 'password'];
    if (isset($_SESSION['user'])) {
        echo " <form action='inscription.php' method='post'>
        <div class='box'>";
        // foreach ($data as $x) {
        //     echo $x;
        // }
        foreach ($_SESSION['useInfo'] as $info) {
            echo "<input type='text' placeholder=' $info ' name='username'></br>";
        }
        echo "<button type='submit' name='editSub'>Submit</button>";

        if (isset($_POST['editSub'])) {

            $sql = "UPDATE utilisateurs SET nom='Doe' WHERE id=2";
        }



        // echo $_SESSION['useInfo'][1] . $_SESSION['useInfo'][2];
        // print_r($_SESSION['useInfo']);
    } else {
        echo "you are not connected, connect to show your info.";
    }


    ?>




</body>

</html>