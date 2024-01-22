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
    <div class="contenedor_lenguajes">
		<aside>
			<ul>
				<li class="contenedor-indice">
                    <div onclick="toggleIndice(this)">
                        <a href="#">Tema 1</a>
                        <i class="fa-solid fa-angle-down indice-btn"></i>
                    </div>
					<ul class="indice"> 
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
				<li>
                    <div onclick="toggleIndice(this)">
                        <a href="#">Tema 2</a>
                        <i class="fa-solid fa-angle-down indice-btn"></i>
                    </div>
					<ul class="indice"> 
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
				<li>
                    <div onclick="toggleIndice(this)">
                        <a href="#">Tema 3</a>
                        <i class="fa-solid fa-angle-down indice-btn"></i>
                    </div>
                    <ul class="indice"> 
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
				<li>
                    <div onclick="toggleIndice(this)">
                        <a href="#">Tema 4</a>
                        <i class="fa-solid fa-angle-down indice-btn"></i>
                    </div>
                    <ul class="indice"> 
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
				<li>
                    <div onclick="toggleIndice(this)">
                        <a href="#">Tema 5</a>
                        <i class="fa-solid fa-angle-down indice-btn"></i>
                    </div>
                    <ul class="indice"> 
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
				<li>
                    <div onclick="toggleIndice(this)">
                        <a href="#">Tema 6</a>
                        <i class="fa-solid fa-angle-down indice-btn"></i>
                    </div>
                    <ul class="indice"> 
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
				<li>
                    <div onclick="toggleIndice(this)">
                        <a href="#">Tema 7</a>
                        <i class="fa-solid fa-angle-down indice-btn"></i>
                    </div><ul class="indice"> 
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
				<li>
                    <div onclick="toggleIndice(this)">
                        <a href="#">Tema 8</a>
                        <i class="fa-solid fa-angle-down indice-btn"></i>
                    </div>
                    <ul class="indice"> 
						<li><a href="#">Teoria</a></li>
						<li><a href="#">Ejercicios</a></li>
					</ul>
				</li>
			</ul>
		</aside>
		<div class="barra-btn" onclick="toggleSidebar()">
			<i class="fa-solid fa-angle-right toggle-btn"></i>
		</div>
		<main>
			<section>
				<h3>Teoria</h3>
			</section>
		</main>
	</div>
	<footer>
		<p>© Carles Tur & Raul Lucena. Todos los derechos reservados.</p>
	</footer>

	<script src="script.js"></script>
</body>
</html>