<?php
//conect into database in plesk
// $con = mysqli_connect("localhost", "alon", "laplateforme", "ben-david-alon_module_connexion");

//connect to database in development
$con = mysqli_connect("localhost", "root", "", "moduleconnexion");




//for the myadmin.php
//connect into database when inside plesk
// $mysqli = mysqli_connect("localhost", "alon", "laplateforme", "ben-david-alon_module_connexion");

//connect databse in development
$mysqli = mysqli_connect("localhost", "root", "", "moduleconnexion");
