<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title>CTIN</title>
		<link rel="stylesheet" href="<?php echo $base; ?>/media/css/foundation.min.css">
		<link rel="stylesheet" href="<?php echo $base; ?>/media/css/estiloPlantilla.css">
		<link rel="stylesheet" href="<?php echo $base; ?>/media/css/drag.css">
		<script src= "https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo $base; ?>/media/js/jquery.zoomooz.min.js"></script>
		<script src="<?php echo $base; ?>/media/js/jquery-1.9.0.js"></script>
		<script src="<?php echo $base; ?>/media/js/jquery-ui-1.10.0.custom.js"></script>
		<script src="<?php echo $base; ?>/media/js/drag.js"></script>


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
						<h1><small>Academia CTIN</small></h1><span><h2><small>Eneagrama</small></h2></span>
					</div>
				</div>
			</section>
			<section id="contenidoPrincipal">
				<section id="eneagrama">
			<div class="row">
				

				<div class="six columns" id="menuTarjetas">
					<div class= "zoomViewPort">
					<div class= "zoomContainer">

					<?php
						$cont = 0;
						$sec = 1;
						while ($sec<16) {
							echo "
									<div class='row'>
										<div class='four columns zoomTarget ene".$sec."'>
											<div class='tarjeta tarsec gt".$sec."' value=".$tarjetas['t'.++$cont]['id'].">".$tarjetas['t'.$cont]['palabra']."</div>
										</div>
										<div class='four columns zoomTarget ene".$sec."'>
											<div class='tarjeta tarsec gt".$sec."' value=".$tarjetas['t'.++$cont]['id'].">".$tarjetas['t'.$cont]['palabra']."</div>
										</div>
										<div class='four columns zoomTarget ene".$sec."'>
											<div class='tarjeta tarsec gt".$sec."' value=".$tarjetas['t'.++$cont]['id'].">".$tarjetas['t'.$cont]['palabra']."</div>
										</div>
									</div>
									<div class='row'> 
										<div class='four columns zoomTarget ene".$sec."'>
											<div class='tarjeta tarsec gt".$sec."' value=".$tarjetas['t'.++$cont]['id'].">".$tarjetas['t'.$cont]['palabra']."</div>
										</div>
										<div class='four columns zoomTarget ene".$sec."'>
											<div class='tarjeta tarsec gt".$sec."' value=".$tarjetas['t'.++$cont]['id'].">".$tarjetas['t'.$cont]['palabra']."</div>
										</div>
										<div class='four columns zoomTarget ene".$sec."'>
											<div class='tarjeta tarsec gt".$sec."' value=".$tarjetas['t'.++$cont]['id'].">".$tarjetas['t'.$cont]['palabra']."</div>
										</div>
									</div>
									
							";
							/*echo "
									<div class='row'>
										<div class='four columns drag tarsec gt".$sec."' value=".$tarjetas['t'.++$cont]['id'].">
											<div class='tarjeta'>".$cont."</div>
										</div>
										<div class='four columns drag tarsec gt".$sec."' value=".$tarjetas['t'.++$cont]['id'].">
											<div class='tarjeta'>".$cont."</div>
										</div>
										<div class='four columns drag tarsec gt".$sec."' value=".$tarjetas['t'.++$cont]['id'].">
											<div class='tarjeta'>".$cont."</div>
										</div>
									</div>
									<div class='row'> 
										<div class='four columns drag tarsec gt".$sec."' value=".$tarjetas['t'.++$cont]['id'].">
											<div class='tarjeta'>".$cont."</div>
										</div>
										<div class='four columns drag tarsec gt".$sec."' value=".$tarjetas['t'.++$cont]['id'].">
											<div class='tarjeta'>".$cont."</div>
										</div>
										<div class='four columns drag tarsec gt".$sec."' value=".$tarjetas['t'.++$cont]['id'].">
											<div class='tarjeta'>".$cont."</div>
										</div>
									</div>
							";*/
							$sec++;
						}
					?>
					</div>
					</div>
				</div>
				<div class="six columns">
					<div id="seleccionTarjetas">
					</div>
				</div>
			</div>
			<div class="row" id="revision">
				<div class="one columns">
					<a href="" class="button" id="next">Siguientes</a>
				</div>
				<div class="four columns"></div>
				<div class="five columns"></div>
				<div class="one columns">
					<a href="" class="button" id="revisar">Revisar</a>
				</div>
				<div class="one columns"></div>
			</div>
		</section>
			</section>
		</div>
	</body>
</html>