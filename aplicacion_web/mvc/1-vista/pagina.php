<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Alexander Acero Huarahuara, Yordy Felix Ninaja Tintaya">
    <meta name="generator" content="WordPress">
    <meta name="copyrright" content="">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="ejemplo, sitio">
    <meta name="description" content="aplicación web de seguimiento de suscripciones para recordar pagos">
    <title>Pago de Suscripciones</title>
    <link rel="stylesheet" href="css/adm_style.css">
    <link rel="stylesheet" href="css/normalice.css">
    <script src="scripts/show_container.js"></script>
</head>
<body class="body_adm">
    <header>
        <!--encabezado de la pagina-->
    <?php
        include "modulo/cont_head.php"
    ?>
    </header>
    <aside>
        <!-- cuadro de opciones-->
    <?php
        include "modulo/cuadro_lateral.php"
    ?>
    </aside>
    <main> 
    <?php
        include "modulo/cont_datos.php"
    ?>
    </main>
</body>
</html>