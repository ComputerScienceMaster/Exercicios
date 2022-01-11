<?php

session_start();

if (!isset($_SESSION['username'])){
    header("location: index.php");
}

?>

<html>

<head>
    <?php require_once 'elements/head.php'; ?>
    <title> User Dashboard </title>
</head>

<body>
    <?php require_once 'elements/header.php'; ?>

    <?php require_once 'elements/navbar.php'; ?>
    
    <h2 class="titulo"><?php echo $_SESSION['nome']; ?></h2>

    <section class="treinos">

        <div id="Treino1" class="tabcontent">

            <div class="card-exercicio">
                <div class="card-icon">
                    <i class="fas fa-dumbbell minhaEstrela"></i>
                </div>
                <div class="card-text">
                    <h3>Abdominal</h3>
                    <p>Repetições 25, séries 3</p>
                    <button>Iniciar!</button>

                </div>
            </div>

            <div class="card-exercicio">
                <div class="card-icon">
                    <i class="fas fa-dumbbell minhaEstrela"></i>
                </div>
                <div class="card-text">
                    <h3>V-ups</h3>
                    <p>Repetições 10, séries 3</p>
                    <button>Iniciar!</button>
                </div>
            </div>

            <div class="card-exercicio">
                <div class="card-icon">
                    <i class="fas fa-dumbbell minhaEstrela"></i>
                </div>
                <div class="card-text">
                    <h3>Testa</h3>
                    <p>Repetições 8, séries 3</p>
                    <button>Iniciar!</button>

                </div>
            </div>

            <div class="card-exercicio">
                <div class="card-icon">
                    <i class="fas fa-dumbbell minhaEstrela"></i>
                </div>
                <div class="card-text">
                    <h3>Triceps corda</h3>
                    <p>Repetições 10, séries 3</p>
                    <button>Iniciar!</button>
                </div>
            </div>

            <div class="card-exercicio">
                <div class="card-icon">
                    <i class="fas fa-dumbbell minhaEstrela"></i>
                </div>
                <div class="card-text">
                    <h3>Triceps banco</h3>
                    <p>Repetições 15, séries 3</p>
                    <button>Iniciar!</button>

                </div>
            </div>

            <div class="card-exercicio">
                <div class="card-icon">
                    <i class="fas fa-dumbbell minhaEstrela"></i>
                </div>
                <div class="card-text">
                    <h3>Prancha Lateral</h3>
                    <p>50 segundos, séries 3</p>
                    <button>Iniciar!</button>
                </div>
            </div>
        </div>

    </section>

    <section class="treinosAntigos">
        <h2 class="titulo"> Treinos Antigos </h2>

        <div class="treinos-container">

            <h3 class="generoExercisio"> Cardio </h3>

            <div class=TreinoAntigo>
                <img class="imgTreinoAntigo" src="resources/images/correndo.jpeg">
                <div class="detalesExercisio">
                    <p> Tempo/km 8 minutos </p>
                    <p> Velocidade: 9km/hr </p>
                    <p> inclinaçãoes 20graus </p>
                    <p> batimentos caloricos: 145 </p>
                    <p> Queima Calorica 400 </p>
                </div>
            </div>


            <h3 class="generoExercisio"> Hipertrofia </h3>

            <div class=TreinoAntigo>
                <img class="imgTreinoAntigo" src="resources/images/correndo.jpeg">
                <div class="detalesExercisio">
                    <p> Tempo de treinamento: 60 min </p>
                    <p> numero de exercisios: 6</p>
                    <p> Numeros de series: 12 </p>
                    <p> Queima Calorica 200 </p>
                </div>
            </div>
        </div>
    </section>
    <section class="suaPosicaoNoRanking">

        <h3 class="titulo"> Posição no Ranking </h3> 
    
        <div class="posicaoRanking"> 
            <div class=position>
                <p> 565° - Jonas </p>
            </div>

            <div class=position>
            <p> 566° - Ana Luisa </p>
            </div>

            <div class=position>
            <p> 567° - Pedro </p>
            </div>

            <div class=position>
            <p> 568° - Maria </p>
            </div>

            <div class=position>
            <p> 569° - João pedro </p>

            </div>
             </div>
    </section>

</body>

</html>