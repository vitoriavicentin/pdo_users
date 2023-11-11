<?php
    include("env.php");
    function newConnection($dns,$user,$password){
        try {
            $connection = new PDO($dns, $user, $password);
            return $connection;
        } catch (PDOException $error) {
          echo "Error at connection: ".$error->getCode();
        }
    }

    $pdoConnection = newConnection($dns, $user, $password);
