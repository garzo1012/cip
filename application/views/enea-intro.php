
    <head>
        <meta charset=utf-8>
        <?php
        require 'media/php/lessc.inc.php';
        $carpeta_in = "media/less/";
        $carpeta_out = "media/css/";
        $est = 'enea';
        lessc::ccompile($carpeta_in . $est . '.less', $carpeta_out . $est . '.css');
        ?>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/<?=$est?>.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/reset.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/960.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/bootstrap-responsive.min.css">
        <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Domine' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Rufina' rel='stylesheet' type='text/css'>
    </head>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>media/css/enea-intro.css" />
<div id="wrapper">

</div>