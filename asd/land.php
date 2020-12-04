<?php
$conn = mysqli_connect('localhost','root','') OR die("Cannot Connect...Sry..!!");
mysqli_select_db($conn,'music');
?>

<html>
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
    <link rel="stylesheet" href="css/login.css" />

</head>
<body class="body">
    <nav class="navbar navbar-dark bg-dark">

            <a class="btn btn-outline-primary my-2 my-sm-0" type="submit" href="./index.php">Logout</a>

            <form class="form-inline my-2 my-lg-0" method="post">
      <input style="" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search_value">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="search_btn">Search</button>
    </form>
  </nav>


  <?php
  $h = 1;
  if (isset($_POST['search_btn'])) {
    $name_upper = $_POST['search_value'];
    $sql1 = "SELECT track_name FROM track";
    $query1 = mysqli_query($conn,$sql1);
    //row_count = mysqli_num_rows($query1);
    while(@$record = mysqli_fetch_array($query1))
    {
      for ($i=0; $i < 50 ; $i++) {
        if (strcasecmp(@$record[$i],$name_upper) == 0) {
          $h = 0;
         }
      }
    }
    if ($h == 1) {
      echo '<script>alert("Not Found")</script>';
    }
    else {
      header('Location:search.php');
    }
    }
   ?>

      <div class="jumbotron">
        <h1 class="display-4"><b>Music Library</b></h1>
        <br>

            <a href="./add.php"type="button" class="btn btn-outline-success my-2 my-sm-0">Add <b>+</b></a>
        <a href="./playlist.php"type="button"class="btn btn-outline-success my-2 my-sm-0">Create Playlist</a>
        <div class="text-right">
        <a class="btn btn-outline-info my-2 my-sm-0" type="submit" href="./songs.php" name=>All songs</a>
 </div>
  </div>

     <div class="container">
     <div class="row row-content">
            <div class="col-12 col-sm-4">
                <div class="card" style="width: 18rem; height: 23rem;">
                    <img src="./image/guppy.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Thaniye Mizhikal</h5>
                      <a href="#" class="btn btn-outline-success my-2 my-sm-0">Play</a>
                    </div>
            </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem; height: 23rem;">
                    <img src="./image/om.jpg" class="card-img" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Mounam Chorum Neram</h5>
                      <a href="#" class="btn btn-outline-success my-2 my-sm-0">Play</a>
                    </div>
            </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem; height: 23rem;">
                    <img src="./image/guppy.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Athiraliyum</h5>

                      <a href="#" class="btn btn-outline-success my-2 my-sm-0">Play</a>
                    </div>
                  </div>
              </div>

                 </div>
</div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
  <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
