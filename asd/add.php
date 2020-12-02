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
    <link rel="stylesheet" href="css/add.css" />



</head>
<body class="body">
    <nav class="navbar navbar-dark bg-dark">

        <a class="btn btn-outline-primary my-2 my-sm-0" type="submit" href="./land.php">Back</a>
  </nav>
    <div class="car">
    <div class="card" style="width: 35rem;">
        <div class="card-body">
          <h5 class="card-title">Track Details</h5>

          <form class="" action="" method="post">
            <div class="form-group row">
              <label for="trackname" class="col-sm-6 col-form-label">Track Name :</label>
              <div class="col-sm-6">
                <input style="color: floralwhite;" type="text" class="form-control-plaintext" id="trackname" placeholder="Trackname" name="trackname">
              </div>
            </div>
            <div class="form-group row">
                <label for="trackid" class="col-sm-6 col-form-label">Track id (TR0**) :</label>
                <div class="col-sm-6">
                  <input style="color: floralwhite;" type="text" class="form-control-plaintext" id="trackid" placeholder="Track Id" name="track_id">
                </div>
              </div>
            <div class="form-group row">
                <label for="tracktype" class="col-sm-6 col-form-label">Track Type :</label>
                <div class="col-sm-6">
                  <input style="color: floralwhite;" type="text" class="form-control-plaintext" id="tracktype" placeholder="Track Type" name="tracktype">
                </div>
              </div>
              <div class="form-group row">
                <label for="trackdesc" class="col-sm-6 col-form-label">Track Description :</label>
                <div class="col-sm-6">
                  <input style="color: floralwhite;" type="text" class="form-control-plaintext" id="trackdesc" placeholder="Track Description" name="trackdesc">
                </div>
              </div>
              <div class="form-group row">
                <label for="singer" class="col-sm-6 col-form-label">Singer :</label>
                <div class="col-sm-6">
                  <input style="color: floralwhite;" type="text" class="form-control-plaintext" id="singer" placeholder="Singer name" name="singer_name">
                </div>
              </div>
              <div class="form-group row">
                <label for="musictype" class="col-sm-6 col-form-label">Music Type:</label>
                <div class="col-sm-6">
                  <input style="color: floralwhite;" type="text" class="form-control-plaintext" id="musictype" placeholder="Music type" name="music_type">
                </div>
              </div>
              <div class="form-group row">
                <div class="offset-md-4 col-md-10">
                    <br>
                    <button type="submit" class="btn btn-outline-success my-2 my-sm-0" name="add_details_btn">Add Details</button>
                </div>
                 </div>
          </form>

          <?php
          if (isset($_POST['add_details_btn'])) {
            $k = 1;
            $track_id = $_POST['track_id'];
            $track_name = $_POST['trackname'];
            $track_type = $_POST['tracktype'];
            $track_desc = $_POST['trackdesc'];
            $singer_name = $_POST['singer_name'];
            $music_type = $_POST['music_type'];
            if($track_id=="" || $track_name=="" || $track_type=="" || $track_desc=="" || $singer_name=="" || $music_type==""){
              echo '<script>alert("Enter all the fields..!!")</script>';
            }
            else{
            $sql = "SELECT track_id FROM track";
            $query_run = mysqli_query($conn,$sql);
            $row_count = mysqli_num_rows($query_run);
            while(@$row = mysqli_fetch_array($query_run)){
              for ($i=0; $i < $row_count ; $i++) {
                if (@$row[$i] == $_POST['track_id']) {
                  $k = 0;
                  }
                }
              }
              if($k == 1){
              $query = "insert into track values('$track_id','$track_name','$track_type','$track_desc')";
              $result = mysqli_query($conn,$query);
              $query1 = "insert into singer values('$singer_name')";
              $result1 = mysqli_query($conn,$query1);
              $query2 = "insert into music_cat values('$music_type')";
              $result2 = mysqli_query($conn,$query2);
            }
            else {
              echo '<script>alert("Track Id already exists..!!")</script>';
            }
          }
          }
           ?>


        </div>
      </div>
    </div>




 <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
 <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
 <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
 <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


</body>



</html>
