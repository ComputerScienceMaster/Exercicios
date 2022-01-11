<?php
session_start();

if (!isset($_SESSION['username'])){
    header("location: index.php");
}

?>


<html>

<head>
    <?php require_once 'elements/head.php'; ?>
    <title>Gabi sports</title>
</head>

<?php require_once 'elements/header.php'; ?>

<?php require_once 'elements/navbar.php'; ?>

<body>

    <h2 class="titulo">Cadrastar: Treino 6</h2>


    <div class="exercisiosCadrastados">
        <h3 class="textoCadrastado"> Exercisios Cadrastados </h3>
        <div class="exercisio">
            <i style="color:red;" class="fas fa-circle"></i>
            <o> Tipo: Hipertrofia | Tempo : 10 min | BPM: 100</p>
        </div>

        <div class="exercisio">
            <i style="color:red;" class="fas fa-circle"></i>
            Tipo: cardio | Nome: esteira | Tempo : 30 min | BPM: 110
        </div>

        <div class="exercisio">
            <i style="color:red;" class="fas fa-circle"></i>
            <o> Tipo: cardio | Nome: eliptico | Tempo : 30 min | BPM: 150 </p>
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

</html>