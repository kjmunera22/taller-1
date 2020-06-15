<?php
/*$nombre = "Kelly Johana Munera Arias";
$edad = "27 ";

echo("Soy ".$nombre);
echo("<br>");
echo ("Voy a cumplir ".$edad. " años");*/

//1.. CALCULADORA
/*$numero1=100;
$numero2=10;

$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$divicion=$numero1/$numero2;

echo("La suma de: ".$numero1." + ".$numero2." es ".$suma);
echo("<br>");
echo("La resta de: ".$numero1." - ".$numero2." es ".$resta);
echo("<br>");
echo("La multiplicacion de: ".$numero1." * ".$numero2." es ".$multiplicacion);
echo("<br>");
echo("La divicion de: ".$numero1." / ".$numero2." es ".$divicion);
echo("<br>");
echo("<br>");


//2.. BODYTECH

$peso=59;
$altura=1.60;
$imc=$peso/($altura*$altura);

if( $imc <= 18.4 )
    {
        echo("Su indice de masa corporal es de ".$imc);
        echo("<br>");
        echo("Debe alimentarse mejor porque usted tiene insuficiencia de peso");
    }
    else if($imc >= 18.5 && $imc <= 24.9)
    {
        echo("Su indice de masa corporal es de ".$imc);
        echo("<br>");
        echo("Su peso esta entre los parametros establecidos");
    }

    else if($imc >= 25 && $imc <=29.9)
    {
        echo("Su indice de masa corporal es de ".$imc);
        echo("<br>");
        echo("Lo esperamos por nuestras instalaciones.. Usted tiene sobrepeso");
    }  
    else if($imc >= 30 && $imc <=34.9)
    {
        echo("Su indice de masa corporal es de ".$imc);
        echo("<br>");
        echo("Por su salud alimentese bien se encuentra con obesidad face 1");
    }
    else if($imc >= 35 && $imc <=39.9)
    {
        echo("Su indice de masa corporal es de ".$imc);
        echo("<br>");
        echo("Aumentar dieta y ejercisio porque usted tiene obesidad face 2");
    }
    else if($imc >=40)
    {
        echo("Su indice de masa corporal es de ".$imc);
        echo("<br>");
        echo("Usted tiene obesidad face 3!! Osea esta peor que yayirobe");
    } 

    //3..SPRINT STEP

    $costoZapatos=150000;
    $cantidadZapatos=6;
    $descuento;
    $valorTzapatos=$costoZapatos*$cantidadZapatos;

    if($cantidadZapatos==3)
    {
        ($descuento = $valorTzapatos * 0.10);
        echo("El valor es: ".$descuento);
    }
    else if ($cantidadZapatos > 3 && 5 >= $cantidadZapatos )
    {
        ($descuento = $valorTzapatos * 0.20);
        echo("El valor es: ".$descuento);
    }
    else if ($cantidadZapatos > 5)
    {
        ($descuento =$valorTzapatos * 0.40);
        echo("El valor es ".$descuento);

    }

    //4..SALARIO POSTOBON
    $hora=20000;
    $CantHoras=46;
    $horaExtra=25000;
    $salario=$CantHoras * $hora; 
    $cantExtras=7;
    $salarioExtra=$cantExtras * $horaExtra; 
    $total=$salario + $salarioExtra;

    if($CantHoras < 40)
    {
        echo("El salario devegado es de ".$salario);
    }
    else if ($CantHoras > 40)
    { 
        echo("Se le pagara con todo y extras ".$total);
    } 

    //5..LA JUGOSA SAS */

    $salpicon=array("Dulce 1"=>"Banano","Dulce 2"=>"Manzana","Dulce 3"=>"Durazno","acido 1"=>"Piña","acido 2"=>"Naranja","acido 3"=>"Lulo");

    foreach($salpicon as $clave=>$valor)
    {
        echo($valor);
        echo("<br>");
    }

/*RETO1 NIVEL COQUITO: Almacena en un array indexado
 los 10 primeros numeros pares e imprime cada uno de estos en una linea diferente

    $numero=array(2,4,6,8,10,12,14,16,18);
    
    foreach($numero as $valor)
    {
        echo($valor);
        echo("<br>");
    }*/
?>