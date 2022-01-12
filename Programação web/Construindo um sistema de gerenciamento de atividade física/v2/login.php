<?php

require_once 'functions/security.php';
require_once "classes/Usuario.php";


$validityOfRequest = isset($_POST['username']) && isset($_POST['password']);

if ($validityOfRequest) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $u = new Usuario();
    $u->username = $username;
    $u->senha = $password;
    $retorno = $u->buscarPorUsername($username);
    if ($retorno != null) {

        if ($password == $retorno->senha) {
            $_SESSION['username'] = $retorno->username;
            $_SESSION['fullName'] = $retorno->fullName;
            header("Location: dashboard.php");
        }
    }
}


?>


<html>

<head>
    <?php require_once 'elements/head.php'; ?>

</head>


<?php require_once 'elements/header.php'; ?>
<?php require_once 'elements/navbar.php'; ?>

<body>
    <section class="login-section">
        <form class="form" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Type your username">
            <br><br>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Type your password">
            <br><br>
            <input class="button" type="submit" value="Login">

        </form>
    </section>
</body>


<?php require_once 'elements/footer.php'; ?>


</html>