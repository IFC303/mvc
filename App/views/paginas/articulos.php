<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Artículos cargado</h1>

    <h2>Datos de los artículos</h2>

    <?php
    function listArr($datos)
    {
        $html = '<ul>';
        foreach ($datos as $item) {
            if (is_array($item)) {
                $html .= listArr($item); // <<< here is the recursion
            } else {
                $html .= '<li>' . $item . '</li>';
            }
        }

        $html .= '</ul>';
        return $html;
    }

    echo (listArr($datos));
    ?>
</body>

</html>