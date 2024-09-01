<?php
require_once"conn.php";

if(isset($_POST['submit'])){
    $task = $_POST['mytask'];
    // $email = $_POST['email'];

    $insert = $connection->prepare("insert into tasks (name) values(:name)");
    $insert->execute([':name' => $task]);
    // $insert->execute();



    header("location: index.php");
} 
?>
