<!-- David Silva Vega -->
<?php
$num = $_GET["num"]; // Pasamos el dato del formulario y lo guardamos en la variable num
$cuadrado = $num * $num; // Cálculo del cuadrado

if ($num % 2 == 0){ // Calculamos si el resto de la división entre 2 da 0. Si es true, el número es par
    header("Location:par.php?num=$num&cuadrado=$cuadrado");
}

else { // Si es false, el número es impar
    header("Location:impar.php?num=$num&cuadrado=$cuadrado");
}

?>