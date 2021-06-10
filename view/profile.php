<?php 
include 'template.php';
session_start();
?>

<!DOCTYPE html>

<head>

  <link rel="icon" type="image/png" href="../assets/img/happen_simbol.png">
  <meta charset="utf-8" />
  <title>Perfil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/profile.css">
  <link rel="stylesheet" href="../assets/css/navbar.css">

  <!-- Imports Boottrap-->
  <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
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

  <div class="container">
    <div class="main-body">

      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="../assets/img/happen_icone.png" alt="Admin" class="rounded-circle" width="150" />
                <div class="mt-3">
                  <h4><?php echo $_SESSION['name_company']; ?></h4>
                  <p class="text-secondary mb-1"><?php echo $_SESSION['specialityCompany']; ?></p>
                  <p class="text-muted font-size-sm">
                  <?php echo $_SESSION['stateCompany']; ?>
                    -
                    <?php echo $_SESSION['cityCompany']; ?>
                  </p>
                  <button class="btn btn-primary">Editar</button>
                  <button class="btn btn-primary">Cadastrar Funcionario</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <ul class="list-group list-group-flush">
              <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                  ">
                <h6 class="mb-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                  </svg>Website
                </h6>
              </li>
              <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                  ">
                <h6 class="mb-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                  </svg>Github
                </h6>
              </li>
              <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                  ">
                <h6 class="mb-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                  </svg>Twitter
                </h6>
              </li>
              <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                  ">
                <h6 class="mb-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="
                        feather feather-instagram
                        mr-2
                        icon-inline
                        text-danger
                      ">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                  </svg>Instagram
                </h6>
              </li>
              <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                  ">
                <h6 class="mb-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="
                        feather feather-facebook
                        mr-2
                        icon-inline
                        text-primary
                      ">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                  </svg>Facebook
                </h6>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Nome da Empresa</h6>
                </div>
                <div class="col-sm-9 text-secondary"><?php echo $_SESSION['name_company']; ?></div>
              </div>
              <hr />
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Pontuação no Quizz</h6>
                </div>
                <div class="col-sm-9 text-secondary"> 234 Pontos </div>
              </div>

              <hr />
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">E-mail</h6>
                </div>
                <div class="col-sm-9 text-secondary"><?php echo $_SESSION['emailUserCompany']; ?></div>
              </div>
              <hr />
              <hr />
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Estado</h6>
                </div>
                <div class="col-sm-9 text-secondary"><?php echo $_SESSION['stateCompany']; ?></div>
              </div>
              <hr />
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Cidade</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['cityCompany']; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row gutters-sm">
            <div class="col-sm-6 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h6 class="d-flex align-items-center mb-3">
                    <i class="material-icons text-info mr-2">Happen</i>Habilidades
                  </h6>
                  <small>Comunicação não agressiva</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Gestão Agil</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Inteligência Emocional</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Liderança e Gestão de Times</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Criatividade</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h6 class="d-flex align-items-center mb-3">
                    <i class="material-icons text-info mr-2">Happen</i>Conquistas
                  </h6>
                  <small>Pioneiro</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Liderança</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Boa Comunicação</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Estrategista</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Àgil</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="copyrightText">
              <p>&copy; 2021 <a href="squad.php"> Squad Dionisio</a>. All Right Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript"></script>
</body>

</html>