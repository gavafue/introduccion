<?php $cadena = "Hola Mundo PHP";
$partes = explode(" ", $cadena);
print_r($partes);
foreach ($partes as $parte) {
    echo $parte . '<br/>';
}