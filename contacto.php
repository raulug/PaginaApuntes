<!DOCTYPE html>
<html>
<head>
<title>Programming Languages</title>
	<?php
        include ("/common/head.php");
?>

</head>
<body>
	<img src="/media/img/5590457.jpg" alt="imagen de fondo de web" class="background">
    <?php
        include ("/common/menu.php");
?>
	<main class="contenedor">
		<form action="post">
			<fieldset>
				<h2>¡Escríbanos sus sugerencias para mejorar su experiencia!</h2>
				<div>
					<input type="text" placeholder="Usuario" required>
				</div>
				<div>
					<input type="email" placeholder="Correo de contacto" required>
				</div>
				<div>
					<textarea name="" id="" cols="30" rows="10" placeholder="Introduzca su propuesta"></textarea>
				</div>
				<div>
					<input type="button" value="Enviar" class="boton-form">
				</div>
			</fieldset>
		</form>
	</main>
    <footer>
		<p>© Carles Tur & Raul Lucena. Todos los derechos reservados.</p>
	</footer>
</body>
</html>