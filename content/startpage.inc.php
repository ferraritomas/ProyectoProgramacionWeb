<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="../css/styles.css">
		<meta type="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="../img/favicon.ico" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
		<meta charset="UTF-8">
		<title>FG. APPAREL</title>
	</head>

	<body>
		
        <div class="wrapper">
	<?php
	include_once('header.inc.php'); //Incluímos el header
if(empty($_SESSION['idUsuario'])){ //nos fijamos si la sesión está vacía, si es así mostramos los formularios (login y registro)
	print <<< END
	<div id="login-box">
		<form name="login-form" method="POST" action="login.php">
			<h1>Entrar a su cuenta</h1>
			<span onclick="document.getElementById('login-box').style.display='none'" class="close-btn"
				title="Cerrar">&times;</span>
			<div class="form-input">
				<div class="form-icnlabel">
					<img class="form-icon" src="../img/icons/user.svg">
					<label>Ingrese email</label>
				</div>
				<input type="text" id="email-login" pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$'
					onkeyup="validateEmail(document.getElementById('email-login'))" placeholder="Email" name="email"
					value="" title="Debe ingresar un email valido." required>
				<span class="is-valid"></span>
			</div>
			<div class="form-input">
				<div class="form-icnlabel">
					<img class="form-icon" src="../img/icons/password.svg">
					<label>Ingrese contraseña</label>
				</div>
				<input type="password" id="pass-login"
					pattern="^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])[\w!@#$%^&*]{8,}$"
					onkeyup="validatePass(document.getElementById('pass-login'))" placeholder="Contraseña" name="password"
					value="" title="Debe contener minimo 8 caracteres, un caracter especial, letras y numeros" 
					required>

				<span class="is-valid"></span>
				<span class="eye" onclick="togglePassword()">
					<i id="hide1" class="fa fa-eye"></i>
					<i id="hide2" class="fa fa-eye-slash" style="display:none;"></i>
				</span>
			</div>
			<input class="btn" type="submit" name="login" value="Entrar">
			<a class="pswrd-frgt" href="#">Olvidé la contraseña</a>
			<a onclick="document.getElementById('login-box').style.display='none', document.getElementById('register-box').style.display='block', clearForm()">Crear
				una cuenta</a>
		</form>
	</div>
	END;

	print <<< END
	<div id="register-box">
		<form name="register-form" method="POST" action="register.php">
			<h1>Crear una cuenta</h1>
			<span onclick="document.getElementById('register-box').style.display='none'" class="close-btn"
				title="Cerrar">&times;</span>
			<div class="form-input">
				<div class="form-icnlabel">
					<img class="form-icon" src="../img/icons/user.svg">
					<label>Ingrese email</label>
				</div>
				<input type="text" id="email-register" pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$'
					onkeyup="validateEmail(document.getElementById('email-register'))" placeholder="Email" name="email"
					value="" title="Debe ingresar un email valido." required>
				<span class="is-valid"></span>
			</div>
			<div class="form-input">
				<div class="form-icnlabel">
					<img class="form-icon" src="../img/icons/name.svg">
					<label>Ingrese Nombre</label>
				</div>
				<input type="text" id="name-register" placeholder="Nombre"
					onkeyup="validateName(document.getElementById('name-register'))" name="name" value=""
					title="Debe ingresar un nombre." required>
				<span class="is-valid"></span>
			</div>
			<div class="form-input">
				<div class="form-icnlabel">
					<img class="form-icon" src="../img/icons/password.svg">
					<label>Ingrese contraseña</label>
				</div>
				<input type="password" id="pass-register"
					pattern="^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])[\w!@#$%^&*]{8,}$"
					onkeyup="validatePass(document.getElementById('pass-register'))" placeholder="Contraseña"
					name="password" value=""
					title="Debe contener minimo 8 caracteres, un caracter especial, letras y numeros" required>
				<span class="is-valid"></span>
			</div>
			<div class="form-input">
				<div class="form-icnlabel">
					<img class="form-icon" src="../img/icons/password.svg">
					<label>Repita contraseña</label>
				</div>
				<input type="password" id="pass-register-repeat" onkeyup="passMatch()" placeholder="Repetir contraseña"
					name="passwordrepeat" value="" title="Las contraseñas deben coincidir" required>
				<span class="is-valid"></span>
			</div>
			<input class="btn" id="submit" type="submit" name="register" value="Registrarse" disabled>
			<a onclick="document.getElementById('register-box').style.display='none', document.getElementById('login-box').style.display='block', clearForm()">Ya tengo una cuenta</a>
		</form>
	</div>
	END;
}
?>
