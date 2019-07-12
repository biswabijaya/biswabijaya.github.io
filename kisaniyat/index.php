<?php
include 'dbconnect.php';

$redirect="farmer-profile.php";
if (isset($_GET['redirect'])) {
  $redirect=$_GET['redirect'];
}

if (isset($_SESSION['id'])) {
  header("Location: $redirect");
}

if (isset($_POST['submit']) && $_POST['submit']=="Login" ){
  $pass=$_POST['pass'];
  $phoneno=$_POST['phoneno'];

  $iderror=1;
  $passerror=0;

  if($result = mysqli_query($mysqli, "SELECT * From farmer where phoneno=$phoneno"))
  while($res = mysqli_fetch_array($result)){
    if ($pass==$res['pass']) {
      $_SESSION['id']=$res['id'];
      $_SESSION['usertype']="farmer";
      header("Location: $redirect");
    }
    $iderror=0;
    $passerror=1;
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
  <title>Kisaniyat | Login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <br>
  <div class="container">
    <div class="card bg-light card-login mx-auto mt-5">
      <div class="card-header">Farmer Login <?php if ($iderror) echo "| User Not Registered"; else if ($passerror) echo "| Wrong Password";  ?></div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label>Phone No.</label>
            <input class="form-control" name="phoneno" autocomplete="off" min="6000000000" max="9999999999" type="number" <?php if ($passerror) echo 'value="'.$_POST['phoneno'].'"'; else echo 'placeholder="Enter Here"';  ?> >
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" name="pass" autocomplete="off" maxlength="9" type="password" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" name="submit" value="Login" type="submit">Login</button>
        </form>
        <br>
        <div class="text-center">
          <a class="d-block small" href="register.php?redirect=<?php echo $redirect; ?>">New User ? Register</a>
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
