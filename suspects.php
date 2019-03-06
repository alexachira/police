<?php
require 'security.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>suspects</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">

    <script src="bootstrap-4.2/js/jquery.min.js"></script>
    <script src="bootstrap-4.2/js/popper.min.js"></script>
    <script src="bootstrap-4.2/js/bootstrap.min.js"></script>

</head>
<body>
<?php require  'navbar.php';?>
<div class="container">
  <table class="table">
    <thead>
    <tr>
    <th>ID</th>
    <th>NAMES</th>
    <th>IDENTITY</th>
    <th>GENDER</th>
    <th>DATE</th>
    <th>TYPE</th>
    <th>ACTION</th>
    </tr>

    <tbody>
     <!--<tr>
         <td>1</td>
         <td>john maina</td>
         <td>12345678</td>
         <td>male</td>
         <td>2019-02-5</td>
         <td>stealing</td>


     </tr>-->
      <?php
      require  'db.php';
      $sql = "SELECT * FROM suspects where date_left like '0000-00-00%' ";
      $results = mysqli_query($conn, $sql);
      while ($row=mysqli_fetch_assoc($results))
      {
          extract($row);
          echo " <tr>
                       <td>$id</td>
                       <td>$names</td>
                       <td>$identity</td>
                       <td>$gender</td>
                       <td>$date</td>
                       <td>$type</td>
                       <td> <a href='checkout.php?id=$id' class='btn btn-info btn-sm'>release</a> </td>
                </tr>";


      }


      ?>

      </tbody>


    </thead>



  </table>



</div>

</body>
</html>