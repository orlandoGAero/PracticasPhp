<?php

    // Implementa servicio RESTful

    include "config.php";
    include "utilidades.php";

    $dbConn = connect($db);
    /*
        listar todos los post o solo uno
    */

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['id'])) {
            // Mostrar un post
            $sql = $dbConn->prepare("SELECT * FROM posts WHERE id=:id");
            $sql->bindValue(':id', $_GET['id']);
            $sql->execute();
            header("HTTP/1.1 200 OK");
            header("Access-Control-Allow-Origin:*");
            header("Content-type: application/json");
            echo json_encode($sql->fetch(PDO::FETCH_ASSOC));
            exit();
        } else {
            // Mostrar lista de post
            $sql = $dbConn->prepare("SELECT * FROM posts");
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 OK");
            header("Access-Control-Allow-Origin:*");
            header("Content-type: application/json");
            echo json_encode($sql->fetchAll());
            exit();
        }
    }

    // Crear un nuevo post
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $input = $_POST;
        $sql = "INSERT INTO posts
              (title, status, content, user_id)
              VALUES
              (:title, :status, :content, :user_id)";
        $statement = $dbConn->prepare($sql);
        bindAllValues($statement, $input);
        $statement->execute();
        $postId = $dbConn->lastInsertId();
        if($postId)
        {
          $input['id'] = $postId;
          header("HTTP/1.1 200 OK");
          header("Access-Control-Allow-Origin:*");
          header("Content-type: application/json");
          echo json_encode($input);
          exit();
         }
    }

    //Borrar
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
    {
        $id = $_GET['id'];
      $statement = $dbConn->prepare("DELETE FROM posts where id=:id");
      $statement->bindValue(':id', $id);
      $statement->execute();
      header("Access-Control-Allow-Origin:*");
        header("HTTP/1.1 200 OK");
        exit();
    }
     
    //Actualizar
    if ($_SERVER['REQUEST_METHOD'] == 'PUT')
    {
        $input = $_GET;
        $postId = $input['id'];
        $fields = getParams($input);
     
        $sql = "
              UPDATE posts
              SET $fields
              WHERE id='$postId'
               ";
     
        $statement = $dbConn->prepare($sql);
        bindAllValues($statement, $input);
     
        $statement->execute();
        header("Access-Control-Allow-Origin:*");
        header("HTTP/1.1 200 OK");
        exit();
    }

    header("HTTP/1.1 400 Bad Request");

?>
