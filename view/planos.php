<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/png" href="../assets/img/happen_simbol.png">
	<meta charset="utf-8">
	<title>Planos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/planos.css">
	<link href="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bd-01">
	<header id="menu">
		<a href="home.php" class="logo">Happen<span>.</span></a>
		<div class="menuToggle" onclick="toggleMenu();"></div>
		<ul class="navigation" style="margin-left: 1500px !important;">
			<li><a href="home.php" onclick="toggleMenu();">Inicio</a></li>
			<li><a href="login.php" onclick="toggleMenu();">Login</a></li>
			<li><a href="planos.php" onclick="toggleMenu();">Planos</a></li>
		</ul>
	</header>
	<div class="container">
		<div class="row gutters">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
				<div class="pricing-plan">
					<div class="pricing-header">
						<h4 class="pricing-title">Starter</h4>
						<div class="pricing-cost">R$1.500,00</div>
						<div class="pricing-save">Economize R$300,00</div>
					</div>
					<ul class="pricing-features">
						<li>Acesso as aulas ao vivo</li>
						<li>Acesso liberado para 10 funcionários</li>
						<li class="text-muted"><del>Acesso as aulas gravadas</del></li>
						<li class="text-muted"><del>Acesso ao quiz Happen Academy</del></li>
						<li class="text-muted"><del>Participar do raking mensal</del></li>
					</ul>
					<div class="pricing-footer">
						<a href="#" class="btn btn-primary btn-lg">Select Plan</a>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
				<div class="pricing-plan">
					<div class="pricing-header red">
						<h4 class="pricing-title">Premium</h4>
						<div class="pricing-cost">R$4.000.00</div>
						<div class="pricing-save">Economize R$900.00</div>
					</div>
					<ul class="pricing-features">
						<li>Acesso as aulas ao vivo</li>
						<li>Acesso liberado para 25 funcionários</li>
						<li>Acesso as aulas gravadas</li>
						<li class="text-muted"><del>Acesso ao quiz Happen Academy</del></li>
						<li class="text-muted"><del>Participar do raking mensal</del></li>
					</ul>
					<div class="pricing-footer">
						<a href="#" class="btn btn-danger btn-lg">Select Plan</a>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
				<div class="pricing-plan">
					<div class="pricing-header secondary">
						<h4 class="pricing-title">Ultra</h4>
						<div class="pricing-cost">R$4.800.00</div>
						<div class="pricing-save">Economize $1.200,00</div>
					</div>
					<ul class="pricing-features">
						<li>Acesso as aulas ao vivo</li>
						<li>Acesso liberado para 50 funcionários</li>
						<li>Acesso as aulas gravadas</li>
						<li>Acesso ao quiz Happen Academy</li>
						<li >Participar do raking mensal</li>
					</ul>
					<div class="pricing-footer">
						<a href="#" class="btn btn-success btn-lg">Select Plan</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		window.addEventListener('scroll', function() {
			const header = document.querySelector('header');
			header.classList.toggle("sticky", window.scrollY > 0);
		});

		function toggleMenu() {
			const menuToggle = document.querySelector('.menuToggle');
			const navigation = document.querySelector('.navigation');
			menuToggle.classList.toggle('active');
			navigation.classList.toggle('active');
		}
	</script>

	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript"></script>
	<div class="copyrightText" id="copyright">
		<p>&copy; 2021 <a href="squad.php"> Squad Dionisio</a>. All Right Reserved</p>
	</div>
</body>

</html>