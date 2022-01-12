<?php

if (isset($_SESSION['username'])) {

?>
    <div class="navbar">
        <a href="index.php"> Home </a>
        <a href="dashboard.php">User Dashboard</a>
        <a href="newWorkout.php"> Register a new workout </a>
        <a> Contact us </a>
    </div>
<?php
} else {
?>
    <div class="navbar">
        <a href="index.php"> Home </a>
        <a> Contact us </a>
    </div>
<?php
}
?>