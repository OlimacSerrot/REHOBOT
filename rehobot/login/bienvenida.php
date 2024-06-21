<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
            alert("Por favor debes iniciar sesion");
            window.location: "bienvenida.php";
        </script>';

    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="WishFund,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">
    
  <!-- theme meta -->
  <meta name="theme-name" content="wishfund-bulma" />

  <title>Rehobot Fundacion</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bulma/bulma.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/icofont/icofont.css">
  <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <link rel="stylesheet" href="plugins/modal-video/modal-video.min.css">
  <link rel="stylesheet" href="http://localhost:8081/rehobot/index.html"> <!-- VER LA PAGINA CON EL LOCALHOST-->

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- Header Start --> 
<header class="navigation">
	<div class="header-top ">
		<div class="container">
			<div class="columns is-gapless is-justify-content-space-between is-align-items-center">
				<div class="column is-6-desktop is-4-tablet has-text-left-desktop has-text-centered-mobile">
					<div class="header-top-info">
					<a href="https://wa.me/573115026388?text=hola"><i class="icofont-phone mr-2"></i><span>+57-323-641-0946</span></a>
						<a href="https://mail.google.com/mail/?view=cm&to=rehobotpruebasena@gmail.comm" ><i class="icofont-email mr-2"></i><span>rehobothfruc@gmail.com</span></a>
					</div>
				</div>
				<div class="column is-6-desktop is-8-tablet">
					<div class="header-top-right has-text-right-tablet has-text-centered-mobile">
					<a href="https://www.instagram.com/fundacionrehobot/" target="_blank"><i class="icofont-instagram"></i></a>
						<a href="https://www.facebook.com/RehobotFundacion/" target="_blank"><i class="icofont-facebook"></i></a>
						<a href="https://www.youtube.com/channel/UCIT3vdiGrjk2PLyXT9GgKCQ" target="_blank"><i class="icofont-youtube"></i></a>
						<a href="cerrar_sesion.php"  class="top-btn">cerrar sesion</a>

					</div>
				</div>
			</div>
		</div>
	</div>
	<nav id="navbar" class="navbar main-nav">
		<div class="container">
			<div class="navbar-brand">
				<a class="navbar-item" href="bienvenida.php">
					<img src="images/logo.png" alt="logo" >
				</a>
				<button role="button" class="navbar-burger burger" data-hidden="true" data-target="navigation">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</button>
			</div>
			

			<div class="navbar-menu mr-0" id="navigation">
				<ul class="navbar-end">					 
					<li class="navbar-item"> 
						<a class="navbar-link" href="##">Inicio</a> 
					</li>
					
					<li class="navbar-item">
						<a class="navbar-link" href="about.php">¿Quienes somos?</a>
					</li>
					<li class="navbar-item">
						<a class="navbar-link" href="descargas.php">Documentos</a>
					</li>
					<li class="navbar-item">
						<a class="navbar-link" href="../404.html">Proximamente</a>
					</li>

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">Eventos</a><span class="ml-1"></span>
						<div class="navbar-dropdown">
							<a class="navbar-item" href="../../Calendario original/prueba1.php">Calendario</a>
							<a class="navbar-item" href="fotos.php">fotos</a>
						</div>
						
					</li>

			

					<li class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">contribuye</a><span class="ml-1"></span>
						<div class="navbar-dropdown">
							<a class="navbar-item" href="donation.php">Donacion</a>
							<a class="navbar-item" href="volunteer.php">Se un voluntario</a>
						</div>
					</li>

					
					<li class="navbar-item">
						<a class="navbar-link" href="contact.php">Contactanos</a>
					</li>
				</ul>
			</div>

		</div>
	</nav>
</header>



<!-- Header Close -->
<!-- Slider Start -->
<section class="slider">
	<div class="container">
		<div class="columns is-justify-content-center">
			<div class="column is-9-desktop is-10-tablet">
				<div class="block has-text-centered">
					<span class="is-block mb-4 text-white is-capitalized">Una Pequeña Ayuda Puede Hacer Un Cambio</span>
					<h1 class="mb-5">Trabajamos para disminuir <br>las cifras de suicidios</h1>
					<p class="mb-6">Habla sobre lo que estas sintiendo,¡Tu no estas solo!<br>No desistas de tu vida</p>
					<a href="donation.php" target="_blank" class="btn btn-main is-rounded">Donar Ahora</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section Intro Start -->
<section class="section intro">
	<div class="container">
		<div class="columns is-align-items-center is-desktop mb-6">
			<div class="column is-6-desktop">
				<div class="section-title mb-0">
					<span class="text-color">Lo que podemos hacer</span>
					<h2 class="mt-4 content-title">Creemos que podemos<br>Salvar mas vidas contigo</h2>
				</div>
			</div>
			<div class="column is-6-desktop">
				<p>En nuestra búsqueda constante de esperanza y solidaridad, creemos que juntos podemos tejer una red más fuerte de apoyo y comprensión. La vida es un viaje compartido, y cada pequeña acción puede marcar una gran diferencia. Salvar más vidas no es solo un objetivo, sino una promesa que hacemos contigo. Tu participación, ya sea a través de donaciones, voluntariado, educación o apoyo emocional, contribuye a la creación de un entorno donde la luz de la esperanza brilla más intensamente. Unámonos en esta misión para hacer la diferencia, porque cada vida merece ser vivida, y cada persona merece sentirse valorada.</p>
			</div>
		</div>
		<div class="columns is-multiline is-justify-content-center">
			<div class="column is-3-desktop is-6-tablet">
				<div class="intro-item mb-5 mb-lg-0"> 
					<img src="images/about/image1.jpg" alt="" class=" w-100" style="margin-bottom: 7px;">
					<h4 class="mt-4 mb-3">Educación y Sensibilización</h4>
					<p>La educación es clave para prevenir el suicidio. Comparte información sobre salud mental, señales de advertencia y recursos disponibles. Al aumentar la conciencia, podemos construir una red de apoyo sólida. ¡Ayúdanos a difundir el conocimiento y a romper el estigma!</p>				</div>
			</div>
			<div class="column is-3-desktop is-6-tablet">
				<div class="intro-item mb-5 mb-lg-0">
					<img src="images/about/image2.png" alt="" class=" w-100" style="margin-top: -50px; margin-bottom: -46px;">
					<h4 class="mt-4 mb-3">Aportar</h4>
					<p>Tu apoyo puede iluminar la oscuridad en la vida de alguien. Dona a esta fundacion y sé la esperanza que alguien necesita. Juntos, podemos construir puentes hacia la esperanza y cambiar vidas. ¡Cada contribución cuenta!</p>
				</div>
			</div>
			<div class="column is-3-desktop is-6-tablet">
				<div class="intro-item">
					<img src="images/about/image3.jpg" alt="" class=" w-100" style="margin-bottom: -7px;">
					<h4 class="mt-4 mb-3">Ser Voluntario</h4>
					<p>Tu apoyo como voluntario puede ser la guia de alguien que lo necesita. Juntos, podemos construir puentes de esperanza y ofrecer amor incondicional. Únete a nuestra fundación anti suicidios y sé la razón por la que alguien elige seguir adelante. Tu tiempo y compasión pueden salvar vidas. ¡Inspira el cambio y sé parte de la solución hoy!</p>
				</div>
			</div> 
			<div class="column is-3-desktop is-6-tablet">
				<div class="intro-item">
					<img src="images/about/imagen4.jpg" alt="" class=" w-100" style="margin-bottom: 5px;">
					<h4 class="mt-4 mb-3">Apoyo Emocional Online</h4>
					<p>Ofrece apoyo emocional a través de chats o foros en línea. Muchas personas enfrentan sus desafíos de manera más cómoda compartiendo sus sentimientos en un entorno virtual. Únete a nuestra comunidad en línea para brindar consuelo y aliento. ¡Cada palabra positiva puede marcar la diferencia!</p>
				</div>
			</div> 
		</div>
	</div>
</section>
<!-- Section Intro END -->
<section class="section video">
	<div class="container">
		<div class="columns is-desktop">
			<div class="column is-8-desktop">
				<div class="video-content">
					<h2 class="mt-4 mb-6 is-relative text-lg text-white">Tratamos de encontrar <br> una solucion antes de la tragedia</h2>
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="column is-12">
				<div class="video-block">
					<div class="img-block">
						<img src="images/bg/bg-3.png" alt="" style="width: 1920px;">
					</div>
					<a class="videoplay">
						<iframe style="margin-top: -260px;" src="https://www.youtube.com/embed/BzdpLKFGR6Y" frameborder="0" allowfullscreen></iframe>
					</a>
				</div>
			</div>
		</div>
		

		<div class="counter-section">
			<div class="columns is-multiline">
				<div class="column is-3-desktop is-6-tablet">
					<div class="counter-item-2 pt-5">
						<span class="counter-stat  text-color">10</span>
						<p>Años de experiencia</p>
					</div>
				</div>
				<div class="column is-3-desktop is-6-tablet">
					<div class="counter-item-2 pt-5">
						<span class="counter-stat has-text-weight-bold text-color">250</span>
						<p>Voluntarios activos</p>
					</div>
				</div>
				<div class="column is-3-desktop is-6-tablet">
					<div class="counter-item-2 pt-5">
						<span class="counter-stat  text-color">1</span>
						<p>Soacha Colombia</p>
					</div>
				</div>
				<div class="column is-3-desktop is-6-tablet">
					<div class="counter-item-2 pt-5">
						<span class="counter-stat text-color">589</span>
						<p >Personas ayudadas</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="section gallery">
	<div class="container">
		<div class="columns is-justify-content-center">
			<div class="column is-8-desktop is-10-tablet">
				<div class="section-title has-text-centered">
					<span class="text-color">Explora nuestra galería</span>
					<h2 class="mt-4 mb-5 is-relative content-title"> Donde cada imagen cuenta una historia de resistencia, amor y apoyo. </h2>
					<p>Estas instantáneas capturan los momentos compartidos en nuestra comunidad, recordándonos que, incluso en los tiempos más oscuros, la luz de la esperanza brilla intensamente cuando estamos juntos. Únete a nosotros para celebrar la fuerza de la conexión humana y el poder de la compasión.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="gallery-wrap">
			<div class="columns is-multiline">
				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/1.jpg" class="gallery-popup">
							<img src="images/gallery/1.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/2.jpg" class="gallery-popup">
							<img src="images/gallery/2.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/3.jpg" class="gallery-popup">
							<img src="images/gallery/3.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/4.jpg" class="gallery-popup">
							<img src="images/gallery/4.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>

				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/5.jpg" class="gallery-popup">
							<img src="images/gallery/5.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-4-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/6.jpg" class="gallery-popup">
							<img src="images/gallery/6.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-6-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/9.jpg" class="gallery-popup">
							<img src="images/gallery/9.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
				<div class="column is-6-desktop is-12-tablet">
					<div class="gallery-item">
						<a href="images/gallery/8.jpg" class="gallery-popup">
							<img src="images/gallery/8.jpg" alt="" class=" w-100">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="column">
			<div class="column lg-12">
				<div class="section-divider"></div>
			</div>
		</div>
	</div>
</section>

<!--<section class="section causes">
	<div class="container">
		<div class="columns is-justify-content-center">
			<div class="column is-7-desktop is-8-tablet">
				<div class="section-title has-text-centered">
					<span class="text-color">Latest Events</span>
					<h2 class="mt-4 mb-5 is-relative content-title">Our Recent Causes <br> to serve better</h2>
					<p class="mb-5">We provide services in the area of IFRS and management reporting, helping companies to reach their highest level.</p>
				</div>
			</div>
		</div>

		<div class="columns is-multiline is-justify-content-center">
			<div class="column is-4-desktop is-6-tablet">
				<div class="cause-item">
					<img src="images/about/image-1.jpg" class=" w-100" alt="...">

					<div class="card-body">
						<h3 class="mb-4"><a href="cause-single.html">Save Poor Childrens</a></h3>

						<ul class="list-inline border-bottom border-top py-3 mb-4">
						<li class="list-inline-item"><i class="icofont-check text-color mr-2"></i>Goal:	<span>$890</span></li>
						<li class="list-inline-item"><i class="icofont-check text-color mr-2"></i>Raised: <span>$390</span></li>
						</ul>
						<p class="card-text mb-5">Save poor child by supporting text below as a natural lead-in to additional content.</p>

						<a href="donation.html" class="btn btn-main is-rounded">Donate Now</a>
					</div>
				</div>
			</div>

			<div class="column is-4-desktop is-6-tablet">
				<div class="cause-item">
					<img src="images/about/image-2.jpg" class=" w-100" alt="...">

					<div class="card-body">
						<h3 class="mb-4"><a href="cause-single.html">Clean Drink Water</a></h3>

						<ul class="list-inline border-bottom border-top py-3 mb-4">
						<li class="list-inline-item"><i class="icofont-check text-color mr-2"></i>Goal:	<span>$890</span></li>
						<li class="list-inline-item"><i class="icofont-check text-color mr-2"></i>Raised: <span>$390</span></li>
						</ul>
						<p class="card-text mb-5">Save poor child by supporting text below as a natural lead-in to additional content.</p>

						<a href="donation.html" class="btn btn-main is-rounded">Donate Now</a>
					</div>
				</div>
			</div>
			<div class="column is-4-desktop is-6-tablet">
				<div class="cause-item">
					<img src="images/about/image-3.jpg" class=" w-100" alt="...">

					<div class="card-body">
						<h3 class="mb-4"><a href="cause-single.html">Fund for Education</a></h3>
						
						<p class="card-text mb-4">Save poor child by supporting text below as a natural lead-in to additional content. </p>
						<p class="card-text mb-4">Quia vitae ab maxime cum quod neque .</p>

						<a href="donation.html" class="btn btn-main is-rounded">Donate Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->


<div class="cta-block section" style="background: url(rehobot/images/calm1.jpg); " >
    <div class="container">
        <div class="columns is-justify-content-center ">
            <div class="column is-7-desktop is-12-tablet">
                <div class="cta-content has-text-centered" >
                    <i class="icofont-heart text-lg text-color"></i>
                    <?php
                    echo '<h2 class="text-white text-lg mb-6 mt-4">No podemos ayudar a todos, pero todos pueden ayudar a alguien.</h2>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

	<br>
	<style>
	/* Ajustar la apariencia del botón de descargar archivo */
   .download-button {
	  display: block;
	  margin: 0 auto; /* Centrar el botón */
	  width: 200px; /* Cambiar el ancho del botón */
	  height: 60px; /* Cambiar el alto del botón */
	  font-size: 18px;
	  color: #06003f;
	  background-color: #ff7300;
	  border: none;
	  border-radius: 5px;
	  padding: 10px;
	  cursor: pointer;
	}
  </style>

<button class="download-button">
	<a href="../docs/SEPARADORES FUNDACIÓN.pdf" download>SEPARADOR</a>
  </button>
<section class="section latest-blog">
	<div class="container">
		<div class="columns is-justify-content-center is-desktop">
			<div class="column is-7-desktop has-text-centered">
				<div class="section-title">
					<span class="h6 text-color">Ultimos Articulos</span>
					<h2 class="mt-4 content-title">Libros de la fundacion </h2>
				</div>
			</div>
		</div>

		<div class="columns is-multiline is-justify-content-center">
			<div class="column is-4-desktop is-6-tablet">
				<div class="blog-item">
					<img src="../images/libros/libro1.png"  alt="" class="" style="width: 100%; height: 400px">
					<div class="card-body mt-2">
						<span class="text-sm text-color is-uppercase has-text-weight-bold">30 Abril 2024</span>
						<h3 class="mb-3"><a href="https://a.co/d/gSYQL5r" class="">LA DEPRESIÓN NO ES UNA MODA : El suicidio es real</a></h3>
						<p class="mb-4">En el libro hablo de mi experiencia personal y la de otras personas, en la lucha contra la depresión.Mi propósito principal es llevar una voz de aliento para aquellos que deben enfrentar esta dura batalla en soledad y escasez.</p>
					</div>
				</div>
			</div>

			<div class="column is-4-desktop is-6-tablet">
				<div class="blog-item">
				<img src="../images/libros/libro2.png"  alt="" class="" style="width: 100%; height: 400px">
					<div class="card-body mt-2">
						<span class="text-sm text-color is-uppercase has-text-weight-bold">5 Febrero 2021</span>
						<h3 class="mb-3"><a href="https://a.co/d/1tknYut" class="">Viviendo con depresión y ansiedad</a></h3>
						<p class="mb-4">Tratar de explicar lo inexplicable es lo que intento hacer en estas líneas, es un relato acerca de lo que vive un paciente diagnosticado con depresión grave o recurrente mixta con ansiedad, o algún otro diagnostico asociado a la depresión.</p>
					</div>
				</div>
			</div>

			<div class="column is-4-desktop is-6-tablet">
				<div class="blog-item">
				<img src="../images/libros/libro3.png"  alt="" class="" style="width: 100%; height: 400px">
					<div class="card-body mt-2">
					<div class="card-body mt-2">
						<span class="text-sm text-color is-uppercase has-text-weight-bold">11 Enero 2021</span>
						<h3 class="mb-3"><a href="https://a.co/d/5P7yyVD" class="">DIALOGANDO CON LA MUERTE: Historias que te harán reflexionar</a></h3>
						<p class="mb-4">Susana, Ángela, Juan José, Víctor, Johnston y Elizabeth, tendrán un encuentro con la muerte, pero a algunos los sorprenderá en el momento menos esperado, para enseñarles que la vida es un juego que sabes cuándo empieza, pero no cuando termina a menos que decidas ser osado y quebrantar las reglas.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br>


<!--<div class="volunteer section ">
	<div class="container">
		<div class="columns is-multiline">
			<div class="column is-7-desktop is-12-tablet">
				<div class="volunteer-content">
					<img src="images/bg/image-5.jpg" alt="" class="">
					<h2 class="text-lg mb-5 mt-3">We can’t help everyone, but everyone can help someone</h2>
					<p>Assumenda reiciendis delectus dolore incidunt molestias omnis quo quaerat voluptate, eligendi perspiciatis ipsa laudantium nesciunt officia, odit nemo quidem hic itaque. Fugiat.</p>

					<h2 class="mt-6 mb-5">Trusted worldwide partner</h2>
					<div class="clients-wrap">
						<a href="#">
							<img src="images/clients/client1.png" alt="" class="">
						</a>
						<a href="#">
							<img src="images/clients/client2.png" alt="" class="">
						</a>
						<a href="#">
							<img src="images/clients/client4.png" alt="" class="">
						</a>
						<a href="#">
							<img src="images/clients/client5.png" alt="" class="">
						</a>
						<a href="#">
							<img src="images/clients/client6.png" alt="" class="">
						</a>
					</div>
				</div>
			</div>-->



			<!--<div class="column is-5-desktop is-12-tablet">
				<div class="volunteer-form-wrap">
					<span class="text-white">Join With us</span>
					<h2 class="mb-6 text-lg text-white">Become A Volunteer</h2>
					<form action="#" class="volunteer-form">
						<div class="mb-4">
							<input type="text" class="input" placeholder="Nombre">
						</div>
						<div class="mb-4">
							<input type="email" class="input" placeholder="Emaill ">
						</div>
						<div class="mb-4">
							<input type="text" class="input" placeholder="Telefono">
						</div>
						<div class="mb-4">
							<input type="text" class="input" placeholder="Ciudad de residencia">
						</div>
						<div class="mb-4">
							<input type="text" class="input" placeholder="Ocupacion">
						</div>
						<div class="mb-4">
							<textarea name="#" id="#" cols="30" rows="6" class="input" placeholder="Descripcion"></textarea>
						</div>

						<a href="#" class="btn btn-main is-rounded mt-5">Enviar Mensaje</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
-->
<!-- footer Start -->
<footer class="footer section">
	<div class="container">
		<div class="columns is-multiline">
			<div class="column is-4-desktop is-6-tablet">
				<div class="footer-widget widget">
					<h4 class="is-capitalize mb-4 text-white">Compañía</h4>
					<p>Soacha<br>Colombia</p>

					<ul class="list-unstyled footer-menu mt-4">
						<li><a href="https://api.whatsapp.com/send?phone=573236410946&text=%F0%9F%96%90%EF%B8%8Fbuenas%20tardes"><i class="icofont-phone"></i>+57- 323 641-0946</a></li>
						<li><a href="https://mail.google.com/mail/?view=cm&to=rehobotpruebasena@gmail.comm"><i class="icofont-email"></i>rehobothfruc@gmail.com</a></li>
					</ul>
					<ul class="list-inline footer-socials">
						<li class="list-inline-item"><a href="https://www.instagram.com/fundacionrehobot/"><i class="icofont-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.facebook.com/RehobotFundacion/"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.youtube.com/channel/UCIT3vdiGrjk2PLyXT9GgKCQ"><i class="icofont-youtube"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="column is-2-desktop is-6-tablet">
				<div class="widget footer-widget">
					<h4 class="is-capitalize mb-4 text-white">Enlaces rápidos</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="about.php">Nosotros</a></li>
						<!--<li><a href="#">Services</a></li>-->
						<li><a href="##">Inicio</a></li>
						<li><a href="contact.php">Contacto</a></li>
					</ul>
				</div>
			</div>

			<div class="column is-3-desktop is-6-tablet">
				
			</div>
			
			<div class="column is-3-desktop is-6-tablet">
				<div class="widget footer-widget">
					<h4 class="is-capitalize mb-4 text-white">Gallery</h4>

					<div class="gallery-wrap">
						<div class="gallery-img">
							<img src="images/blog/1.jpg" alt="" class="">
						</div>
						<div class="gallery-img">
							<img src="images/blog/2.jpg" alt="" class="">
						</div>
						<div class="gallery-img">
							<img src="images/blog/3.jpg" alt="" class="">
						</div>
						<div class="gallery-img">
							<img src="images/blog/4.jpg" alt="" class="">
						</div>
						<div class="gallery-img">
							<img src="images/blog/5.jpg" alt="" class="">
						</div>
						<div class="gallery-img">
							<img src="images/blog/6.jpg" alt="" class="">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-5">
			<div class="columns is-justify-content-center">
				<div class="column is-12">
					<div class="copyright has-text-centered">
					<small>&copy; Copyright Reserved to Prendiz by Ca.Va.Ta.Li.Ce</small>						
						
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="js/contact.js"></script>
   <!--  Magnific Popup-->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <script src="plugins/modal-video/jquery-modal-video.min.js"></script>

    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>

 
</body>

</html>