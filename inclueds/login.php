<?php

//conect into database
$con = mysqli_connect("localhost", "root", "", "moduleconnexion");
if (mysqli_connect_errno()) {
    die('conecnection error' . mysqli_connect_error());
}

//fetch information
$sql = "SELECT * FROM utilisateurs";
$query = $con->query($sql);
$users = $query->fetch_all();

var_dump($users);
