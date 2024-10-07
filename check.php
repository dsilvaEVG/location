<!-- David Silva Vega -->

<!-- Hacerlo en booleano -->

<?php
    $numero=$_GET["num"];

    // Función que calcula el cuadrado de un número pasado por parámetro
    
    
    // Función booleana que devuelve true si el número pasado por parámetro par. Si no, devuelve falso
    function par(&$numero){

        $numero=$numero*$numero; //Sobre el mismo número guardamos su cuadrado

        if ($numero % 2 == 0){ 
            return true; //Revisamos si el número al dividirlo entre 2 da resto 0. Si es cierto lo guardamos como true
        }
        else {
            return false; //Si el resto no es 0, lo guardamos como false
        }
    }

    

    // Si la función par es true, dirige a la página de par
    if (par($numero)){
        header("Location:par.php?num=$numero");
    }
        
    
    // Si la función par es false, dirige a la página de impar
    else {
        header("Location:impar.php?num=$numero");
    }

?>
