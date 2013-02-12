<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CTIN | Centro de Tecnologia e innovacion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?=base_url()?>media/css/cardemo.css">

    </head>

    <body>
        <section class="main">

            <ul class="ch-grid">
                <li>
                    <div class="ch-item ch-img-1">				
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-1"></div>
                                <div class="ch-info-back">
                                    <h3>Consciente</h3>
                                    <p>1</p>
                                    <p>Tiene un alto y activo sentido de lo que es bueno y malo, una "brújula personal" que guía sus acciones y opiniones en la mayor parte de las áreas de la vida. Tiene un profundo sentido de responsabilidad, sin hacer excepciones siquiera consigo mismo.</p>
                                </div>	
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ch-item ch-img-2">
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-2"></div>
                                <div class="ch-info-back">
                                    <h3>Serio</h3>
                                    <P>2 | 1-1</P>
                                    <p>Sobrio y firme en intención y acción, con un comportamiento que no es frívolo o fácilmente distraible. Lo opuesto de juguetón o caprichoso; cierta gravedad y seriedad sin mucha flexibilidad son parte de la escena.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ch-item ch-img-3">
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-3"></div>
                                <div class="ch-info-back">
                                    <h3>Emprendedor</h3>
                                    <p>Empujarse a sí mismo y tener que luchar más, tratar de ir más allá de lo normal o confortable. Consiste en realizar un esfuerzo especial, ir contra la corriente, o ejercer voluntad o esfuerzo especial para lograr un objetivo no fácil de obtener.</p>
                                    <p>4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ch-item ch-img-4">				
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-4"></div>
                                <div class="ch-info-back">
                                    <h3>Obligado</h3>
                                    <p>3 | 1-1</p>
                                    <p>Tiene un profundo sentido de que uno es responsable personalmente de hacer que las cosas se tornen de buena forma, de hacer lo correcto, y de perseverar en una dirección a pesar de los sentimientos personales o inclinaciones. Tiene el sentimiento de la responsabilidad de manera seria.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ch-item ch-img-5">				
                        <div class="ch-info-wrap">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-5"></div>
                                <div class="ch-info-back">
                                    <h3>Sereno</h3>
                                    <p>Tiene el hábito de observarse detalladamente y tratar de sofocar impulsos y deseos que van contra lo que se considera aceptable. El autocontrol implica hacer un esfuerzo para ir contra la propia naturaleza de uno mismo y los deseos, para resistir y no rendirse en lo que realmente se desea.</p>
                                </div>	
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </section>

        <script src="<?= base_url() ?>media/js/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".ch-item").click(function(){
                    if($(this).children(".ch-info-wrap").hasClass("active")){
                        $(this).children().children(".ch-info").removeClass("girar")
                        $(this).children(".ch-info-wrap").removeClass("sombra")
                        $(this).children(".ch-info-wrap").removeClass("active")
                        
                    }
                    
                    else{
                        $(this).children(".ch-info-wrap").addClass("sombra")
                        $(this).children().children(".ch-info").addClass("girar")
                        $(this).children(".ch-info-wrap").addClass("active")
                    }    
                })
            })
        </script>
    </body>
</html>
