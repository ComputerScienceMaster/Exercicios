<?php

require_once 'functions/security.php';
require_once "classes/Usuario.php";


// a partir desse ponto do código o meu website consegue se conectar ao banco de dados

$user = new Usuario();
$user->username = $_SESSION['username'];
$user = $user->buscarPorUsername();


if (isset($_POST['acao']) && $_POST['acao'] == "deleteAccount") {
    $u = new Usuario();
    $u->username = $_SESSION["username"];
    $u->deletar();
    session_destroy();
    Header("Location: index.php");
}


$isValid = isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['nome']);

if ($isValid) {


    if (isset($_POST['acao']) && $_POST['acao'] == "updateAccount") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $nome = $_POST['nome'];

        $u = Usuario::criarUsuario($username, $password, $nome, $email);
        $u->atualizar();
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

    <section class="register-section">

        <h2 class="titulo"> Update user information </h2>
        <form class="form" method="POST" action="profile.php">
            <input type="hidden" name="acao" value="updateAccount" />
            <label for="username">Username</label>
            <input type="text" name="username" value="<?= $user->username ?>" placeholder="How about LooperSky?">
            <label for="password">Password</label>
            <input type="password" name="password" value="<?= $user->senha ?>" placeholder="Pick a strong one">
            <label for="name">Name</label>
            <input type="text" name="nome" value="<?= $user->fullName ?>" placeholder="Be sincere...">
            <label for="email">Email</label>
            <input type="text" name="email" value="<?= $user->email ?>" placeholder="Your best mail">

            <input class="button" type="submit" value="Update">

        </form>



    </section>

    <section class=register-section>

        <h2 class="titulo"> Delete Account </h2>

        <form class="form" method="POST">
            <input type="hidden" name="acao" value="deleteAccount" />
            <input class="deleteButton" type="submit" value="Delete Account">
        </form>

    </section>

</body>



<?php require_once 'elements/footer.php'; ?>

</html>