<?php

    //Abrir la conexion a la base de datos
    function connect($db) {
        try {
            $conn = new PDO("mysql:host={$db['host']};dbname={$db['db']}", $db['username'], $db['password']);
            //modo error PDO 
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $exception) {
            exit($exception->getMessage());
        }
    }

    // obtener parametros para updates
    function getParams($input) {
        $filterParams = [];
        
        foreach($input as $param => $value) {
            $filterParams[] = "$param=:$param";
        }

        return implode(", ", $filterParams);
    }

    // Asociar todos los parametros a un sql
    function bindAllValues($statement, $params) {
        foreach ($params as $param => $value) {
            $statement->bindValue(':'.$param, $value);
        }
        return $statement;
    }

?>