<!-- Created By CodingNepal - www.codingnepalweb.com  -->
<!DOCTYPE html>
<html lang="en">
<?php 
include 'template.php';
?>
<head>
    <link rel="icon" type="image/png" href="../assets/img/happen_simbol.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Happen</title>
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/quiz.css">
    <!-- FontAweome CDN Link for Icons-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-light nav-top" id="nav-bar">
            <div class="container-fluid nav-container">
                <a class="navbar-brand" href="home.php">
                    <img src="../assets/img/happen.png" style=" max-width:118px; 
                    max-height:60px"></a>

                <div style="width: 30%;">
                    <a class="bi bi-house-door icons" href="home.php"></a>
                    <a class="bi bi-puzzle icons" href="quiz.php" role="button"></a>
                    <a class="bi bi-trophy icons" href="ranking.php" role="button"></a>
                    <a class="bi bi-person icons" href="profile.php" role="button"></a>
                </div>
            </div>
        </nav>
    </header>

    <!-- start Quiz button -->
    <div class="start_btn"><button>Jogar</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Regras do Quiz</span></div>
        <div class="info-list">
            <div class="info">1. Você terá apenas <span>15 segundos</span> por questão.</div>
            <div class="info">2. Assim que você seleciona uma opção não poderá selecionar outra.</div>
            <div class="info">3. Quando o tempo acabar, você não poderá escolher nenhuma opção.</div>
            <div class="info">4. Você não poderá sair do Quiz quando uma vez iniciado.</div>
            <div class="info">5. Sua pontuação será baseada no número de respostas corretas.</div>
        </div>
        <div class="buttons">
            <button class="quit">Sair</button>
            <button class="restart">Continuar</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Quiz Happen</div>
            <div class="timer">
                <div class="time_left_txt">Tempo</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Próxima</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <img src="../assets/img/happen_grey.png" style=" max-width:118px; 
                    max-height:60px"></a>
        </div>
        <div class="complete_text">Você Finalizou o quiz!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart" id="restart">Jogar Novamente</button>
            <a href="profile.php"><button class="quit" id="quit">Sair do Quiz</button></a>
        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="../assets/js/questionquiz.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="../assets/js/quiz.js"></script>


</body>

</html>