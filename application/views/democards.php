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
        <style>
            .ch-grid {
                margin: 20px 0 0 0;
                padding: 0;
                list-style: none;
                display: block;
                text-align: center;
                width: 100%;
            }

            .ch-grid:after,
            .ch-item:before {
                content: '';
                display: table;
            }

            .ch-grid:after {
                clear: both;
            }

            .ch-grid li {
                width: 220px;
                height: 290px;
                display: inline-block;
                margin: 20px;
            }


            .ch-item {
                width: 100%;
                height: 100%;
                border-radius: 5%;
                position: relative;
                box-shadow: 0 1px 2px rgba(0,0,0,0.1);
                cursor: default;
            }

            .ch-info-wrap{
                position: absolute;
                width: 100%;
                height: 100%;
                border-radius: 5%;

                -webkit-perspective: 800px;
                -moz-perspective: 800px;
                -o-perspective: 800px;
                -ms-perspective: 800px;
                perspective: 800px;

                -webkit-transition: all 0.4s ease-in-out;
                -moz-transition: all 0.4s ease-in-out;
                -o-transition: all 0.4s ease-in-out;
                -ms-transition: all 0.4s ease-in-out;
                transition: all 0.4s ease-in-out;

                /*top: 20px;
                left: 20px;*/
                background: #f9f9f9 url(../images/bg.jpg);
                box-shadow: 
                    0 0 0 20px rgba(255,255,255,0.2), 
                    inset 0 0 3px rgba(115,114, 23, 0.8);

            }

            .ch-info{
                position: absolute;
                width: 100%;
                height: 100%;
                border-radius: 5%;

                -webkit-transition: all 0.4s ease-in-out;
                -moz-transition: all 0.4s ease-in-out;
                -o-transition: all 0.4s ease-in-out;
                -ms-transition: all 0.4s ease-in-out;
                transition: all 0.4s ease-in-out;

                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                -o-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;
                transform-style: preserve-3d;

            }

            .ch-info > div {
                display: block;
                position: absolute;
                width: 100%;
                height: 100%;
                border-radius: 5%;
                background-position: center center;

                -webkit-backface-visibility: hidden;
                -moz-backface-visibility: hidden;
                -o-backface-visibility: hidden;
                -ms-backface-visibility: hidden;
                backface-visibility: hidden;
            }

            .ch-info .ch-info-back {
                -webkit-transform: rotate3d(0,1,0,180deg);
                -moz-transform: rotate3d(0,1,0,180deg);
                -o-transform: rotate3d(0,1,0,180deg);
                -ms-transform: rotate3d(0,1,0,180deg);
                transform: rotate3d(0,1,0,180deg);
                background: #000;
            }

            .ch-img-1 { 
                background-image: url(http://placehold.it/220x290&text=concient);
            }

            .ch-img-2 { 
                background-image: url(http://placehold.it/220x290&text=serio);
            }

            .ch-img-3 { 
                background-image: url(http://placehold.it/220x290&text=emprendedor);
            }

            .ch-img-4 { 
                background-image: url(http://placehold.it/220x290&text=obligado);
            }

            .ch-img-5 { 
                background-image: url(http://placehold.it/220x290&text=sereno);
            }

            .ch-info h3 {
                color: #fff;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-size: 14px;
                margin: 0 15px;
                padding: 30px 0 0 0;
                height: 50px;
                font-family: 'Open Sans', Arial, sans-serif;
                text-shadow: 
                    0 0 1px #fff, 
                    0 1px 2px rgba(0,0,0,0.3);
            }

            .ch-info p {
                color: #fff;
                padding: 10px 5px;
                font-style: italic;
                margin: 0 30px;
                font-size: 12px;
                border-top: 1px solid rgba(255,255,255,0.5);
            }

            .ch-info p a {
                display: block;
                color: #fff;
                color: rgba(255,255,255,0.7);
                font-style: normal;
                font-weight: 700;
                text-transform: uppercase;
                font-size: 9px;
                letter-spacing: 1px;
                padding-top: 4px;
                font-family: 'Open Sans', Arial, sans-serif;
            }

            .ch-info p a:hover {
                color: #fff222;
                color: rgba(255,242,34, 0.8);
            }

            .girar{
                -webkit-transform: rotate3d(0,1,0,-180deg);
                -moz-transform: rotate3d(0,1,0,-180deg);
                -o-transform: rotate3d(0,1,0,-180deg);
                -ms-transform: rotate3d(0,1,0,-180deg);
                transform: rotate3d(0,1,0,-180deg);
            }

            .sombra{
                box-shadow: 
                    0 0 0 0 rgba(255,255,255,0.8), 
                    inset 0 0 3px rgba(115,114, 23, 0.8);
            }

        </style>

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
