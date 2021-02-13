<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="/style/estilo.css">

	
	
<title>Site</title>

</head>
<body>
	<!-- Navbar -->
	<nav class="navbar">
		<div class="inner-width">
			<a href="/" class="logo"></a>
			<button class="menu-toggler">
			<span></span>
			<span></span>
			<span></span>
			</button>
			<div class="navbar-menu">
				<a href="#">Home</a>
				<a href="#sobre">Sobre & Skills</a>
				<a href="#">Works</a>
				<a href="#">Contato</a>
			</div>
		</div>
	</nav>

<!-- Home -->

	<section id="home">
		<div class="inner-width">
			<div class="content">
				<h1>Olá Eu sou </h1>
				<div class="sm">

					<a href="#" class="fab fa-facebook-f"></a>
					<a href="#" class="fab fa-instagram"></a>
					<a href="#" class="fab fa-linkedin-in"></a>
					<a href="#" class="fab fa-github"></a>
				</div>

				<div class="buttons">
					<a href="#">Contact Me</a>
					<a href="#">Curriculum</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Home -->
	<section id="sobre">
		<div class="inner-width">
			<h1 class="section-title">Sobre Mim</h1>
			<div class="about-content">
				<img src="images/pic.png" alt="" class="about-pic">
			
				<div class="about-text">
				<h2>Olá Eu sou Paulo</h2>
				<h3>
				<span>Desenvolvedor</span>
				<span>Freelancer</span>
				<span>Streammer</span>
				</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, fugit quasi dolor ut nemo laudantium. Fugit voluptatibus eaque minus iure natus consequatur? Enim debitis magni voluptate voluptatem voluptates culpa delectus, aliquid fuga harum nam modi eligendi quod, exercitationem, quo blanditiis dolorem beatae! Ut, ipsum perspiciatis sit delectus cupiditate nobis unde praesentium explicabo dolorem. Ipsa, quo tempore deserunt suscipit aspernatur sequi consectetur cupiditate ea laborum eos voluptatibus. Repellendus, atque magnam? Magni?</p>
				</div>
			</div>


			<div id="skills">
			<div class="skills">
				<div class="skill">
						<div class="skill-info">
						<span>HTML</span>
						<span>50%</span>
						</div>
					<div class="skill-bar html"></div>
					</div>

				<div class="skill">
					<div class="skill-info">
					<span>CSS</span>
					<span>60%</span>
					</div>
					<div class="skill-bar css"></div>
					</div>

				<div class="skill">
						<div class="skill-info">
						<span>PHP</span>
						<span>35%</span>
						</div>
					<div class="skill-bar php"></div>
					</div>

					<div class="skill">
						<div class="skill-info">
						<span>Javascript</span>
						<span>10%</span>
						</div>
					<div class="skill-bar js"></div>
					</div>
				

			</div>
			</div>
		</div>
	</section>

	<!-- Serviços -->

	<section id="services" class="dark" >
		<div class="inner-width">
			<h1 class="section-title">Serviços</h1>
			<div class="services">

			<div class="service">
				<i class="icon fas fa-file-code"></i>
				<h4>Developer</h4>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio, explicabo.</p>
			</div>

			<div class="service">
				<i class="icon fab fa-html5"></i>
				<h4>HTML 5</h4>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio, explicabo.</p>
			</div>

			<div class="service">
				<i class="icon fab fa-css3-alt"></i>
				<h4>CSS 3</h4>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio, explicabo.</p>
			</div>

			<div class="service">
				<i class="icon fas fa-database"></i>
				<h4>My SQL</h4>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio, explicabo.</p>
			</div>

			<div class="service">
				<i class="icon fab fa-php"></i>
				<h4>PHP</h4>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio, explicabo.</p>
			</div>

			</div>

		</div>
	</section>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/script/script.js"></script>

</html>