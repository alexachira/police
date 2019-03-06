<?php
require 'security.php';
if ($_SESSION["user"]["type"]!="admin")
{
 header("location:home.php");
}
require 'db.php';
if (isset($_POST['password']))
{
  extract($_POST);
  $type=isset($admin) ? "admin" : "normal";
    $password=crypt($password,'dbfvfgfdviufgfufhi');
$sql = "INSERT INTO `users`(`id`, `names`, `badge_number`, `email`, `password`, `type`) VALUES
                           (null,'$names','$Badge_number','$email','$password','$type')";

    mysqli_query($conn, $sql)or die(mysqli_error($conn));
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">

    <script src="bootstrap-4.2/js/jquery.min.js"></script>
    <script src="bootstrap-4.2/js/popper.min.js"></script>
    <script src="bootstrap-4.2/js/bootstrap.min.js"></script>

</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card" style="margin-top: 10px">
                <div class="card-header">
                    ADD NEW USER
                </div>
                <div class="card-body">
                    <?php
                    if (isset($message))
                 echo "user added successfully";

                    ?>

                    <form action="admin.php" method="post">
                        <div class="form-group">
                            <label for="email">Names:</label>
                            <input type="text" class="form-control" name="names" required id="email">
                        </div>
                        <div class="form-group">
                            <label for="email">Badge_Number:</label>
                            <input type="text" class="form-control" name="Badge_number" required id="email">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" required id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" name="password" required id="pwd">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="admin" name="admin"> is an admin?
                            </label>
                        </div>


                        <button type="submit" class="btn btn-primary btn-block">add user</button>
                    </form>
                    <p class="text-danger">
                        <?php
                        if (isset($error))
                            echo $error;
                        ?>
                    </p>


                </div>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm8">
            <h2>Users</h2>
            <table class="table table-dark">
                <tr>
                    <th>names</th>
                    <th>badge_number</th>
                    <th>email</th>
                    <th>type</th>

                </tr>

                <?php
                $sql="select *from users";
                $conn=mysqli_connect("localhost","root","","police");
                $results= mysqli_query($conn,$sql);
                while ($row=mysqli_fetch_assoc($results))
                {
                    /*  var_dump($row);
                      die();*/
                    extract($row);

                    echo "<tr>             
              <td>$names</td>
              <td>$badge_number</td>
              <td>$email</td>
              <td>$type</td>
              <td><a href='promote.php?id=$id' class='btn btn-info btn-sm'>promote</a> </td>
               <td> <a href='demote.php?id=$id' class='btn btn-info btn-sm'>demote</a> </td>
                <td> <a href='reset.php?id=$id' class='btn btn-info btn-sm'>reset</a> </td>
          </tr>";
                }

                ?>
            </table>

        </div>

    </div>

</div>
    
    
    
</tr>







</body>
</html>