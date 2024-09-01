<?php

try{
    $host = "localhost";
    $dbname = "todos";
    $username = "root";
    $password = "";

    $connection=  new PDO("mysql:host=$host; dbname=$dbname;" ,$username, $password);
    // $connection->getAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($connection){
        // echo "connected successully";

    }

}catch(PDOException $e){
    echo "connection failed" .$e->getMessage();
}