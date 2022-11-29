<?php
include('header.php');
include('../inclueds/myadmin.php');

?>

<body>
    <h1>sign in</h1>
    <form action="login.php" method="post">
        <input type="text" placeholder="username" name="login"><br required>

        <input type="text" placeholder="password" name="loginPwd" required><br>

        <button type="submit" name="submit">Sign</button>


    </form>

</body>

</html>