<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SolucionesPM</title>
    
    <link rel="stylesheet" href="<?php echo site_url('style.css'); ?>" type="text/css" />

</head>

<body>

<div class="container">
	<header class="highlight">
		<h1><a href="<?php echo site_url(); ?>">Preguntame</a></h1>
		<ul class="nav">
			<li><a href="<?php echo site_url(); ?>">Inicio</a></li>
			<li><a href="<?php echo site_url('questions/listing'); ?>">Preguntas</a></li>
			<li><?php echo $this->ion_auth->logged_in() == true ? anchor('users/logout', 'Logout') : anchor('users/login', 'Login') ?></li>
		</ul>
	</header>
	<div class="main">
		<?php $this->load->view($subview); ?>
	</div>
	<footer>
		&copy; <?php echo date('Y'); ?> Preguntame
	</footer>
</div>

</body>
</html>