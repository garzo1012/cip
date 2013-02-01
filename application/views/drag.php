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
				height: 310px;
				width: 400px;
				z-index: 0;
			}

			.tarjeta{
				border: solid;
				width: 90px;
				height: 120px;
				margin-bottom: 20px;
				z-index: 1
			}

			#menuTarjetas, #revision{
				margin-top: 20px;
			}


		</style>
		<script type="text/javascript">
			$(function(){
				//$(".sect").hide();

				var enea = "";
				var selt;

				$(".tarjeta").draggable();

				$("#seleccionTarjetas").droppable({
					drop:function(evt, el){
						//alert(el.draggable.attr("value"));
						enea = enea+el.draggable.attr("value")+",";
					},
					out: function(evt, el){
						//alert(el.draggable.attr("value"));
						enea = enea.replace(el.draggable.attr("value")+",","");
					}
				});

				$("#revisar").click(function(){
					selt = enea.split(",");
					alert(selt.length-1);
					return false;
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
						<h1><small>Academia CTIN</small></h1><span><h2><small>Eneagrama</small></h2></span>
					</div>
				</div>
			</section>
			<section id="contenidoPrincipal">
				<section id="eneagrama">
			<div class="row">
				<div class="six columns" id="menuTarjetas">
					<div id="inT">
						<div class="row">
							<div class="four columns">
								<div class="tarjeta" value="1"></div>
							</div>
							<div class="four columns">
								<div class="tarjeta" value="2"></div>
							</div>
							<div class="four columns">
								<div class="tarjeta" value="3"></div>
							</div>
						</div>
						<div class="row" > 
							<div class="four columns">
								<div class="tarjeta" value="4"></div>
							</div>
							<div class="four columns">
								<div class="tarjeta" value="5"></div>
							</div>
							<div class="four columns">
								<div class="tarjeta" value="6"></div>
							</div>
						</div>
					</div>

				</div>
				<div class="six columns">
					<div id="seleccionTarjetas">
					</div>
				</div>
			</div>
			<div class="row" id="revision">
				<div class="one columns"></div>
				<div class="four columns"></div>
				<div class="five columns"></div>
				<div class="one columns">
					<a href="#" class="button" id="revisar">Revisar</a>
				</div>
				<div class="one columns"></div>
			</div>
		</section>
			</section>
		</div>
	</body>
</html>