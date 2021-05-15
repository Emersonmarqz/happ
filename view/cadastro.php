<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Cadastro · Happen</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../assets/css/cadastro.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../assets/img/happen_grey.png" alt="" width="172" height="77">
    </div>

    
      <div class="py-5 text-center">
        <!--<h4 class="mb-3">Billing address</h4>-->
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Nome inválido
              </div>
            </div>
          
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Sobrenome</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Sobrenome Inválido
              </div>
            </div>

            
            <div class="col-12">
              <label for="firstName" class="form-label">CPF (Apenas Números)</label>
              <input type="text" maxlength="11" class="form-control" id="cpf" placeholder="" value="" required>
              <div class="invalid-feedback">
                CPF Inválido
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Nome do usuário</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Nome de usuário" required>
              <div class="invalid-feedback">
                  Digite um Nome de Usuário
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="joao@example.com" required>
              <div class="invalid-feedback">
                Email Inválido
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="address" placeholder="Rua, Avenida" required>
              <div class="invalid-feedback">
                Endereço Inválido
              </div>
            </div>

            <!--<div class="col-12">
              <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>-->

            <div class="col-md-5">
              <label for="country" class="form-label">País</label>
              <select class="form-select" id="country" required>
                <option value="">Escolher...</option>
                <option>Brasil</option>
              </select>
              <div class="invalid-feedback">
                Selecione um País
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Estado</label>
              <select class="form-select" id="state" required>
                <option value="">Escolher...</option>
                <option>Acre (AC)</option>
                <option>Alagoas (AL)</option>
                <option>Amapá (AP)</option>
                <option>Amazonas (AM)</option>
                <option>Bahia (BA)</option>
                <option>Ceará (CE)</option>
                <option>Distrito Federal (DF)</option>
                <option>Espírito Santo (ES)</option>
                <option>Goiás (GO)</option>
                <option>Maranhão (MA)</option>
                <option>Mato Grosso (MT)</option>
                <option>Mato Grosso do Sul (MS)</option>
                <option>Minas Gerais (MG)</option>
                <option>Pará (PA)</option>
                <option>Paraíba (PB)</option>
                <option>Paraná (PR)</option>
                <option>Pernambuco (PE)</option>
                <option>Piauí (PI)</option>
                <option>Rio de Janeiro (RJ)</option>
                <option>Rio Grande do Norte (RN)</option>
                <option>Rio Grande do Sul (RS)</option>
                <option>Rondônia (RO)</option>
                <option>Roraima (RR)</option>
                <option>Santa Catarina (SC)</option>
                <option>São Paulo (SP)</option>
                <option>Sergipe (SE)</option>
                <option>Tocantins (TO)</option>
              </select>
              <div class="invalid-feedback">
               Selecione um estado
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">CEP</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                CEP Inválido
              </div>
            </div>
          </div>
          
          <section class="check-button">

          <hr class="my-4">

          <div class="radio">
            <label>
              <input type="radio" name="tipo-pessoa"  checked>
              Aluno
            </label>
          </div>

          <div class="radio">
            <label>
              <input type="radio" name="tipo-pessoa">
              Empresa
            </label>
          </div>

          <hr>
         
          </section>

          <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
          <br>
          <br>
          <a class="w-100 btn btn-primary btn-lg" href="../index.php" role="button">Voltar</a>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021 Squad Dionisio</p>
    <!--<ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>-->
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
