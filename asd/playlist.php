<?php
  include('dbconfig/config.php');
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
    <link rel="stylesheet" href="css/login.css"/>

</head>
<body class="body">
  <nav class="navbar navbar-dark bg-dark">

          <a class="btn btn-outline-primary my-2 my-sm-0" type="submit" href="./land.php"> Back</a>
    </nav>

    <div class="jumbotron ">
      <h1 class="display-4"><b>Playlists</b></h1>
      <br>

          <button type="button" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#exampleModal">New <b>+</b></button>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Playlist</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


                <form class="" action="" method="post">
                    <div class="form-group row">
                      <label for="pname" class="col-sm-4 col-form-label">Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control-plaintext" id="pname" placeholder="Playlist name" name="playlist_name">
                      </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <button class="btn btn-outline-success my-2 my-sm-0" name="playlist_btn">Create</button>

                        </form>

                        <?php
                        if (isset($_POST['playlist_btn'])) {
                          $new_playlist = $_POST['playlist_name'];

                          if ($new_playlist == "") {
                            echo '<script>alert("Enter the playlist name..!!")</script>';
                          }
                          else{

                          $query = "INSERT INTO `playlist`(`playlist_name`) VALUES ('$new_playlist')";

                          $result = mysqli_query($conn,$query);
                        }
                      }
                         ?>

                        </div>
                    </div>
  </div>
</div>
</div>
</div>

<div class="container">
      <div class="row row-content">

             <div class="col-12 col-sm-4">
                 <div class="card" style="width: 18rem; height: 23rem;">
                     <img src="./image/download.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                       <h5 class="card-title">Mine</h5>
                       <br>
                       <br>
                        <a href="#" class="btn btn-outline-success my-2 my-sm-0">Open</a>
                     </div>
             </div>
             </div>
             <div class="col-12 col-md-4">
                 <div class="card" style="width: 18rem; height: 23rem;">
                     <img src="./image/download.jpg"  class="card-img" alt="...">
                     <div class="card-body">
                       <h5 class="card-title">Favourites</h5>
                       <br>
                       <br>
                        <a href="#" class="btn btn-outline-success my-2 my-sm-0">Open</a>
                     </div>
             </div>
               </div>
               <div class="col-12 col-md-4">
                 <div class="card" style="width: 18rem; height: 23rem;">
                     <img src="./image/download.jpg"  class="card-img-top" alt="...">
                     <div class="card-body">
                       <h5 class="card-title">Malyalam</h5>
                      <br>
                      <br>
                       <a href="#" class="btn btn-outline-success my-2 my-sm-0">Open</a>
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
