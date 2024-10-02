<!-- David Silva Vega -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es impar</title>
    <link rel=stylesheet href="impar.css" />
</head>
<body>
    <table> <!-- Creamos una tabla donde recogemos los datos de check.php -->
        <tr>
            <th>Número</th>
            <th>Cuadrado</th>
            <th>Par/Impar</th>
        </tr>
        <tr>
    <?php
        echo '<td>' .$_GET["num"]. '</td> 
            <td>'.$_GET["cuadrado"].'</td>
            <td> ES IMPAR</td>';
    ?> 
    <!-- Primera celda, el número. Segunda celda, su cuadrado. Tercera celda, si es par o impar (en este caso, impar) -->
        </tr>
    </table>
</body>
</html>