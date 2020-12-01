<?php
$conn = mysqli_connect('localhost','root','') OR die("Cannot Connect...Sry..!!");
mysqli_select_db($conn,'music');

//$user_name = " ";
//$password = " ";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/songs.css"/>
    <title></title>
  </head>
  <body class="body">


    <nav class="navbar navbar-dark bg-dark">

            <a class="btn btn-outline-primary my-2 my-sm-0" type="submit" href="./land.php"> Back</a>
      </nav>


    <?php
        $sql = "SELECT track_name FROM track";
        $query = mysqli_query($conn,$sql);
        while( $record = mysqli_fetch_array($query) ) {
      ?>

<table style="width:100% ">
  <tr>
<td>
  <br>
  <div class="card" style="margin-left:5px;" >

<div class="avatar">
<img class="rounded float-left" alt="" src="./image/download.jpg">

</div>
<div class="card-body info">
<h4>

<?php
echo $record['track_name']; ?>
</h4>

<div class="text-right">
<button href="#" class="btn btn-outline-primary my-2 my-sm-0 mb-9 " id="button">Play</button>
<button href="delete.php?name=" class="btn btn-outline-info my-2 my-sm-0 mb-9 " id="button" name="dlt_btn">Delete</button>
</div>
  </div>
 </div>
</td>

  </tr>
</table>


<?php } ?>








    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
