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
                <input type="text" name="username" placeholder="How about LooperSky?">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Pick a strong one">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Be sincere...">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Your best mail">
         
            <input class="button" type="submit" value="Sing up">

        </form>

    </section>

</body>



<?php require_once 'elements/footer.php'; ?>

</html>