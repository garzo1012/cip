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