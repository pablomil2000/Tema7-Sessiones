<!DOCTYPE html>
<head>
		<title>Pares y Nones</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<LINK href="..\estilos\estilos.css" rel="stylesheet" type="text/css">	
	</head>
<body >

<div id="menu" style="float:left;margin-left: 60px;">
    	<ul>       	
            <p href="#" class="nivel1" >Sesión Iniciada   </p></li>
                    <li class="menupal"><a href="../index.php" class="nivel1" target="contenedor">Inicio</a></li>
        </ul>
    </div>

    <table style="position: absolute;top:100px;left: 150px;width: 20%;height: 20%;border:blue;" bgcolor= "FFFFFF" border="1" cellpadding="1" cellspacing="1">
    <tr>
      <td>
        <form action="#" method="post">
        Número de dedos:
        <select name="numero">
            <Option>0</option>
            <Option>1</option>
            <Option>2</option>
            <Option>3</option>
            <Option>4</option>
            <Option>5</option>
        
            </select><br />
        Par o None:
        <select name="opcion">
            <Option>PARES</option>
            <Option>NONES</option>
                  
            </select>
            <input  type="submit" value="Enviar">

        </form>
    </td>
    </tr>
</table>
</form>
</body>
</html>

