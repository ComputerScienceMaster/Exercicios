<?php

require_once "functions/security.php";
require_once "classes/Usuario.php";

$validityOfRequest = isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['email']);

if($validityOfRequest){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $u = Usuario::criarUsuario($username, $password, $name, $email);
    $u->salvar();

    $_SESSION['username'] = $u->username;
    $_SESSION['fullName'] = $u->fullName;
    header("Location: dashboard.php");

}


?>


<html>

<head>
    <?php require_once 'elements/head.php'; ?>

</head>

<?php require_once 'elements/header.php'; ?>
<?php require_once 'elements/navbar.php'; ?>

<body>

    <section class="register-section">
        <form class="form" method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="How about LooperSky?" required="true">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Pick a strong one" required="true">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Be sincere..." required="true">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Your best mail" required="true">
         
            <input class="button" type="submit" value="Sing up">

        </form>

    </section>

</body>



<?php require_once 'elements/footer.php'; ?>

</html>