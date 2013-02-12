<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <?php
        require 'media/php/lessc.inc.php';
        $carpeta_in = "media/less/";
        $carpeta_out = "media/css/";
        $est = 'lessestilos';
        lessc::ccompile($carpeta_in . $est . '.less', $carpeta_out . $est . '.css');
        ?>
		<meta name="description" content="Fullscreen Pageflip Layout with BookBlock" />
		<meta name="keywords" content="fullscreen pageflip, booklet, layout, bookblock, jquery plugin, flipboard layout, sidebar menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>media/css/<?=$est?>.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>media/css/jquery.jscrollpane.custom.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>media/css/bookblock.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>media/css/custom.css" />
		<script src="<?=base_url()?>media/js/modernizr.custom.79639.js"></script>
