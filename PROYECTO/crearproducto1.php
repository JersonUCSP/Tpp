<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Añadir producto</title>
</head>
<body>
    <form method="POST" name="form1" action="crearproducto2.php">
        Ingrese nombre del producto:
        <input type="text" name="nom"> <br>
        <br>
        Ingrese descripción del producto:
        <input type="text" name="des"> <br>
        <br>
        Ingrese el precio:
        <input type="number" name="precio"> <br>
        <br>
        Ingrese el stock:
        <input type="number" name="stock"> <br>
        <br>
        Ingrese FK Marca:
        <input type="number" name="fkmarca"> <br>
        <br>
        Ingrese FK Categoria:
        <input type="number" name="fkcategoria"> <br>
        <br>
        <input type="submit" value="ENVIAR">

    </form>   
</body>  
