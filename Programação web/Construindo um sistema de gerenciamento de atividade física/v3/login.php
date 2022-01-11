<?php


$usuariosCadastrados = json_decode(file_get_contents("data/usuarios.json"),true);


print_r($usuariosCadastrados[0]['username']);
session_start();

$msg = "<div class='alerta'>Username ou senha incorreta</div>";
$temParametros = false;

if (isset($_GET['Username']) && isset($_GET['Password'])) {
    $temParametros = true;
    if ($_GET['Username'] == $usuariosCadastrados[0]["username"] && $_GET['Password'] == $usuariosCadastrados[0]["senha"]) {
        $_SESSION['username'] = $usuariosCadastrados[0]["username"];
        $_SESSION['nome'] = $usuariosCadastrados[0]["nome"];
        header("Location: userDashboard.php");
    }
}

?>


<html>

<head>
    <?php require_once 'elements/head.php'; ?>
    <title>Gabi sports</title>
</head>


<?php require_once 'elements/header.php'; ?>
<?php require_once 'elements/navbar.php'; ?>

<?php
if ($temParametros == true) {
    echo $msg;
}
?>

<body>
    <section class="login-section">
        <form class="form">
            <label for="username">Username</label>
            <input type="text" name="Username" placeholder="Type your username">
            <br><br>
            <label for="password">Password</label>
            <input type="password" name="Password" placeholder="Type your password">
            <br><br>
            <input class="button" type="submit" value="Login">

        </form>
    </section>
</body>

</html>