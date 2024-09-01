<?php

require_once"conn.php";

if(isset($_GET['delete_id'])){

    $id  =$_GET['delete_id'];
    $deleteTask = $connection->prepare("delete from tasks where id =:id");

    $deleteTask->execute([':id' =>$id]);
    header("location: index.php");
}
