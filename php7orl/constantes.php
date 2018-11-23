<?php
    // Constantes
    
    // const
    const CONSTANTE = 'soy una constante';
    const NUMERO = 10;
    const EQUIPOS = array('Toluca','Pachuca','Santos');

    // define
    define('CONSTANTE2', 'constante 2');
    define('NUMERO2', 20);
    define('NFL', array('Seahawks', 'Browns', 'Panthers'));

    echo CONSTANTE."\n";
    echo NUMERO."\n";
    echo EQUIPOS[0]."\n";

    echo CONSTANTE2."\n";
    echo NUMERO2."\n";
    echo NFL[0]."\n";

    // Constantes predefinidas
    // http://php.net/manual/es/language.constants.predefined.php
    // echo PHP_INT_MIN."\n"; //7.0.0
    // echo PHP_FLOAT_DIG."\n"; //7.2.0
    // echo PHP_FLOAT_EPSILON."\n"; //7.2.0
    // echo PHP_FLOAT_MIN."\n"; //7.2.0
    // echo PHP_FLOAT_MAX."\n"; //7.2.0
    // echo PHP_FD_SETSIZE."\n"; //7.1.0
    echo __LINE__."\n";
    echo __FILE__."\n";
    echo __DIR__."\n";
    // echo __FUNCTION__."\n";
    // echo __CLASS__."\n";
    // echo __TRAIT__."\n";

?>