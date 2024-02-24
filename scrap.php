<?php
$página_inicio = file_get_contents('https://tienda.mercadona.es/api/categories/'.$_GET["idcat"].'/?lang=es&wh=vlc1');
echo $página_inicio;
?>