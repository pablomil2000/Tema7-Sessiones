<!DOCTYPE html>
<head>
		<title>Pares y Nones</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<LINK href="..\estilos\estilos.css" rel="stylesheet" type="text/css">	
	</head>
<body >

<div id="menu" style="float:left;margin-left: 60px;">
    	<ul>       	
            
            <li class="menupal"><a href="#" class="nivel1" target="contenedor">¿Quién inicia sesión?</a></li>
            <li class="menupal"><a href="../index.php" class="nivel1" target="contenedor">Inicio</a></li>
            
        </ul>
    </div>

    <table style="position: absolute;top:100px;left: 150px;width: 20%;height: 20%;border:blue;" bgcolor= "FFFFFF" border="1" cellpadding="1" cellspacing="1">
    <tr>
      <td>
        <form action="../codigo/principal.php?login" method="post">
        Nombre Usuario:
            <input type="text" size="30" maxlength="50" name="usuario" />
            <input  type="submit" value="Enviar">

        </form>
    </td>
    </tr>
</table>
</form>
</body>
</html>

