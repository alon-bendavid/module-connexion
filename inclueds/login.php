<?php
session_start();
//conect into database
$con = mysqli_connect("localhost", "root", "", "moduleconnexion");
if (mysqli_connect_errno()) {
    die('conecnection error' . mysqli_connect_error());
}

//fetch information
$sql = "SELECT * FROM utilisateurs";
$query = $con->query($sql);
$users = $query->fetch_all();

// var_dump($users);
if (isset($_POST['loginSub'])) {
    foreach ($users as $user) {
        // print_r($user[1]);
        if ($_POST['loginUsr'] == $user[1]) {
            // print_r($user);
            if ($_POST['loginPwd'] == $user[4]) {
                $_SESSION['user'] = $user[1];
                $_SESSION['active'] = true;


                print_r("welcome "  . $_SESSION['user'] . " you are now logged in");
                if ($user[1] == 'admin') {
                    $_SESSION['admin'] = true;
                    echo "work";
                }
            }
        }
    }
}
// var_dump($_POST['loginUsr']);
