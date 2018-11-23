<?php

    // variables locales
    $enteros = 5;
    $float = 1.5;
    $boolean = true;
    $f1 = array('Force India','McLaren');
    $string = "Hola Php";

    echo $enteros ."\n";
    echo $float ."\n";
    $cual = ($boolean) ? 'verdadero' : 'falso';
    echo $cual ."\n";
    echo $f1[0] ."\n";
    echo $string ."\n";

    // variables globales
    $global = "soy variable global";
    
    function varGlobales() {
        $local = "soy variable local";

        echo $GLOBALS['global']."\n";
        
        echo $local."\n";
    }

    varGlobales();

    // variables superglobales
    // http://php.net/manual/es/language.variables.superglobals.php

    // $GLOBALS
    // $_SERVER
    // $_GET
    // $_POST
    // $_FILES
    // $_COOKIE
    // $_SESSION
    // $_REQUEST
    // $_ENV

?>
