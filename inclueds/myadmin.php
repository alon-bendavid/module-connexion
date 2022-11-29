<?php
session_start();
$mysqli = mysqli_connect("localhost", "root", "", "moduleconnexion");
if (mysqli_connect_errno()) {
    die('conecnection error' . mysqli_connect_error());
}

$request = $mysqli->query("SELECT * from utilisateurs");
$usernames = [];
while (($fetched_table = $request->fetch_array())  != 0) {
    $usernames[] =   $fetched_table[1];
    // print_r($fetched_table);
    // print_r($fetched_table[1]);
}

$exiest = true;
if (isset($_POST['submit'])) {
    foreach ($usernames as $user => $x) {
        if ($_POST['username'] == $x) {
            echo " username already exists please choose another name";
            die();
        } else {
            $exiest = false;
        }
    }
}


if (isset($_POST['submit']) &&  $exiest == false) {


    $username = $_POST['username'];
    $name = $_POST['name'];
    $Lname = $_POST['Lname'];
    $pwd = $_POST['password'];
    $pwdRep = $_POST['repass'];
    // $currectUsr = $_SESSION[$_POST['username']];
    // echo "conecction successful";
    $sql = "INSERT INTO utilisateurs (`id`, `login`, `prenom`, `nom`, `password`) VALUES (NULL,?,?, ?,?)";
    $stmt = mysqli_stmt_init($mysqli);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($mysqli));
    }
    mysqli_stmt_bind_param($stmt, "ssss", $username, $name, $Lname, $pwd);
    mysqli_stmt_execute($stmt);
    // header('Location: ' . 'connexion.php');

}

// $sql = "INSERT INTO utilisateurs (`id`, `login`, `prenom`, `nom`, `password`) VALUES (NULL,$username,$name, $Lname,$pwd)";


// if (isset($_POST['submit'])) {
//     header('Location: ' . 'connexion.php');
// }
