<?php
include 'db.php';

$error="none";
$errormsg="none";



if (isset($_POST['login']) && $_POST['login']=="Login" ){
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['pass']);

	$result = mysqli_query($mysqli, "SELECT * From staffs Where staffid=$id");
	if($result === FALSE) {
	die(mysql_error());
	}
	while($res = mysqli_fetch_array($result))
	{
		if ($pass == $res['pass'])
		{  $_SESSION['staffid'] = $res['staffid'];
		header("Location: add.php");
	}
		else {
			$error="Pass";
			$errormsg="Wrong Password";
		}


}
}


$title = "Admission | Login";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title> <?php echo $title; ?> </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
<div class="image-container set-full-height" style="background: linear-gradient(#e66465, #9198e5);">

	<!--  Made With Get Shit Done Kit  -->
		<a href="#" class="made-with-mk">
			<div style=" padding-left:0px;"><img src="../logo.png" style="width:30px; height:30px;" />  </div>
			<div class="made-with" style=" margin-right:2px;"><strong>Sandeepana Academy</strong></div>
		</a>

    <!--   Big container   -->
    <div class="container" style="padding-bottom:100px;">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="green" id="wizardProfile">
                    <form action="" method="post">

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>Admission</b> Login <br>
                        	   <small>Sandeepana Academy : Complete e-admisson Portal.</small>
                        	</h3>
                    	</div>

						<div class="wizard-navigation">
							<ul>
                              <li><a href="#login" data-toggle="tab">Login</a></li>
	                        </ul>

						</div>

                        <div class="tab-content">
                            <div class="tab-pane" id="login">
                                <div class="row">
                                    <h4 class="info-text"> Staff Login </h4>


                                    <div class="col-sm-8 col-sm-offset-2">
                                        <div class="form-group">
                                            <label>Staff id
                                                <small>(required)</small>
                                            </label>
                                            <input name="id" type="text" class="form-control" placeholder="Staff Id" required>
                                        </div>
                                    </div>
																		<div class="col-sm-12"></div>
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <div class="form-group">
                                            <label>Password
                                              <small><?php if($error=="Pass") echo $errormsg; else echo "(required)" ?></small>
                                            </label>
                                            <input name="pass" type="pass"class="form-control" placeholder="Password" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='login' value='Login' />

                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->

</div>

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>

</html>
