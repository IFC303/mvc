<?php
include_once RUTA_APP . '/views/inc/header.php';
?>
<h1>Inicio cargado</h1>

<h2>Datos de Inicio</h2>

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

include_once RUTA_APP . '/views/inc/footer.php';
?>
