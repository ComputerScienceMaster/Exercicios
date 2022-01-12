<?php


if (isset($_SESSION ['username'])) {
?>

<header class="header">
    <div class="header-title">
        Extreme Sports
    </div>
    <div class="header-links">
        <div class="welcomeMessage"> Hello, <?php echo $_SESSION ['fullName'];?> </div>
        <a href="profile.php"> Profile</a>
        <a href="logout.php"> Sign out</a>
    </div>
</header>

<?php } else {  ?>

<header class="header">
    <div class="header-title">
        Extreme Sports
    </div>
    <div class="header-links">
        <a href="login.php"> Login</a>
        <a href="signup.php"> Sign Up</a>
    </div>
</header>

<?php } ?>