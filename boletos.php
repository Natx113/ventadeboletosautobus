<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>boletos</title>
</head>

<body>


    <!--codigo para el video de fondo-->


    <?php
    include_once 'plantillas/navbar.php';
    ?>
    <img src="img/bailecito.gif" alt="bailecito" class="bailecito">

    <div class="general">
        <!--contenedores-->
        <div class="contenedor">
            <div><img class="logos" src="img/flecha_amarilla.png" alt="fa">
                <div class="espacio">
                    <p class="texto">Origen: Salamanca</p>
                </div>
                <div class="espacio2">
                    <p class="texto" id="duracion">Duracion: 20min</p>
                </div>

                <div class="espacio3">
                    <p>Precio: <br>40$</p>

                </div>
                <div class="espacio4">
                    <a class="enviar" href="registro.php">Comprar</a>
                </div>
            </div>


        </div>
    </div>

    <video muted autoplay loop>
        <source src="img/fondo.mp4" type="video/mp4">
    </video>
    <div class="capa"></div>
</body>

</html>