<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/background.jpg');">
			<div class="wrap-login100">
				   <form class="form" action="verifica_cadastro.php" method="POST">

					<span class="login100-form-title p-b-34 p-t-27">
                                                Cadastrar
					</span>

					<div class="wrap-input100 validate-input" data-validate = "enter usuario">
						<input class="input100" type="text" name="user" id="user" placeholder="Escolha um nome de usuário" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                                       <div class="wrap-input100 validate-input" data-validate = "Enter nome">
						<input class="input100" type="text" name="nome" id="nome" placeholder="Digite seu nome completo" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter senha">
						<input class="input100" type="password" name="senha" placeholder="entre com uma senha" required minlength="8">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                                        
                                       <div class="wrap-input100 validate-input" data-validate="Enter email">
                                           <input class="input100" type="email" name="email" id="email" placeholder="seuemail@email.com" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
				

					<div class="container-login100-form-btn">
						<button class="login100-form-btn"> 
							Cadastrar
						</button>
					</div>
                                       
                                       <div class="text-center p-t-90">
						<a class="txt1" href="index.php">
							voltar ao login
						</a>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
