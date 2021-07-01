<div id="header">
	<div id="logo">
		<h1><a href="index.php">FG APPAREL</a></h1>
	</div>
	<div id="separate-header-items">
		<div id="searchbar">
			<input id="search-input" class="input_box" type="text" name="" placeholder="Buscar" onkeyup="showResult(this.value)"> <!-- aplicamos AJAX -->
			<a class="glass" href="#">
				<i class="fas fa-search"></i>
			</a>
		<div id="livesearch"></div>
		</div>
		<?php
			if(empty($_SESSION['idUsuario'])){ //Si no está logueado (no hay sesion), puede entrar a la cuenta
				print <<< END
				<div id='s-lg-buy'>
					<button onclick="document.getElementById('login-box').style.display='block', document.getElementById('register-box').style.display='none', document.getElementById('add-clothes-div').style.display='none'";'>Entrar</button>
				</div>
				END;
			}
			else{   //Si está logueado, puede Cerrar Sesión
				print <<< END
				<div id='s-lg-buy'>
						<form action="logout.php" method="POST"> <button type="submit" name="logout">Cerrar sesion</button></form>
					</div>
				END;
			}
		?>
		<div id="shop-bag">
			<a class="bag" href="#">
				<i class="fas fa-shopping-bag"></i>
			</a>
		</div>
	</div>
</div>

<div id="navegation-bar">  <!-- subcategorías, cada una abre una pagina diferente -->
	<ul>
		<li class="dropdown">
			<a  class="dropbtn">Hombre</a>
			<div class="dropdown-content">
				<a href="ropa.php?subcategoria=hombre_bermudas">Bermudas</a> <!-- redirecciona a ropa con subcategoria correspondiente -->
				<a href="ropa.php?subcategoria=hombre_chaquetas">Chaquetas</a>
				<a href="ropa.php?subcategoria=hombre_remeras">Remeras</a>
			</div>
		</li>
		<li class="dropdown">
			<a class="dropbtn">Niños</a>
			<div class="dropdown-content">
				<a href="ropa.php?subcategoria=ninos_camperas">Camperas</a>
				<a href="ropa.php?subcategoria=ninos_faldas">Faldas</a>
				<a href="ropa.php?subcategoria=ninos_pijamas">Pijamas</a>
			</div>
		</li>
		<li class="dropdown">
			<a class="dropbtn">Mujer</a>
			<div class="dropdown-content">
				<a href="ropa.php?subcategoria=mujer_abrigos">Abrigos</a>
				<a href="ropa.php?subcategoria=mujer_faldas">Faldas</a>
				<a href="ropa.php?subcategoria=mujer_remeras">Remeras</a>
				<a href="ropa.php?subcategoria=mujer_vestidos">Vestidos</a>
			</div>
		</li>
	</ul>
</div>