<?php
  include('dbconfig/config.php');
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
            <button href="#" class="btn btn-outline-danger my-2 my-sm-0 mb-9 " id="button" data-toggle="modal" data-target="#songModal" name="red_dlt">Delete</button>
      </nav>


<div class="modal fade modal-white" id="songModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete a song</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

  <div class="form-group row">
    <label for="sname" class="col-sm-4 col-form-label">Song Name:</label>
    <div class="col-sm">
      <input type="text" class="form-control-plaintext" id="sname" placeholder="Enter a song name" name="dlt_song_btn">
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-dark" name="dlt_btn">Delete</button>
      </div>




    </div>
  </div>
</div>


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
<form class="" action="" method="post">
  <div class="text-right">
<button href="#" class="btn btn-outline-primary my-2 my-sm-0 mb-9 " id="button">Play</button>
<button href="" class="btn btn-outline-info my-2 my-sm-0 mb-9 " id="button">Delete</button>
</form>


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
