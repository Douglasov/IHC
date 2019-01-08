<!DOCTYPE HTML>

<html>

<head>
	<title>DG-Runners Cadastro</title>
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


	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery.zebra-datepicker.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
	</noscript>
	<link href="css/style-cadastro.css" rel="stylesheet" type="text/css" />
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/stylebarra.css">
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head>

<body class="left-sidebar">

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
					<a href="#">Cadastro</a>
				</h1>

			</div>

			<!-- Nav -->
			<nav id="nav">
					<ul>
							<li>
							<a href="index.php">Homepage</a>
						</li>
						<li >
							<a href="Corridas.php">Corridas</a>
						</li>
						<li>
							<a href="Noticias.php">Noticias</a>
						</li>
						<li>
							<a href="calendario.php">Calendário</a>
						</li>
						<?php include ("logadoornotmobile.php");?>
					</ul>
				</nav>

		</div>
	</div>
	<!-- Header -->


	<!-- Main -->
	<div id="pagecad">

		<!-- Main -->
		<section>
		
			<div class="formulario">
			
				<form action="cadredirecionamento.php" method="post" id="validate"  >
					<label>* Nome</label>
					<input name="nomecad" type="text" class="g">

					<label>* E-mail</label>
					<input name="emailcad" type="text" class="g">

					<label>Senha</label>
					<input name="senhacad" id="senhacad" type="password" class="g">

					<label>Confirme a senha</label>
					<input name="senhaccad" id="senhaccad" type="password" class="g">

					<label>Telefone</label>
					<input name="telefonecad" type="text" class="p" id="telefone">

					<label>Data de Nascimento</label>
					<input name="datanasccad" type="text" class="p" id="data">

					<!--<label>Data</label>
					<input name="" type="text" class="p" id="datepicker1">-->

					<label>Sexo</label>
					<select name="sexocad" id="sexocad"  class="m">
						<option value="">Selecione</option>
						<option>Masculino</option>
						<option>Feminino</option>
					</select>

					<label>CEP</label>
					<input name="cepcad" type="text" class="p" id="cep">

					<label>Endereço</label>
					<input name="enderecocad" type="text" class="g">

					<label>Número</label>
					<input name="numerocad" type="text" class="pp">

					<label>Complemento</label>
					<input name="complementocad" type="text" class="m">

					<label>Bairro</label>
					<input name="bairrocad" type="text" class="p">

					<label>Cidade</label>
					<input name="cidadecad" type="text" class="p">

					<label>Estado</label>
					<select name="estadocad" id="estadocad" class="p">
						<option value="">Selecione</option>
						<option value="AC">Acre</option>
						<option value="AL">Alagoas</option>
						<option value="AP">Amapá</option>
						<option value="AM">Amazonas</option>
						<option value="BA">Bahia</option>
						<option value="CE">Ceará</option>
						<option value="DF">Distrito Federal</option>
						<option value="ES">Espirito Santo</option>
						<option value="GO">Goiás</option>
						<option value="MA">Maranhão</option>
						<option value="MS">Mato Grosso do Sul</option>
						<option value="MT">Mato Grosso</option>
						<option value="MG">Minas Gerais</option>
						<option value="PA">Pará</option>
						<option value="PB">Paraíba</option>
						<option value="PR">Paraná</option>
						<option value="PE">Pernambuco</option>
						<option value="PI">Piauí</option>
						<option value="RJ">Rio de Janeiro</option>
						<option value="RN">Rio Grande do Norte</option>
						<option value="RS">Rio Grande do Sul</option>
						<option value="RO">Rondônia</option>
						<option value="RR">Roraima</option>
						<option value="SC">Santa Catarina</option>
						<option value="SP">São Paulo</option>
						<option value="SE">Sergipe</option>
						<option value="TO">Tocantins</option>
					</select>


					<label>Pais</label>
					<select name="paiscad" id="paiscad" class="p">
						<option value="África do Sul">África do Sul</option>
						<option value="Albânia">Albânia</option>
						<option value="Alemanha">Alemanha</option>
						<option value="Andorra">Andorra</option>
						<option value="Angola">Angola</option>
						<option value="Anguilla">Anguilla</option>
						<option value="Antigua">Antigua</option>
						<option value="Arábia Saudita">Arábia Saudita</option>
						<option value="Argentina">Argentina</option>
						<option value="Armênia">Armênia</option>
						<option value="Aruba">Aruba</option>
						<option value="Austrália">Austrália</option>
						<option value="Áustria">Áustria</option>
						<option value="Azerbaijão">Azerbaijão</option>
						<option value="Bahamas">Bahamas</option>
						<option value="Bahrein">Bahrein</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Barbados">Barbados</option>
						<option value="Bélgica">Bélgica</option>
						<option value="Benin">Benin</option>
						<option value="Bermudas">Bermudas</option>
						<option value="Botsuana">Botsuana</option>
						<option value="Brasil" selected>Brasil</option>
						<option value="Brunei">Brunei</option>
						<option value="Bulgária">Bulgária</option>
						<option value="Burkina Fasso">Burkina Fasso</option>
						<option value="botão">botão</option>
						<option value="Cabo Verde">Cabo Verde</option>
						<option value="Camarões">Camarões</option>
						<option value="Camboja">Camboja</option>
						<option value="Canadá">Canadá</option>
						<option value="Cazaquistão">Cazaquistão</option>
						<option value="Chade">Chade</option>
						<option value="Chile">Chile</option>
						<option value="China">China</option>
						<option value="Cidade do Vaticano">Cidade do Vaticano</option>
						<option value="Colômbia">Colômbia</option>
						<option value="Congo">Congo</option>
						<option value="Coréia do Sul">Coréia do Sul</option>
						<option value="Costa do Marfim">Costa do Marfim</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Croácia">Croácia</option>
						<option value="Dinamarca">Dinamarca</option>
						<option value="Djibuti">Djibuti</option>
						<option value="Dominica">Dominica</option>
						<option value="EUA">EUA</option>
						<option value="Egito">Egito</option>
						<option value="El Salvador">El Salvador</option>
						<option value="Emirados Árabes">Emirados Árabes</option>
						<option value="Equador">Equador</option>
						<option value="Eritréia">Eritréia</option>
						<option value="Escócia">Escócia</option>
						<option value="Eslováquia">Eslováquia</option>
						<option value="Eslovênia">Eslovênia</option>
						<option value="Espanha">Espanha</option>
						<option value="Estônia">Estônia</option>
						<option value="Etiópia">Etiópia</option>
						<option value="Fiji">Fiji</option>
						<option value="Filipinas">Filipinas</option>
						<option value="Finlândia">Finlândia</option>
						<option value="França">França</option>
						<option value="Gabão">Gabão</option>
						<option value="Gâmbia">Gâmbia</option>
						<option value="Gana">Gana</option>
						<option value="Geórgia">Geórgia</option>
						<option value="Gibraltar">Gibraltar</option>
						<option value="Granada">Granada</option>
						<option value="Grécia">Grécia</option>
						<option value="Guadalupe">Guadalupe</option>
						<option value="Guam">Guam</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guiana">Guiana</option>
						<option value="Guiana Francesa">Guiana Francesa</option>
						<option value="Guiné-bissau">Guiné-bissau</option>
						<option value="Haiti">Haiti</option>
						<option value="Holanda">Holanda</option>
						<option value="Honduras">Honduras</option>
						<option value="Hong Kong">Hong Kong</option>
						<option value="Hungria">Hungria</option>
						<option value="Iêmen">Iêmen</option>
						<option value="Ilhas Cayman">Ilhas Cayman</option>
						<option value="Ilhas Cook">Ilhas Cook</option>
						<option value="Ilhas Curaçao">Ilhas Curaçao</option>
						<option value="Ilhas Marshall">Ilhas Marshall</option>
						<option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
						<option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
						<option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
						<option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
						<option value="Índia">Índia</option>
						<option value="Indonésia">Indonésia</option>
						<option value="Inglaterra">Inglaterra</option>
						<option value="Irlanda">Irlanda</option>
						<option value="Islândia">Islândia</option>
						<option value="Israel">Israel</option>
						<option value="Itália">Itália</option>
						<option value="Jamaica">Jamaica</option>
						<option value="Japão">Japão</option>
						<option value="Jordânia">Jordânia</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Latvia">Latvia</option>
						<option value="Líbano">Líbano</option>
						<option value="Liechtenstein">Liechtenstein</option>
						<option value="Lituânia">Lituânia</option>
						<option value="Luxemburgo">Luxemburgo</option>
						<option value="Macau">Macau</option>
						<option value="Macedônia">Macedônia</option>
						<option value="Madagascar">Madagascar</option>
						<option value="Malásia">Malásia</option>
						<option value="Malaui">Malaui</option>
						<option value="Mali">Mali</option>
						<option value="Malta">Malta</option>
						<option value="Marrocos">Marrocos</option>
						<option value="Martinica">Martinica</option>
						<option value="Mauritânia">Mauritânia</option>
						<option value="Mauritius">Mauritius</option>
						<option value="México">México</option>
						<option value="Moldova">Moldova</option>
						<option value="Mônaco">Mônaco</option>
						<option value="Montserrat">Montserrat</option>
						<option value="Nepal">Nepal</option>
						<option value="Nicarágua">Nicarágua</option>
						<option value="Niger">Niger</option>
						<option value="Nigéria">Nigéria</option>
						<option value="Noruega">Noruega</option>
						<option value="Nova Caledônia">Nova Caledônia</option>
						<option value="Nova Zelândia">Nova Zelândia</option>
						<option value="Omã">Omã</option>
						<option value="Palau">Palau</option>
						<option value="Panamá">Panamá</option>
						<option value="Papua-nova Guiné">Papua-nova Guiné</option>
						<option value="Paquistão">Paquistão</option>
						<option value="Peru">Peru</option>
						<option value="Polinésia Francesa">Polinésia Francesa</option>
						<option value="Polônia">Polônia</option>
						<option value="Porto Rico">Porto Rico</option>
						<option value="Portugal">Portugal</option>
						<option value="Qatar">Qatar</option>
						<option value="Quênia">Quênia</option>
						<option value="Rep. Dominicana">Rep. Dominicana</option>
						<option value="Rep. Tcheca">Rep. Tcheca</option>
						<option value="Reunion">Reunion</option>
						<option value="Romênia">Romênia</option>
						<option value="Ruanda">Ruanda</option>
						<option value="Rússia">Rússia</option>
						<option value="Saipan">Saipan</option>
						<option value="Samoa Americana">Samoa Americana</option>
						<option value="Senegal">Senegal</option>
						<option value="Serra Leone">Serra Leone</option>
						<option value="Seychelles">Seychelles</option>
						<option value="Singapura">Singapura</option>
						<option value="Síria">Síria</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
						<option value="St. Lúcia">St. Lúcia</option>
						<option value="St. Vincent">St. Vincent</option>
						<option value="Sudão">Sudão</option>
						<option value="Suécia">Suécia</option>
						<option value="Suiça">Suiça</option>
						<option value="Suriname">Suriname</option>
						<option value="Tailândia">Tailândia</option>
						<option value="Taiwan">Taiwan</option>
						<option value="Tanzânia">Tanzânia</option>
						<option value="Togo">Togo</option>
						<option value="Trinidad & Tobago">Trinidad & Tobago</option>
						<option value="Tunísia">Tunísia</option>
						<option value="Turquia">Turquia</option>
						<option value="Ucrânia">Ucrânia</option>
						<option value="Uganda">Uganda</option>
						<option value="Uruguai">Uruguai</option>
						<option value="Venezuela">Venezuela</option>
						<option value="Vietnã">Vietnã</option>
						<option value="Zaire">Zaire</option>
						<option value="Zâmbia">Zâmbia</option>
						<option value="Zimbábue">Zimbábue</option>
					</select>

					<input type="submit" value="Enviar">

				</form>
			</div>
			<!--/formulario-->

		</section>

	</div>


	<va id="footer"></va>
</body>



<val id="barra"></val>
<script>$("#barra").load("barra.php");</script>
<script>$("#footer").load("footer.php");</script>



</html>