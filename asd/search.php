<?php session_start();
 ?>

<html>
<head>
    <link
    rel="stylesheet"
    href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/search.css"/>

</head>
<body class="body">
    <nav class="navbar navbar-dark bg-dark">

        <a class="btn btn-outline-primary my-2 my-sm-0" type="submit" href="./land.php">Back</a>
        </nav>
    <div class="car">
    <div class="card " style="width: 20rem; height: 25rem;">
        <img class="card-img-top" src="image/download.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?php echo $_SESSION['name']; ?></h5>

          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Play</a>
        </div>
      </div>
      </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
 <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
 <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
 <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
