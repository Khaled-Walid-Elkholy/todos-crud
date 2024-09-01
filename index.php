

<?php
require_once"conn.php";

$data = $connection->query("select * from tasks");
// $rows = $data->fetch(PDO::FETCH_OBJ);
// var_dump($rows);
 ?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <div class="container w-50 mt-5">
        <form method="POST" action="insert.php" class="form-inline">

            <div class="">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">create</label>
                    <input name="mytask" type="text" class="form-control" id="inputPassword2" placeholder="enter task">
                </div>
                <!-- <div class="form-group mx-sm-3 mb-2">
                    <label for="email" class="sr-only">email</label>
                    <input name="email" type="text" class="form-control" id="email" placeholder="enter task">
                </div> -->
                <button name="submit" type="submit" class="btn btn-primary form-control mb-2">Create</button>

            </div>

        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Task Name</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while($rows = $data->fetch(PDO::FETCH_OBJ)): ?>
                 <tr>
                    <td><?php echo $rows->id; ?></td>
                    <td><?php echo $rows->name; ?></td>
                    <td><a href="update.php?update_id=<?php echo $rows->id?>" class="btn btn-warning">Update</a></td>
                    <td><a href="delete.php?delete_id=<?php echo $rows->id?>" class="btn btn-danger">delete</a></td>
                </tr>
                <?php endwhile; ?>
 

            </tbody>
        </table>
    </div>





    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>