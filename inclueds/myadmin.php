<?php
//connect into database when inside plesk
// $mysqli = mysqli_connect("localhost", "alon", "laplateforme", "ben-david-alon_module_connexion");

//connect databse in development
$mysqli = mysqli_connect("localhost", "root", "", "moduleconnexion");


if (mysqli_connect_errno()) {
    die('conecnection error' . mysqli_connect_error());
}

$request = $mysqli->query("SELECT * from utilisateurs");
$usernames = [];
while (($fetched_table = $request->fetch_array())  != 0) {
    $usernames[] =   $fetched_table[1];
    // var_dump($fetched_table);
    // print_r($fetched_table[1]);
}




//check if username already exist
$exiest = true;
if (isset($_POST['submit'])) {
    foreach ($usernames as $user => $x) {
        if ($_POST['username'] == $x) {
            echo " username already exists please choose another name";
            $exiest = true;
        } else {
            $exiest = false;
        }
    }
    //pass check
    $passCheck = 0;
}
if (isset($_POST['submit'])) {
    if ($_POST['repass']  !== $_POST['password']) {
        echo "password doesnt match, please retype password";
        die();
    } elseif ($_POST['password'] === $_POST['repass']) {

        $passCheck = true;
    }
}

//singing up the user into the database
if (isset($_POST['submit']) &&  $exiest == 0 && $passCheck = true) {

    // var_dump($passCheck);

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
    header('Location: ' . 'connexion.php');
    echo "user hes been successfully created";
}





// $sql = "INSERT INTO utilisateurs (`id`, `login`, `prenom`, `nom`, `password`) VALUES (NULL,$username,$name, $Lname,$pwd)";


// if (isset($_POST['submit'])) {
//     header('Location: ' . 'connexion.php');
// }
// $mysqli = new mysqli("localhost", "root", "", "moduleconnexion");
//select students table 
// $request = $mysqli->query("SELECT * FROM utilisateurs where  login ");
//insert into n array

// while (($fetched_table = $request->fetch_array())  != 0) {
//     var_dump($fetched_table);

//     if ($_POST['loginUsr'] == $fetched_table[0]) {
       
//     }
//     if (isset($_POST['loginUsr'])) {

//         var_dump($fetched_table);
//         echo $fetched_table[0];
//     }
//     var_dump($fetched_table);
// }
