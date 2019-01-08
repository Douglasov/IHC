<!DOCTYPE HTML>

<html>

<head>
	<title>DG-Runners Calendário</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
	<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-panels.min.js"></script>
	<script src="js/emailvalid.js"></script>
	<script src="js/init.js"></script>
	<script src="js/searchpass.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
	</noscript>
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/stylebarra.css">
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head>



<body class="homepage">


	<!-- Header -->
	<div id="header">
		<div class="logainer">
			<nav id="navlogainer">
				<ul>

					<li class="active">
						<a href="loginpage.php">Login</a>
					</li>
					<li class="active">
						<a href="cadastrospage.php">Registrar</a>
					</li>

				</ul>
			</nav>

		</div>
		<div class="container">

			<!-- Logo -->
			<div class="toplogo">
				<div id="logo">

					<imglog>
						<img src="images/Logo.png">
					</imglog>
					<h1>
							<a href="#" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></a>
						
							<ul class="dropdown-menu" role="menu">
								<form method="post" class="searchmobile" role="search" action="searchpage.php" >
									<input name="busca" type="text" class="form-control" placeholder="Procure sua corrida aqui" >
									<button type="submit" class="btn btn-default">
										<i class="fas fa-search"></i>
									</button>
								</form>
	
							</ul>
						<a href="index.php">Calendário</a>
					</h1>

				</div>
			</div>

			<!-- Nav -->
			<nav id="nav">
				<ul>
                        <li>
						<a href="index.php">Homepage</a>
					</li>
					<li>
						<a href="Corridas.php">Corridas</a>
					</li>
					<li>
						<a href="Noticias.php">Noticias</a>
					</li>
					<li class="active">
						<a href="calendario.php">Calendário</a>
					</li>
					<?php include ("logadoornotmobile.php");?>
				</ul>
			</nav>

		</div>
	</div>


	<!-- Featured -->

			<va id="footer"></va>

	<!-- /Featured -->
	<!-- Footer -->
	

</body>

<val id="barra"></val>
<script>$("#barra").load("barra.php");</script>


<script>$("#footer").load("footer.php");</script>


</html>