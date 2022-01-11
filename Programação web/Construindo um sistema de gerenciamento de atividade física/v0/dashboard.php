<html>

<head>
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title> Register new Workout </title>
</head>

<body>

    <?php require_once 'elements/header.php'; ?>



    <div class="navbar">
        <a href="index.php"> Home </a>
        <a href="dashboard.php">User Dashboard</a>
        <a> Contact us </a>
    </div>


    <h2 class=titulo> Workouts registered </h2>

    <section class="treinos">


        <div>
            <div class="card-exercicio">
                <div class="card-icon">
                    <i class="far fa-star minhaEstrela"></i>
                </div>
                <div class="card-text">
                    <h3>Abs</h3>
                    <p>Repetitions: 25, Series: 3</p>
                    <button>Go!</button>

                </div>
            </div>

            <div class="card-exercicio">
                <div class="card-icon">
                    <i class="far fa-star minhaEstrela"></i>
                </div>
                <div class="card-text">
                    <h3>Stretching</h3>
                    <p>Repetitions: 10, Series 3</p>
                    <button>Go!</button>
                </div>
            </div>
        </div>
        <div>

            <div class="card-exercicio">
                <div class="card-icon">
                    <i class="far fa-star minhaEstrela"></i>
                </div>
                <div class="card-text">
                    <h3>V-ups</h3>
                    <p>Repetitions: 8, Series 3</p>
                    <button>Go!</button>

                </div>
            </div>

            <div class="card-exercicio">
                <div class="card-icon">
                    <i class="far fa-star minhaEstrela"></i>
                </div>
                <div class="card-text">
                    <h3>Goblet Squat</h3>
                    <p>Repetitions: 10, Series: 3</p>
                    <button>Go!</button>
                </div>
            </div>
        </div>

        <div>
            <div class="card-exercicio">
                <div class="card-icon">
                    <i class="far fa-star minhaEstrela"></i>
                </div>
                <div class="card-text">
                    <h3>Barbell push press</h3>
                    <p>Repetitions 15, Series 3</p>
                    <button>Go!</button>

                </div>
            </div>

            <div class="card-exercicio">
                <div class="card-icon">
                    <i class="far fa-star minhaEstrela"></i>
                </div>
                <div class="card-text">
                    <h3>Machine Triceps</h3>
                    <p>Repetitions: 25, Series 3</p>
                    <button>Iniciar!</button>
                </div>
            </div>
        </div>

    </section>

</body>

</html>