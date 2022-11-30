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
        <div class="box">
            <input type="text" placeholder="username" name="username"><br required>
            <input type="text" placeholder="name" name="name"><br required>
            <input type="text" placeholder="last name" name="Lname" required><br>
            <input type="text" placeholder="password" name="password" required><br>
            <input type="text" placeholder="retype password" name="repass" required><br>
            <button type="submit" name="submit">Sign</button>
        </div>

    </form>

</body>

</html>