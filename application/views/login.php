<?php
	$base =  base_url();
	$perro = "alaa";
?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title>CTIN</title>
		<link rel="stylesheet" href="<?php echo $base; ?>/media/css/foundation.min.css">
		<link rel="stylesheet" href="<?php echo $base; ?>/media/css/estiloPlantilla.css">
		<script src="<?php echo $base; ?>/media/js/jquery-1.9.0.js"></script>
		<script src="<?php echo $base; ?>/media/js/foundation/modernizr.foundation.js"></script>
			<script type='text/javascript'>
				$(function(){
					alert($("#errores").val());
				});
			</script>
	</head>
	<body>
		<div id="contenedorGral">
			<header>
				<div class="row" id="encabezado">
					<div class="twelve">
						<div id="logo">
							<a href="#"><img src="<?php echo $base; ?>/media/img/CTIN.png"></a>
							<a href="#" class="isocial"><img src="<?php echo $base; ?>/media/img/twitter_32.png"></a>
							<a href="#" class="isocial"><img src="<?php echo $base; ?>/media/img/facebook_32.png"></a>
						</div>
					</div>
				</div>	
			</header>
			<section id="titulo">
				<div class="row">
					<div class="twelve columns" >
						<h1><small>Academia CTIN</small></h1><span><h2><small>ingreso</small></h2></span>
					</div>
				</div>
			</section>
			<section id="contenidoPrincipal">
				<section class="formulario">
					<div class="row">  
						<div class="six columns centered">
    						<? echo form_open('login/registrar');?>  
								<form class="custom">  
							        <fieldset>  
							            <legend>Inicia Sesión</legend>
							            <label type="hidden" value="<?php echo form_error('email'); ?>" id="errores" ></label>
										<label for="error">Correo electrónico:</label>
										<input type="text" placeholder="correo@host.com" name="email">
										<small class="error" id="errorc"><?php echo validation_errors(); ?></small>
										<label for="error">Contraseña:</label>
										<input type="password" name="pass">
										<small class="error" id="errorp"><?php echo validation_errors(); ?></small>
										<input type="submit" class="button secondary radius" value="Iniciar Sesión">
							        </fieldset>  
							    </form>
						    <? echo form_close();?>
						</div>  
					</div>
				</section>
			</section>
		</div>
	</body>
</html>