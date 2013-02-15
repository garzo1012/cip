<?php
$this->load->view("header");
$base = base_url();
?>
<script src="<?=base_url()?>media/js/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>media/css/plantilla.css">
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
</head>
<body>
    <div id="outer-wrap">
        <div id="inner-wrap">

            <header id="top" role="banner">
                <div class="block">
                    <h1 class="block-title">Book Title</h1>
                    <a class="nav-btn" id="nav-open-btn" href="#nav">Book Navigation</a>
                </div>
            </header>

            <nav id="nav" role="navigation">
                <div class="block">
                    <h2 class="block-title">Dashboard</h2>
                    <ul>
                        <li class="is-active">
                            <a href="#">Seccion 1</a>
                        </li><!--
                        --><li>
                            <a href="#">Seccion 2</a>
                        </li><!--
                        --><li>
                            <a href="#">Seccion 3</a>
                        </li><!--
                        --><li>
                            <a href="#">Seccion 4</a>
                        </li><!--
                        --><li>
                            <a href="#">Seccion 5</a>
                        </li>
                    </ul>
                    <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
                </div>
            </nav>

            <div id="main" role="main">
                <article class="block">
                   
                    <div class="container">
                        <!-- Contenido aqui -->
                        <div class="row">
                            <div class="ten columns">
                                <?php

                                    $sec = 1;
                                    $cont = 0;
                                    while ($sec<19) {
                                        echo "
                                            <div class='baraja bar' id='b{$sec}'>
                                                <ul id='baraja-el{$sec}' class='baraja-cont'>
                                                    <li value='{$tarjetas[++$cont]['id']}' class='sele'><h4>{$tarjetas[$cont]['palabra']}</h4></li>
                                                    <li value='{$tarjetas[++$cont]['id']}' class='sele'><h4>{$tarjetas[$cont]['palabra']}</h4></li>
                                                    <li value='{$tarjetas[++$cont]['id']}' class='sele'><h4>{$tarjetas[$cont]['palabra']}</h4></li>
                                                    <li value='{$tarjetas[++$cont]['id']}' class='sele'><h4>{$tarjetas[$cont]['palabra']}</h4></li>
                                                    <li value='{$tarjetas[++$cont]['id']}' class='sele'><h4>{$tarjetas[$cont]['palabra']}</h4></li>
                                                </ul>
                                            </div>
                                        ";
                                        $sec++;
                                    }

                                ?>
                            </div>
                            <div class="one columns">
                                <a class="button" id="siguiente">Siguiente »</a>
                            </div>
                            <div class="one columns"></div>
                        </div>
                        <div class="row">
                            <div class="twelve columns">
                                <div id="drop">
                                    <img id="paloma" src="<?=base_url()?>media/img/paloma.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                
                </article>
            </div>

            <footer role="contentinfo">
                <div class="block prose">
                    <p class="small"><a href="http://ota.ahds.ac.uk/desc/5730">Text distributed by the University of Oxford under a Creative Commons Attribution-ShareAlike 3.0 Unported License</a></p>
                    <p class="small">Copyright © <a href="http://dbushell.com/">David Bushell</a></p>
                </div>
            </footer>

        </div>
        <!--/#inner-wrap-->
    </div>
    <!--/#outer-wrap-->

    <script src="<?= base_url() ?>media/js/main.js"></script>
    <script src="<?= base_url() ?>media/js/jquery.baraja.js"></script>
    <script src="<?= base_url() ?>media/js/newdrag.js"></script>

</body>
</html>
