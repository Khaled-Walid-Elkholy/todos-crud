<?php

require_once"conn.php";

if(isset($_GET['update_id'])){
    $id = $_GET['update_id'];
    $data = $connection->query("select * from tasks where id ='$id'");

    $rows =$data->fetch(PDO::FETCH_OBJ);
    // print_r($rows);


    if(isset($_POST['submit'])){
        $task= $_POST['mytask'];
        $update = $connection->prepare("update tasks set name =:name where id='$id'");

        $update->execute([':name'=>$task]);
        header("location: index.php");
    }


}
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<div class="container w-50 mt-5">
        <form method="POST" action="update.php?update_id=<?php echo $id ?>" class="form-inline">

            <div class="">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">create</label>
                    <input name="mytask" type="text" value="<?php echo $rows->name ?>" class="form-control" id="inputPassword2" placeholder="enter task">
                </div>
                <!-- <div class="form-group mx-sm-3 mb-2">
                    <label for="email" class="sr-only">email</label>
                    <input name="email" type="text" class="form-control" id="email" placeholder="enter task">
                </div> -->
                <button name="submit" type="submit" class="btn btn-primary form-control mb-2">Create</button>
 
            </div>

        </form>
</div>