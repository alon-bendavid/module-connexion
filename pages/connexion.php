<?php
include('header.php');

include('../inclueds/login.php');

?>

<body>
    <h1>sign in</h1>
    <form action="connexion.php" method="post">
        <div class="box">
            <input type="text" placeholder="username" name="loginUsr"><br required>

            <input type="text" placeholder="password" name="loginPwd" required><br>

            <button type="submit" name="loginSub">Sign</button>
        </div>

    </form>

</body>

</html>