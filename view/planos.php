<!DOCTYPE html>
<html>

<head>
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
        <ul class="navigation" style="margin-left: 1500px; !important">
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
				<li>5GB Linux Web Space</li>
				<li>5 MySQL Databases</li>
				<li>500 Emails</li>
				<li>250Gb mothly Transfer</li>
				<li class="text-muted"><del>24/7 Tech Support</del></li>
				<li class="text-muted"><del>Daily Backups</del></li>
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
				<li>10GB Linux Web Space</li>
				<li>10 MySQL Databases</li>
				<li>1000 Emails</li>
				<li>750Gb mothly Transfer</li>
				<li>24/7 Tech Support</li>
				<li class="text-muted"><del>Daily Backups</del></li>
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
				<li>50GB Linux Web Space</li>
				<li>100 MySQL Databases</li>
				<li>Unlimited Emails</li>
				<li>1000Gb mothly Transfer</li>
				<li>24/7 Tech Support</li>
				<li>Daily Backups</li>
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
</body>

</html>