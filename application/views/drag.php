<?php
	$this->load->helper('url');
	$base =  base_url();
?>

<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title>CTIN</title>
		<link rel="stylesheet" href="<?php echo $base; ?>/media/css/foundation.min.css">
		<link rel="stylesheet" href="<?php echo $base; ?>/media/css/estiloPlantilla.css">
		<script src="<?php echo $base; ?>/media/js/jquery-1.9.0.js"></script>
		<script src="<?php echo $base; ?>/media/js/jquery-ui-1.10.0.custom.js"></script>
		<style type="text/css">
			#seleccionTarjetas{
				border: solid black;
				height: 240px;
				width: 400px;
				z-index: 0;
			}

			.tarjeta{
				width: 60px;
				height: 90px;
				margin-bottom: 20px;
				z-index: 1
			}

		</style>
		<script type="text/javascript">
			$(function(){
				$(".tarjeta").draggable();

				$("#seleccionTarjetas").droppable({
					drop:function(argument) {
						alert();
					}
				});

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
						<h1><small>Academia CTIN</small></h1><span><h2><small>titulo</small></h2></span>
					</div>
				</div>
			</section>
			<section id="contenidoPrincipal">
				<section id="eneagrama">
			<div class="row">
				<div class="one columns"></div>
				<div class="five columns" id="menuTarjetas">
					<div class="">
						<div class="row">
							<div class="four columns">
								<div class="tarjeta"><img src="<?php echo $base; ?>/media/img/noimage.jpg"></div>
							</div>
							<div class="four columns">
								<div class="tarjeta"><img src="<?php echo $base; ?>/media/img/noimage.jpg"></div>
							</div>
							<div class="four columns">
								<div class="tarjeta"><img src="<?php echo $base; ?>/media/img/noimage.jpg"></div>
							</div>
						</div>
						<div class="row" > 
							<div class="four columns">
								<div class="tarjeta"><img src="<?php echo $base; ?>/media/img/noimage.jpg"></div>
							</div>
							<div class="four columns">
								<div class="tarjeta"><img src="<?php echo $base; ?>/media/img/noimage.jpg"></div>
							</div>
							<div class="four columns">
								<div class="tarjeta"><img src="<?php echo $base; ?>/media/img/noimage.jpg"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="five columns">
					<div id="seleccionTarjetas">
					</div>
				</div>
				<div class="one columns"></div>
			</div>
			<div class="row">
				<div class="six columns"></div>
				<div class="five columns">
					<a href="#" class="button">Revisar</a>
				</div>
				<div class="one columns"></div>
			</div>
		</section>
			</section>
		</div>
	</body>
</html>