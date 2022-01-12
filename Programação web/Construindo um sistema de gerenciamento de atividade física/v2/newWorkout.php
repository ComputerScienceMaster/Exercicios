
<?php

require_once 'functions/security.php';

?>

<html>

<head>
    <?php require_once 'elements/head.php'; ?>
    <title>Gabi sports</title>
</head>

<?php require_once 'elements/header.php'; ?>

<?php require_once 'elements/navbar.php'; ?>

<body>

    <h2 class="titulo">Register: Workout 6</h2>


    <div class="exerciciosCadastrados">
        <div class="exercicio">
            <i style="color:red;" class="fas fa-circle"></i>
            <o> Type: Hipertrophy | Time : 10 min | BPM: 100</p>
        </div>

        <div class="exercicio">
            <i style="color:red;" class="fas fa-circle"></i>
            Type: Cardio | Name: Treadmill | Time : 30 min | BPM: 110
        </div>

        <div class="exercicio">
            <i style="color:red;" class="fas fa-circle"></i>
            <o> Type: Cardio | Name: Eliptical | Time : 30 min | BPM: 150 </p>
        </div>

    </div>

    <h2 class="titulo"> Esteira </h2>

    <section class="cadastro-form-section">

        <form class="cadastroForm">
            <label for="tempo">Time</label>
            <input type="text" name="tempo" placeholder="How long is your workout?">
            <br>
            <label for="nome">Name</label>
            <input type="nome" name="nome" placeholder="Name your workout">
            <br>
            <label for="velocidade">Speed</label>
            <input type="velocidade" name="velocidade" placeholder="What speed?">
            <br>
            <label for="username">BPM</label>
            <input type="BPM" name="BPM" placeholder="Beats per minute?">
            <br>
            <label for="inclinacao">Slope</label>
            <input type="inclinacao" name="inclinacao" placeholder="Slope?">
            <br>
            <button class="button button1">Complete</button>

        </form>
    </section>
    <h2 class="titulo"> Hipertrofia </h2>

    <section class="cadastro-form-section">

        <form class="cadastroForm">
            <label for="tempo">Time</label>
            <input type="text" name="tempo" placeholder="How long is your workout?">
            <br>
            <label for="exerciseType">Type of exercise</label>
            <input type="exerciseType" name="exerciseType" placeholder="Name your workout">
            <br>
            <label for="name">name</label>
            <input type="name" name="name" placeholder="Name?">
            <br>
            <label for="series">Series</label>
            <input type="series" name="series" placeholder="How many times?">
            <br>
            <label for="repetitions">Repetitions</label>
            <input type="repetitions" name="repetitions" placeholder="how many repetitions?">
            <br>
            <label for="weight">Weight</label>
            <input type="weight" name="weight" placeholder="how heavy?">
            <br>
            <button class="button button1">Complete</button>


        </form>
    </section>

</body>


<?php require_once 'elements/footer.php'; ?>


</html>