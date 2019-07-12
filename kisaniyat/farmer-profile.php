<?php
include 'dbconnect.php';

if (!isset($_SESSION['id'])) {
  header("Location: index.php?redirect=farmer-profile.php");
} else {
  $id=$_SESSION['id'];
}

if (isset($_GET['action']) and $_GET['action']=="edit") {
  $inputfilter="required";
} else {
  $inputfilter="disabled";
}

if($result = mysqli_query($mysqli, "SELECT * From farmer where id=$id"))
while($res = mysqli_fetch_array($result)){
  $name=$res['name'];
  $pass=$res['pass'];
  $aadhar=$res['aadhar'];
  $phoneno=$res['phoneno'];
  $state=$res['state'];
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
  <title>Farmer Profile</title>
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
      <div class="card-header">Profile Detail</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label>Full Name</label>
            <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" <?php echo $inputfilter; ?> >
          </div>
          <div class="form-group">
            <label>Aadhar Number</label>
            <input class="form-control" type="number" min="100000000000" max="999999999999" name="aadhar" value="<?php echo $aadhar; ?>" <?php echo $inputfilter; ?> >
          </div>
          <div class="form-group">
            <label>State</label>
            <select class="form-control" name="state" <?php echo $inputfilter; ?> >
              <option><?php echo $state; ?></option>
            </select>
          </div>
          <div class="form-group">
            <label>Contact No</label>
            <input class="form-control" min="6000000000" max="9999999999" type="number" name="phoneno" value="<?php echo $phoneno; ?>" <?php echo $inputfilter; ?> >
          </div>
          <div class="form-group">
            <label>Enter Password</label>
            <input class="form-control" name="pass" maxlength="9" autocomplete="off" type="password" value="<?php echo $pass; ?>" <?php echo $inputfilter; ?> >
          </div>
          <?php
          if ($inputfilter=='required') {
            echo '<button class="btn btn-primary btn-block" name="submit" value="Update" type="submit">Update Details</button>';
          } else {
            echo "<br>";
          }
          ?>

        </form>
        <br>
        <div class="text-center">
          <a class="d-block small" href="farmer-profile.php?action=edit">Anything Wrong ? Edit </a>
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
