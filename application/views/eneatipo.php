<?php
	$this->load->helper('url');
	$base =  base_url();
?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title>Academia CTIN</title>

        <?php        
		$base =  base_url();
        require 'media/php/lessc.inc.php';
        $carpeta_in = "media/less/";
        $carpeta_out = "media/css/";
        $est = 'lessestilos';
        lessc::ccompile($carpeta_in . $est . '.less', $carpeta_out . $est . '.css');
        ?>
		<link rel="stylesheet" href="<?=$base;?>/media/css/foundation.min.css">
		<link rel="stylesheet" href="<?=$base;?>/media/css/estiloPlantilla.css">
		<link rel="stylesheet" href="<?=$base;?>/media/css/lessestilos.css">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,300italic' rel='stylesheet' type='text/css'>
		<script src="<?=$base;?>/media/js/foundation/modernizr.foundation.js"></script>
	</head>
	<body>
		<div id="contenedorGral">
			<header>
				<div class="row" id="encabezado">
					<div class="twelve">
						<div id="logo">
							<a href="#"><img src="<?=$base;?>/media/img/CTIN.png"></a>
							<a href="#" class="isocial"><img src="<?=$base;?>/media/img/twitter_32.png"></a>
							<a href="#" class="isocial"><img src="<?=$base;?>/media/img/facebook_32.png"></a>
						</div>
					</div>
				</div>	
			</header>
			<section id="titulo">
				<div class="row">
					<div class="eight columns" >
						<?php

						switch($eneatipo['ide']):
							case 1:$eene="reformador";
									break;
							case 2:$eene="ayudador";
									break;
							case 3:$eene="triunfador";
									break;
							case 4:$eene="individualista";
									break;
							case 5:$eene="investigador";
									break;
							case 6:$eene="leal";
									break;
							case 7: $eene="entusiasta";
									break;
							case 8: $eene="desafiador";
									break;
							case 9: $eene="pacificador";
									break;
							endswitch;
						?>
						<i class="num-e">Eneatipo <?=$eneatipo['ide'];?></i>: &nbsp &nbsp &nbsp<u class="nombre-e <?=$eene?>"><?=$eneatipo['inomb'];?></u>
						<br>
						<?php
							if($eneatipo['icen']==1){
								$est="centro-e";
								$tip="Emocional";
							}
							elseif($eneatipo['icen']==2){
								$est="centro-i";
								$tip="Intuitivo";
							}
							elseif($eneatipo['icen']==3){
								$est="centro-r";
								$tip="Racional";
							}
						?>
						<p class="<?=$est?>"><?=$tip?></p>
					</div>
					<?php
						switch($eneatipo['iest']):
							case 1: $estres="El Reformador";
									$eest="reformador";
									break;
							case 2: $estres="El Ayudador";
									$eest="ayudador";
									break;
							case 3: $estres="El Triunfador";
									$eest="triunfador";
									break;
							case 4: $estres="El Individualista";
									$eest="individualista";
									break;
							case 5: $estres="El Investigador";
									$eest="investigador";
									break;
							case 6: $estres="El Leal";
									$eest="leal";
									break;
							case 7: $estres="El Entusiasta";
									$eest="entusiasta";
									break;
							case 8: $estres="El Desafiador";
									$eest="desafiador";
									break;
							case 9: $estres="El Pacificador";
									$eest="pacificador";
									break;
							endswitch;
						switch($eneatipo['iseg']):
							case 1: $seguridad="El Reformador";
									$eseg="reformador";
									break;
							case 2: $seguridad="El Ayudador";
									$eseg="ayudador";
									break;
							case 3: $seguridad="El Triunfador";
									$eseg="triunfador";
									break;
							case 4: $seguridad="El Individualista";
									$eseg="individualista";
									break;
							case 5: $seguridad="El Investigador";
									$eseg="investigador";
									break;
							case 6: $seguridad="El Leal";
									$eseg="leal";
									break;
							case 7: $seguridad="El Entusiasta";
									$eseg="entusiasta";
									break;
							case 8: $seguridad="El Desafiador";
									$eseg="desafiador";
									break;
							case 9: $seguridad="El Pacificador";
									$eseg="pacificador";
									break;
							endswitch;
					?>
					<div class="two columns">
						Estres:<br><br>
						Seguridad:
					</div>
					<div class="two columns">
						<a class="<?=$eest?>" href="<?=base_url()?>eneatipos/desc/<?=$eneatipo['iest']?>"><i><?=$estres?></i></a><br><br>
						<a class="<?=$eseg?>"href="<?=base_url()?>eneatipos/desc/<?=$eneatipo['iseg']?>"><i><?=$seguridad?></i></a>
					</div>
				</div>
			</section>
			<section id="contenidoPrincipal">
				<section class="texto">
					<div class="row">
						<div class="twelve columns">
							<p class="desc-c <?=$est?>">								
								<?=$eneatipo['idescc']?>
							</p>
							<hr>


					<div class="row caract">
						<div class="three columns"><p class="caract"><u>Pasión<br><br>Fijación<br><br>Trampa<br><br>Función</u></p></div>
						<div class="three columns"><p class="caract"><?=$eneatipo['ipas']?><br><br><?=$eneatipo['ifij']?><br><br><?=$eneatipo['itra']?><br><br><?=$eneatipo['ifun']?></p></div>
						<div class="three columns"><p class="caract"><u>Visión<br><br>Temor<br><br>Deseo</p></u></div>
						<div class="three columns"><p class="caract"><?=$eneatipo['ivis']?><br><br><?=$eneatipo['item']?><br><br><?=$eneatipo['ides']?></p></div>
					</div>
					<hr>
							<p class="desc-e">
								<?=$eneatipo['idesc']?>
							</p>
						</div>
					</div>
				</section>
			</section>
		</div>
	</body>
</html>