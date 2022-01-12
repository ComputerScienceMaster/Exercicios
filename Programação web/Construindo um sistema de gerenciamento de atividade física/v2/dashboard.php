<html>

<head>
    <?php require_once 'elements/head.php'; ?>
    <title> User Dashboard </title>
</head>

<body>
    <?php require_once 'elements/header.php'; ?>

    <?php require_once 'elements/navbar.php'; ?>

    <h2 class="titulo">Treinos Cadastrados</h2>

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

            <h3 class="generoExercicio"> Cardio </h3>

            <div class=TreinoAntigo>
                <div class="card-treinoAntigo">
                    <img class=" imgTreinoAntigo" src="resources/images/groupWorkout.jpg">
                    <a href='https://www.freepik.com/photos/love'>Love photo created by artursafronovvvv - www.freepik.com</a>
                </div>
                <div class="detalhesExercicio">
                    <p> Name: Treadmill Jogging </p>
                    <p> Time/km: 8 minutes </p>
                    <p> Speed: 9km/hr </p>
                    <p> Angle: 20º </p>
                    <p> BPM: 145 </p>
                    <p> Kcal/burned: 400 </p>
                </div>
            </div>


            <h3 class="generoExercicio"> Hipertrophy </h3>

            <div class=TreinoAntigo>
                <div class="card-treinoAntigo">
                <img class=" imgTreinoAntigo" src="resources/images/womanWorkout.jpg">
                    <a href='https://www.freepik.com/photos/music'>Music photo created by serhii_bobyk - www.freepik.com</a>
                </div>
                <div class="detalhesExercicio">

                    <p> Name: Leg-press </p>
                    <p> Time: 15 min </p>
                    <p> Repetitions: 12</p>
                    <p> Series: 3 </p>
                    <p> Load: 50 kg </p>
                </div>
            </div>
        </div>
    </section>
    <section class="suaPosicaoNoRanking">

        <h3 class="titulo"> Posição no Ranking </h3>

        <div class="posicaoRanking">
            <div class="position">
                <p> 565° - Jonas </p>
            </div>

            <div class="position">
                <p> 566° - Ana Luisa </p>
            </div>

            <div class="position positionHighlight">
                <p> 567° - Pedro </p>
            </div>

            <div class="position">
                <p> 568° - Maria </p>
            </div>

            <div class="position">
                <p> 569° - João pedro </p>

            </div>
        </div>
    </section>

</body>



<?php require_once 'elements/footer.php'; ?>

</html>