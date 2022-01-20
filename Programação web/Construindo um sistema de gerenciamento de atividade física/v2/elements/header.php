<?php

if (isset($_POST['acao']) && $_POST['acao'] == "signout") {
    session_destroy();
    header("Location: index.php");
}

if (isset($_SESSION['username'])) {

?>
    <header class="header">
        <div class="header-title">
            Extreme Sports
        </div>
        <div class="header-links">
            <p class="welcome"> Hello, <?= $_SESSION['fullName'] ?> </p>
            <form method="POST">
                <a href="profile.php" class="form-button" value="Profile"> Profile</a>

                <input type="hidden" name="acao" value="signout" />
                <input class="form-button" type="submit" value="Sign out" />
            </form>
        </div>
    </header>

<?php
} else {
?>

    <header class="header">
        <div class="header-title">
            Extreme Sports
        </div>
        <div class="header-links">
            <a href="login.php"> Login</a>
            <a href="signup.php"> Sign-up</a>
        </div>
    </header>

<?php
}
?>