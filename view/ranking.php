<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <title>Ranking</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../assets/css/ranking.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>

    <!-- Nav-->
    <header>
        <nav class="navbar navbar-light nav-top" id="nav-bar">
            <div class="container-fluid nav-container">
                <a class="navbar-brand" href="home.php">
                    <img src="../assets/img/happen.png" style=" max-width:118px; 
                    max-height:60px"></a>

                <div style="width: 30%">
                    <a class="bi bi-house-door icons" href="home.php"></a>
                    <a class="bi bi-puzzle icons" href="quiz.php" role="button"></a>
                    <a class="bi bi-trophy icons" href="ranking.php" role="button"></a>
                    <a class="bi bi-person icons" href="profile.php" role="button"></a>
                </div>
            </div>
        </nav>
    </header>

    <br>
    <br>

    <div class="row gutters-sm podium">
        <div class="col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://pbs.twimg.com/profile_images/2219688007/545780_241668505941059_100002937331440_453790_2116523974_n_400x400.jpg" alt="Admin" class="rounded-circle" width="150" />
                        <img src="../assets/img/second.png" alt="segundo" class="rounded-circle" width="85">
                        <div class="mt-3">
                            <h4>Deivid Araújo</h4>
                            <p class="text-muted font-size-sm">
                                102.134 Pontos
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://pbs.twimg.com/profile_images/2219688007/545780_241668505941059_100002937331440_453790_2116523974_n_400x400.jpg" alt="Admin" class="rounded-circle" width="150" />
                        <img src="../assets/img/first.png" alt="primeiro" class="rounded-circle" width="105">
                        <div class="mt-3">
                            <h4>Deivid Araújo</h4>
                            <p class="text-muted font-size-sm">
                                207.002 Pontos
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://pbs.twimg.com/profile_images/2219688007/545780_241668505941059_100002937331440_453790_2116523974_n_400x400.jpg" alt="Admin" class="rounded-circle" width="150" />
                        <img src="../assets/img/third.png" alt="terceiro" class="rounded-circle" width="85">
                        <div class="mt-3">
                            <h4>Deivid Araújo</h4>
                            <p class="text-muted font-size-sm">
                                90.002 Pontos
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row gutters-sm ranking" style="background-color: #474a51;">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <div class="table-responsive table-condensed table-hover table-sm">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Posição</th>
                                        <th scope="col">Usuário</th>
                                        <th scope="col">Pontuação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Mark</td>
                                        <td>102.202</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">16</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">17</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">19</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">20</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrightText">
            <p>&copy; 2021 <a href="squad.php"> Squad Dionisio</a>. All Right Reserved</p>
        </div>
    </div>
</body>

</html>