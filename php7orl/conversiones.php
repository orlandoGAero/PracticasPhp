<?php
    // ----Conversión de tipos----
    
    // Convertir a numeros enteros
    
        // 1.Contexto
            $variable = "20";

            $suma = 10 + $variable;

            echo $suma."\n";
            // obtener tipo de la variable
            echo gettype($suma)."\n";

        // 2.Forzado de tipo
            $convertirCadena = "10";
            $convertirBooleano = false;
            $convertirFlotante = 6.123;

            $entero = (int)$convertirCadena;
            $booleano = (int)$convertirBooleano;
            $flotante = (int)$convertirFlotante;

            echo "\n";
            
            echo $entero."\n";
            echo gettype($entero)."\n";

            echo $booleano."\n";
            echo gettype($booleano)."\n";

            echo $flotante."\n";
            echo gettype($flotante)."\n";

        // 3.Por funcion
            $bool = true;
            $conv = intval($bool);

            echo "\n";
            echo $conv."\n";
            echo gettype($conv)."\n";

    // Convertir a numeros float o double

        // 2.Forzado de tipo
            $cadena = "12.5";
            $numReal = (float)$cadena;

            echo "\n";
            echo $numReal."\n";
            echo gettype($numReal)."\n";

        // 3.Por Funcion
            $numFloatFn = floatval($cadena);
            echo $numFloatFn."\n";
            echo gettype($numFloatFn)."\n";

    // Conversion a booleanos

        // Forzado y función
            $var = "contiene algo";
            $boolean = (boolean)$var;
            $boolFn = boolval($var);

            echo "\n";
            echo $boolean."\n";
            echo gettype($boolean)."\n";

    // Conversion a array

        // funcion
            $cadenaNum = "12,34,556,32,122";
            $arrayNum = explode(',', $cadenaNum,5);

            echo "\n";
            echo $arrayNum[3]."\n"; 
            echo gettype($arrayNum)."\n";

        // forzado
            $colores = "Rojo,Verde,Azul,Negro";
            $array = (array)$colores;

            echo $array[0]."\n";
            echo gettype($array)."\n";
    
    // Conversion de array a string

            $arrayAutos = array('Ferrari','Renault','Mercedes Benz');
            $aCadena = implode("\n",$arrayAutos);

            echo "\n";
            echo $aCadena."\n";
            echo gettype($aCadena)."\n";

?>