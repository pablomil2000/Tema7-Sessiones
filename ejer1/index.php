<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="codigo/principal.php" method="post">
        <input type="number" name="numero" placeholder="Introduce un numero"><br>
        <input type="radio" name="radio" value="a">
        <label>Multiplos de 2</label><br>
        <input type="radio" name="radio" value="b">
        <label>Multiplos de 3</label><br>
        <input type="radio" name="radio" value="c">
        <label>Multiplos de 4</label><br>
        <input type="radio" name="radio" value="d" checked>
        <label>Multiplos de 2,3,4</label><br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>