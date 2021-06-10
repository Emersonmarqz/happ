<?php 
include 'template.php';
?>
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/cadastro.css" rel="stylesheet">

<head>
    
    <link rel="icon" type="image/png" href="../assets/img/happen_simbol.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Cadastro</title>
</head>

<body class="bg-light">
    <div class="container">
        <main>
            <div class="py-5 text-center" style="padding-bottom: 0em !important;">
                <img class="d-block mx-auto mb-4" src="../assets/img/happen_grey.png" alt="" width="172" height="77">
            </div>
            <div class="py-5 text-center">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Razão social</label>
                            <input type="text" class="form-control" id="nameCompanie" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Nome inválido
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="firstName" class="form-label">CNPJ (Apenas Números)</label>
                            <input type="text" maxlength="14" class="form-control" id="cnpjCompanies" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                CPF Inválido
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="emailCompanie" placeholder="joao@example.com" required>
                            <div class="invalid-feedback">
                                Email Inválido
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="state" class="form-label">Estado</label>
                             <input type="text" class="form-control" placeholder="Insira seu estado" id="stateCompanie" value="" required> 
                             <div class="invalid-feedback">
                                Estado Inválido
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="state" class="form-label">Cidade</label>
                             <input type="text" class="form-control" placeholder="Insira sua cidade" id="cityCompanie" value="" required> 
                             <div class="invalid-feedback">
                                Cidade Invalida
                            </div>
                        </div>

                    
                        <div class="col-6" >
                            <label for="lastName" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="passwordCompanie" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Senha Inválida
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="lastName" class="form-label">Confirme Sua Senha</label>
                            <input type="password" class="form-control" id="password-confirmation" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Senha diferente
                            </div>
                        </div>
                    </div>
                    <section class="check-button">
                        <hr class="my-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="tipo-pessoa"checked>
                                Empresa
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="tipo-pessoa" disabled>
                                Aluno
                            </label>
                        </div>
                        <hr>
                    </section>
                    <button class="w-100 btn btn-primary btn-lg" id="sendFormRegisterCompanie">Cadastrar</button>
                    <br>
                    <br>
                    <a class="w-100 btn btn-primary btn-lg" href="../index.php" role="button">Voltar</a>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="copyrightText">
                        <p>&copy; 2021 <a href="squad.php"> Squad Dionisio</a>. All Right Reserved</p>
                    </div>
              
            </div>
    </div>
    </main>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/form-validation.js"></script>
    <script src="../assets/js/script.js"></script>
</body>