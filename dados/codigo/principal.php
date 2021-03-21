<?php
session_start();
include("funciones.php");
?>
<!DOCTYPE html>

<head>
  <title>Pares y Nones</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <LINK href="..\estilos\estilos.css" rel="stylesheet" type="text/css">
</head>

<body>

  <div id="menu" style="float:left;margin-left: 60px;">
    <ul>
      <li class="menupal"><a href="..\index.php" class="nivel1" target="contenedor">Inicio</a></li>
    </ul>
  </div>
  <?php
  if (isset($_GET['login'])) {
    login();
  } elseif (isset($_GET['cerrar'])) {
    cerrar();
  } elseif (isset($_GET['jugar'])) {
    juego2($d1, $d2, $puntos);
    mostrar($d1, $d2, $puntos);
  } elseif (isset($_GET['continuar'])) {
    juego($d1, $d2, $puntos);
    mostrar($d1, $d2, $puntos);
  } elseif (isset($_GET['reset'])) {
    reinicio();
  }elseif(isset($_GET['puntos'])){
    puntos();
  }
  ?>
  </form>
</body>

</html>