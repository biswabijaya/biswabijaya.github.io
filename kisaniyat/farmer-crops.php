<?php
include 'dbconnect.php';

if (!isset($_SESSION['id'])) {
  header("Location: index.php?redirect=farmer-crops.php");
} else {
  $id=$_SESSION['id'];
}

if($result = mysqli_query($mysqli, "SELECT * From farmer where id=$id"))
while($res = mysqli_fetch_array($result)){
  $state=$res['state'];
}

if (isset($_GET['action'])) {
  if ($_GET['action']=="addcrop") {
    $cropname=$_GET['cropname'];
    $addcrop = mysqli_query($mysqli, "INSERT INTO `mycrops` (`farmerid`, `cropname`) VALUES ('$id', '$cropname')");
  } else if ($_GET['action']=="removecrop") {
    $cropid=$_GET['cropid'];
    $removecrop = mysqli_query($mysqli, "DELETE FROM `mycrops` WHERE id=$cropid");
  } else if ($_GET['action']=="updatequantity") {
    $quantitytosell=$_GET['quantitytosell'];
    $cropid=$_GET['cropid'];
    $updatecrop = mysqli_query($mysqli, "UPDATE `mycrops` set quantitytosell=$quantitytosell WHERE id=$cropid");
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Farmer Crops</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card bg-light card-login mx-auto mt-5">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-8 text-left">
            Crops Summary 
          </div>
          <div class="col-sm-4 text-right">
            <a class="text-success" data-toggle="modal" data-target="#add-crop">
              Add Crop
            </a>
          </div>
        </div>
      </div>
    </div>

    <?php
      $predictedemand="Not Available";
      $bidamount=0;
      $biddedby="Unbidded";
      if($result = mysqli_query($mysqli, "SELECT * From mycrops where farmerid=$id"))
      while($res = mysqli_fetch_array($result)){

        $cropname=$res['cropname'];
        $year=date("Y");

        if($resul = mysqli_query($mysqli, "SELECT * From statedata where cropname='$cropname' and statename='$state' and year=$year"))
        while($re = mysqli_fetch_array($resul)){
          $msp= $re['msp'];
          $price=$re['price'];
          $demand=$re['demand'];
        }

      echo '<div class="card bg-light card-login mx-auto mt-5">';
      echo '<div class="card-header">';
      echo '<div class="row">';
      echo '<div class="col-sm-8 text-left">'.$res['cropname'].'</div>';
      echo '<div class="col-sm-4 text-right"> <a class="text-danger" href="farmer-crops.php?cropid='.$res['id'].'&action=removecrop" data-toggle="tooltip" data-placement="top" data-original-title="Remove Crop"> Remove Crop<i class="fa fa-trash" style="color:red; font-size:16px;"> </i></a></div>';
      echo '</div>';
      echo '</div>';

      echo '<form>';
      echo '<div class="card-body">';
      echo '<input type="hidden" name="action" value="updatequantity">';

      echo '<div class="row">';
      echo '<div class="col-sm-6">';
      echo '<label>MSP '.$year.' (per KG)</label>';
      echo '<input class="form-control" type="text" value="'.($msp/100).'" disabled>';
      echo '</div>';

      echo '<div class="col-sm-6">';
      echo '<label>SP '.$year.' (per KG)</label>';
      echo '<input class="form-control" type="text" value="'.($price/100).'" disabled>';
      echo '</div>';
      echo '</div>';

      echo '<div class="row" style="margin-top: 5px;">';
      echo '<div class="col-sm-7">';
      echo '<label>Quantity to Sell (in Kg)</label>';
      echo '<input class="form-control" type="number" name="quantitytosell" value="'.$res['quantitytosell'].'" required>';
      echo '</div>';

      echo '<div class="col-sm-5">';
      echo '<label>&nbsp;</label>';
      echo '<button class="btn btn-primary btn-block" type="submit" name="cropid" value="'.$res['id'].'" >Update</button>';
      echo '</div>';
      echo '</div>';

      echo '<div class="row" style="margin-top: 5px;">';
      echo '<div class="col-sm-7">';
      echo '<label>Bidded By</label>';
      echo '<input class="form-control" type="text" value="'.$biddedby.'" disabled>';
      echo '</div>';
      echo '<div class="col-sm-5">';
      echo '<label>Proposed Price</label>';
      echo '<input class="form-control" type="text" value="'.$bidamount.'" disabled>';
      echo '</div>';
      echo '</div>';

      echo '</div>';

      echo '<div class="card-footer">';
      echo '<div class="row">';
      echo '<div class="col-sm-6">';
      echo '<label>Demand '.$year.' (in Quintals)</label>';
      echo '<input class="form-control" type="text" value="'.$demand.'" disabled>';
      echo '</div>';
      echo '<div class="col-sm-6">';
      echo '<label>Demand '.($year+1).' (Expected)</label>';
      echo '<input class="form-control" type="text" value="'.$predictedemand.'" disabled>';
      echo '</div>';
      echo '</div>';

      echo '</div>';
      echo '</form>';
      echo '</div>';
      }
    ?>


  </div>

  <!-- Add Crop Modal-->
<div class="modal fade" id="add-crop" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Add Crop</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <form method="get">
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <label>Choose Crop</label>
              <select class="form-control" name="cropname">
                <?php
                if($resul = mysqli_query($mysqli, "SELECT distinct cropname From statedata where statename='$state' group by cropname"))
                while($re = mysqli_fetch_array($resul)){
                  echo "<option>".$re['cropname']."</option>";
                }
                ?>
              </select>
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-block" type="submit" name="action" value="addcrop">Add</button>
      </form>
    </div>
  </div>
</div>
</div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
