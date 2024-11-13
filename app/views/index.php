<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tres Tacos. Sabor de Mexico</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php
    include_once("header.php");
    ?>


    <main>
        <section id="containerCarruselImg">
            <div class="containerCarrusel">
                <div class="slide" style="background-image: url('/project-TresTacos/public/images/delicious-tacos-arrangement.jpg');">
                    <div class="slide-content">
                        <div class="containerSlide">
                            <h2>Título 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum, tortor ut vulputate bibendum</p>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-image: url('/project-TresTacos/public/images/pngtree-burritos-wraps-with-minced-beef-and-vegetables-on-a-wooden-background-image_16009280.png');">
                    <div class="slide-content">
                        <div class="containerSlide">
                            <h2>Título 2</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum, tortor ut vulputate bibendum</p>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-image: url('/project-TresTacos/public/images/freshness-plate-gourmet-taco-meat-guacamole-vegetables-generated-by-artificial-intelligence.jpg');">
                    <div class="slide-content">
                        <div class="containerSlide">
                            <h2>Título 3</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum, tortor ut vulputate bibendum</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="containerDotts">
                <div class="dott" data-index="0"></div>
                <div class="dott" data-index="1"></div>
                <div class="dott" data-index="2"></div>
            </div>
        </section>
        <section id="containerShowAll">
            <div class="containerTitulo">
                <h2>Productos Destacados</h2>
                <a href="" class="containerMoreInfo">
                    <p>ver todo</p>
                    <div class="iconoArrowR"></div>
                </a>
            </div>
            <div class="containerProductosDestacados">
                <div class="productoDestacado">
                    <div class="containerHeaderDesta">
                        <h3 class="tituloDesta">Quesadillas</h3>
                        <p class="precioDesta">8.75€</p>
                    </div>
                    <img src="/project-TresTacos/public/images/0f963fc1-f4d5-4e06-9d52-34bfaf640fe7-Photoroom.png" alt="">
                </div>
                <div class="productoDestacado">
                    <div class="containerHeaderDesta">
                        <h3 class="tituloDesta">Andada de tacos</h3>
                        <p class="precioDesta">8.75€</p>
                    </div>
                    <img src="/project-TresTacos/public/images/tacos-png-fondo-transparente_484256-1076-Photoroom.png" alt="">
                </div>
                <div class="productoDestacado">
                    <div class="containerHeaderDesta">
                        <h3 class="tituloDesta">Nachos a tope</h3>
                        <p class="precioDesta">8.75€</p>
                    </div>
                    <img src="/project-TresTacos/public/images/41439faf-a2e2-4bb3-b28f-901fd8376e36-Photoroom.png" alt="">
                </div>
                <div class="productoDestacado">
                    <div class="containerHeaderDesta">
                        <h3 class="tituloDesta">Ramo de tacos</h3>
                        <p class="precioDesta">8.75€</p>
                    </div>
                    <img src="/project-TresTacos/public/images/tacos-fondo-transparente_1113959-4223-Photoroom.png" alt="">
                </div>
            </div>
        </section>
        <section id="valores">
            <div class="containerValores">
                <video autoplay loop muted>
                    <source src="/project-TresTacos/public/media/4970524-uhd_4096_2160_30fps.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
                <div class="contTitleVal">
                    <p>VALORES</p>
                    <h1 class="titleVal">Frescos y preparados en el momento</h1>
                </div>
            </div>
        </section>




        <section id="containerValores_Horario">
            <div id="containerGeneralHorario">
                <h2>HORARIO</h2>
                <div class="containerHorarios">
                    <div class="containerHorario">
                        <div class="infoHorario">
                            <div class="tituloContainseHorario">
                                <p class="infoh1">HORARIO</p>
                                <p class="infoh2">Dias</p>
                            </div>
                            <div class="iconoFlechaD"></div>
                        </div>
                        <p>Texto informativo sobre el horario de apertura del restaurante y de cierre</p>
                    </div>
                    <div class="containerHorario">
                        <div class="infoHorario">
                            <div class="tituloContainseHorario">
                                <p class="infoh1">HORARIO</p>
                                <p class="infoh2">Horas</p>
                            </div>
                            <div class="iconoFlechaD"></div>
                        </div>
                        <p>Texto informativo sobre el horario de apertura del restaurante y de cierre</p>
                    </div>
                    <div class="containerHorario">
                        <div class="infoHorario">
                            <div class="tituloContainseHorario">
                                <p class="infoh1">HORARIO</p>
                                <p class="infoh2">Festivos</p>
                            </div>
                            <div class="iconoFlechaD"></div>
                        </div>
                        <p>Texto informativo sobre el horario de apertura del restaurante y de cierre</p>
                    </div>
                </div>
            </div>
            <div id="containerTextVal">
                <h2>Sabor intenso</h2>
                <p>
                    En Tres Tacos, nos enorgullece ofrecer una experiencia gastronómica única basada en la calidad y frescura de nuestros productos. Todos nuestros ingredientes son 100% naturales y cuidadosamente seleccionados, asegurando que cada plato esté lleno de sabor auténtico.
                </p>
            </div>
        </section>
    </main>


    <?php
    include_once("footer.php");
    ?>
    <script src="/project-TresTacos/public/js/components/carrusel.js"></script>
</body>
</html>