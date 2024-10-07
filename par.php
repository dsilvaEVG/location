<!-- David Silva Vega -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es par</title>
    <link rel=stylesheet href="par.css"/>
</head>
<body>
<table> <!-- Creamos una tabla donde recogemos los datos de check.php -->
        <tr>
            <th>Cuadrado</th>
            <th>Par/Impar</th>
        </tr>
        <tr>
    <?php
        echo '<td>' .$_GET["num"]. '</td>
            <td> ES PAR</td>';
    ?> 
    <!-- Primera celda, el número. Segunda celda, su cuadrado. Tercera celda, si es par o impar (en este caso, impar) -->
        </tr>
    </table>
</body>
</html>
