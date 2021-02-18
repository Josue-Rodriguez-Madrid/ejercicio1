<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Conversor de Divisa</title>
</head>
<body>
    
<?php
 
if($_POST){
    
 $valor = $_POST['valor'];
$lista1 = $_POST['lista1'];
$lista2 = $_POST['lista2'];


if($lista1 == "1" && $lista2 == "1"){   
    echo "<h2>No valido. Estas ingresando la misma conversion intenta eligiendo 2 conversiones diferentes</h2>\n"; 
    }

    
    if($lista1 == "1" && $lista2 == "2"){   
    $dolar_euro = $valor * 0.83;
    
    echo "<h2>Tu conversion de dolár americano  $ $valor a euros es: ".round($dolar_euro,2)." €</h2>\n"; 
    }
    

    
    if($lista1 == "1" && $lista2 == "3"){   
        $dolar_yen = $valor * 105.88;  
        echo "<h2>Tu conversion de dolár americano $ $valor  a yen es: ".round($dolar_yen,2)." ¥ </h2>\n"; 
    }
    
    
    if( $lista1 == "1" && $lista2 == "4"){   
        $dolar_libra = $valor * 0.72;   
        echo "<h2>Tu conversion de dolár americano $ $valor  a libras esterlinas es: ".round($dolar_libra,2)." £ </h2>\n"; 
    }
   

    
    if ($lista1 == "2" && $lista2 == "1"){     
        $euro_dolar = $valor * 1.20 ;     
        echo "<h2>Tu conversion de euros € $valor  a dolár americano es: $" .round($euro_dolar,2)." </h2>\n"; 
    }
    
    if($lista1 == "2" && $lista2 == "2"){   
        echo "<h2>No valido. Estas ingresando la misma conversion intenta eligiendo 2 conversiones diferentes</h2>\n"; 
        }
    
    
    if( $lista1 == "2" && $lista2 == "3"){    
    $euro_yen = $valor * 127.53 ; 
    echo "<h2>Tu conversion de euros € $valor  a yen es: ".round($euro_yen,2)." ¥ </h2>\n"; 
    }
    


    
    if($lista1 == "2" && $lista2 == "4"){    
        $euro_libra = $valor * 0.87;   
        echo "<h2>Tu conversion de euros € $valor  a libras esterlinas es: ".round($euro_libra,2)." £ </h2>\n";
    }
    
 
    
    
    if($lista1 == "3" && $lista2 == "1"){    
        $yen_dolar = $valor * 0.0094 ; 
        echo "<h2>Tu conversion de yen ¥ $valor  a dolár americano es: $".round($yen_dolar,2)." </h2>\n"; 
    }
    

    
    
    if ($lista1 == "3" && $lista2 == "2"){
    $yen_euro = $valor * 0.0078;
    echo "<h2>Tu conversion de yen ¥ $valor  a euro es: ".round($yen_euro,2)." €</h2>\n"; 
    }
    
    if($lista1 == "3" && $lista2 == "3"){   
        echo "<h2>No valido. Estas ingresando la misma conversion intenta eligiendo 2 conversiones diferentes</h2>\n"; 
        }
    
    
    if ($lista1 == "3" && $lista2 == "4"){     
        $yen_libra = $valor * 0.0068;
        echo "<h2>Tu conversion de yen ¥ $valor  a libra esterlina es: ".round($yen_libra,2)." £</h2>\n"; 
    }
    

    
    
    if($lista1 == "4" && $lista2 == "1"){   
        $libra_dolar = $valor * 1.39;  
        echo "<h2>Tu conversion de libras esterlinas £ $valor  a dolár americano es: $".round($libra_dolar,2)." </h2>\n"; 
    }
   

    
    if( $lista1 == "4" && $lista2 == "2"){  
        $libra_euro = $valor * 1.15; 
        echo "<h2>Tu conversion de libras esterlinas £ $valor  a euros es: ".round($libra_euro,2)." €</h2>\n";
    }
   
 
    
    
    if( $lista1 == "4" && $lista2 = "3"){  
        $libra_yen = $valor * 146.78;   
        echo "<h2>Tu conversion de libras esterlinas £ $valor  a yenes es: ".round($libra_yen,2)." £</h2>\n"; 
    }
    
    if($lista1 == "4" && $lista2 == "4"){   
        echo "<h2>No valido. Estas ingresando la misma conversion intenta eligiendo 2 conversiones diferentes</h2>\n"; 
        }

}
else{
    echo "<h2>No ha ingresado una cantidad </h2>\n"; 
}

?>
</br>
</br>

<a href="conversor.html" class="a-btn">
 <span class="a-btn-symbol">i</span>
 <span class="a-btn-text"><b>Ingresar</b></span>
 <span class="a-btn-slide-text"><b>otra conversion</b></span>
 <span class="a-btn-slide-icon"></span>
 </a>

</body>
</html>

