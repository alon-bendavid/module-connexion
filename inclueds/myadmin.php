<?php

$mysqli = mysqli_connect("localhost", "root", "", "moduleconnexion");
if (mysqli_connect_errno()) {
    die('conecnection error' . mysqli_connect_error());
}

$request = $mysqli->query("SELECT * from utilisateurs");
while (($fetched_table = $request->fetch_array())  != 0) {
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $Lname = $_POST['Lname'];
    $pwd = $_POST['password'];
    $pwdRep = $_POST['repass'];
    echo "conecction successful";
    $sql = "INSERT INTO utilisateurs (`id`, `login`, `prenom`, `nom`, `password`) VALUES (NULL,?,?, ?,?)";
    $stmt = mysqli_stmt_init($mysqli);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($mysqli));
    }
    mysqli_stmt_bind_param($stmt, "ssss", $username, $name, $Lname, $pwd);
    mysqli_stmt_execute($stmt);
    header('Location: ' . 'connexion.php');
}

// $sql = "INSERT INTO utilisateurs (`id`, `login`, `prenom`, `nom`, `password`) VALUES (NULL,$username,$name, $Lname,$pwd)";


// if (isset($_POST['submit'])) {
//     header('Location: ' . 'connexion.php');
// }
