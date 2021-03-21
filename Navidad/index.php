<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="formulario/formu_numero.html">Ejer1</a></p>
    <p><a href="formulario/formu_mes.html">Ejer2</a></p>
    <p><a href="formulario/formu_elevado.html">Ejer3</a></p>
    <p><a href="formulario/formu_area.html">Ejer6</a></p>
    <p><a href="formulario/formu_figura.html">Ejer7</a></p>
    <p><a href="codigo/principal.php?ejer13a">Ejer13</a></p>
    <p><a href="codigo/principal.php?ejer14a">Ejer14</a></p>
    <p><a href="formulario/formu_dias.html">Ejer15</a></p>
    <p><a href="formulario/formu_multiplo.html">Ejer16</a></p>
    <p><a href="formulario/formu_fecha.html">Ejer17</a></p>
    <p><a href="formulario/formu_tabla.html">Ejer19</a></p>
    <p><a href="formulario/formu_operaciones.html">Ejer20</a></p>
</body>
</html>

<?php
// eliminar todas las cookies
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, null, time()-3600);
        setcookie($name, null, time()-3600, '/');
    }
    echo "Se han borrado las cookies del ultimo ejercicio";
}