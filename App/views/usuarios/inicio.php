<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $datos['titulo']; ?></h1>

    <ul>
        <?php foreach ($datos['usuarios'] as $usuario) : ?>
            <li><?php echo $usuario->titulo . '(id:' . $usuario->id_usuario . ')' ?></li>
        <?php endforeach ?>
    </ul>

    <?php
    include_once RUTA_APP . '/views/inc/footer.php';
    ?>

</body>

</html>