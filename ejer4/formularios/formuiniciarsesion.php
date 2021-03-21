<html>
    <head>
        <link href="../estilos/css.css" rel="stylesheet" type="text/css" />
    </head>
        <body>
            <div class="lista">
                <ul class="acorh">
                    <li>
                        <a href="#" > No hay usuario conectado</a>
                    </li>
                    <li>
                        <a href="#">INDEX</a>
                    </li>
                </ul>
            </div>            
            <div class="contenido">
            <p>I N I C I A R       S E S I O N</p>
            <p>-------------------------------------------------------</p>
                <p>
                    <form method="POST" action="../codigo/principal.php?iniciosesion">
                        <table border="0">
                            <tr>
                                <td>Nombre Usuario: </td>
                                <td><input type="text" size="15" maxlength="50" name="nombre" /></td>
                            </tr>
                            
                            <tr>
                                <td><input type="submit" value="Enviar" /><input type="reset" value="Limpiar" /></td> 
                            </tr>
                        </table>
                    </form>
                </p> 
            </div>
        </body>
</html>

