<?php
include('header.php');
include('../inclueds/myadmin.php');


// $username = $_POST['username'];
// $name = $_POST['name'];
// $Lname = $_POST['Lname'];
// $pwd = $_POST['password'];
// $pwdRep = $_POST['repass'];

// $sql = "INSERT INTO utilisateurs (`id`, `login`, `prenom`, `nom`, `password`) VALUES (NULL,'$username',' $name', '$Lname',' $pwd')";
// if (isset($_POST['submit'])) {

//     var_dump($username, $name, $Lname, $pwd, $pwdRep);
// }



?>

<body>
    <h1>sign up page</h1>
    <form action="inscription.php" method="post">
        <input type="text" placeholder="username" name="username"><br>
        <input type="text" placeholder="name" name="name"><br>
        <input type="text" placeholder="last name" name="Lname"><br>
        <input type="text" placeholder="password" name="password"><br>
        <input type="text" placeholder="retype password" name="repass"><br>
        <button type="submit" name="submit">Sign</button>


    </form>

</body>

</html>