<!doctype html>
<?php 
include 'template.php';
?>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="../assets/img/happen_simbol.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.83.1">
  <title>Login</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



  <!-- Custom styles for this template -->
  <link href="../assets/css/login.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form>
      <img class="mb-4" src="../assets/img/happen_grey.png" alt="" width="160" height="77">

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="nome@examplo.com">
        <label for="floatingInput">Endereço de Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
        <label for="floatingPassword">Senha</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar-se
        </label>
      </div>

      <a class="w-100 btn btn-primary btn-lg" href="profile.php" role="button">Logar</a>


      <hr>
      <a class="w-100 btn btn-primary btn-lg" href="../index.php" role="button">Voltar</a>
      <br>
      <br>
      Ainda não possui cadastro?
      <a href="cadastro.php" role="button">Cadastre-se</a>
      <br>
      Esqueceu sua senha?
      <a href="Recuperar_Senha.php" role="button">Recuperar senha</a>
      <br>
      <br>

      <div class="copyrightText">
        <p>&copy; 2021 <a href="squad.php"> Squad Dionisio</a>. All Right Reserved</p>
      </div>
    </form>
  </main>



</body>

</html>