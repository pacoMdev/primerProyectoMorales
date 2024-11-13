<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Tres Tacos</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

</head>
<body>
    <?php include_once("header.php") ?>

    <main>
        <section id="menu">
            <h1 class="menuTitle">MENU</h1>
            <section class="sectionProducto">
                <h2>Tacos</h2>
                <div class="containerProductos">
                    <div class="containerProducto">
                        <div class="imagenProducto">
                            <img src="/project-TresTacos/public/images/tacos-png-fondo-transparente_484256-1022-Photoroom.png" alt="">
                            <div class="containerIconImg">
                                <div class="iconStar"></div>
                            </div>
                        </div>
                        <div class="contenidoInfo">
                            <h2>Nachos a tope</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae commodo urna.</p>
                            <div class="infoPrecio">
                                <h2>8.95€</h2>
                                <?php
                                $cantidad=1;
                                $texto="";

                                if ($cantidad==0){
                                    $texto="
                                    <div class='containerCantidad'>
                                    <div class='containerIconProd'></div>
                                        <div class='iconoMas'></div>
                                    </div>
                                    ";
                                }else if ($cantidad>0){
                                    $texto="
                                    <div class='containerCantidad'>
                                        <div class='containerIconCant'>
                                            <div class='iconoMenos'></div>
                                        </div>
                                        <p>1</p>
                                        <div class='containerIconCant'>
                                            <div class='iconoMas'></div>
                                        </div>
                                    </div>
                                    ";
                                }
                                echo $texto;
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>

    <?php include_once("footer.php") ?>
</body>
</html>