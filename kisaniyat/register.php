<?php
include 'dbconnect.php';

$redirect="farmer-profile.php";
if (isset($_GET['redirect'])) {
  $redirect=$_GET['redirect'];
}

if (isset($_SESSION['id'])) {
  header("Location: $redirect");
}

if (isset($_POST['submit']) && $_POST['submit']=="Register" ){
  $name=$_POST['name'];
  $pass=$_POST['pass'];
  $aadhar=$_POST['aadhar'];
  $phoneno=$_POST['phoneno'];
  $state=$_POST['state'];

  if ($addfarmer = mysqli_query($mysqli, "INSERT INTO `farmer` (`name`, `pass`, `aadhar`, `state`, `phoneno`) VALUES ('$name', '$pass', '$aadhar', '$state', '$phoneno')")){
    header("Location: index.php?msg=RegistrationSuccesful");
  } else {
    header("Location: register.php?msg=RegistrationNotSuccesful");
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
  <title>Kisaniyat | Registration</title>
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
      <div class="card-header">Farmer Registration</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label>Full Name</label>
            <input class="form-control" type="text" name="name" placeholder="Enter Full Name">
          </div>
          <div class="form-group">
            <label>Aadhar Number</label>
            <input class="form-control" type="number" min="100000000000" max="999999999999" name="aadhar" placeholder="XXXX-XXXX-XXXX">
          </div>
          <div class="form-group">
            <label>State</label>
            <select class="form-control" name="state">
              <?php
              if($resul = mysqli_query($mysqli, "SELECT distinct statename From statedata group by statename"))
              while($re = mysqli_fetch_array($resul)){
                echo "<option>".$re['statename']."</option>";
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label>Contact No</label>
            <input class="form-control" min="6000000000" max="9999999999" type="number" name="phoneno" placeholder="+91 XXXXX XXXXX">
          </div>
          <div class="form-group">
            <label>Enter Password</label>
            <input class="form-control" name="pass" maxlength="9" autocomplete="off" type="password" placeholder="Within 9 Characters">
          </div>
          <button class="btn btn-primary btn-block" name="submit" value="Register" type="submit">Register</button>
        </form>
        <br>
        <div class="text-center">
          <a class="d-block small" href="index.php?redirect=<?php echo $redirect; ?>">Already Registered ? Login </a>
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
