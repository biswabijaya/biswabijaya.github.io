<?php
include 'db.php';

$error="false";
$result=FALSE;
$errormsg="success";

if (!isset($_SESSION['staffid']))
{header("Location: login.php");}

if (isset($_POST['add']) && $_POST['add']=="Add" ){
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$class = mysqli_real_escape_string($mysqli, $_POST['class']);


	$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0";
 	$numbers = "123456789";
    for ($i = 0; $i < 4; $i++) {
        $n = rand(0, strlen($alphabet)-1);
        $arr[$i] = $alphabet[$n];
    }

    for ($i = 4; $i < 8; $i++) {
        $n = rand(0, strlen($numbers)-1);
        $arr[$i] = $numbers[$n];
    }

    $pass = implode($arr);
    $passhash = password_hash($pass, PASSWORD_DEFAULT);


  $found = mysqli_query($mysqli, "SELECT * From students Where email=$email");
	if (!$found) {
			$result = mysqli_query($mysqli, "INSERT INTO students (name,emailid,pass,class) VALUES('$name','$email','$passhash','$class')");
	}


	if($result === FALSE) {
		$error="true";
		$errormsg="add unsuccessful";
	}
	else {

				$mailto = $email;
				$mailSub = "Sandeepana Registration Details";

				$mailMsg = "Welcome to Sandeepana Family <br> Registration Success  ";
				$mailMsg .=" <br> Email id : ".$email."";
				$mailMsg .= "<br> Password : ".$pass."";
				$mailMsg .="<br> <a href='https://tiny.cc/sndp'> Click Here to login & Complete Registration ";

				require 'PHPMailer-master/PHPMailerAutoload.php';
				$mail = new PHPMailer();
				$mail ->IsSmtp();
				$mail ->SMTPDebug = 0;
				$mail ->SMTPAuth = true;
				$mail->SMTPOptions = array(
        	'ssl' => array(
        	'verify_peer' => false,
        	'verify_peer_name' => false,
        	'allow_self_signed' => true
        	)
    		);
				$mail ->SMTPSecure = 'tls';
				$mail ->Host = "mail.biswabijaya.com";
				$mail ->Port = 587;
				$mail ->IsHTML(true);
				$mail ->Username = "me@biswabijaya.com";
				$mail ->Password = "Biswa@1999";
				$mail ->SetFrom("me@biswabijaya.com","Biswabijaya Samal");
				$mail ->Subject = $mailSub;
				$mail ->Body = $mailMsg;
				$mail ->AddAddress($mailto);

if($mail->Send())
{
	$error="true";
	$errormsg="add successful & Passsword mailed";

}
else
{
	$error="true";
	$errormsg="add successful but mail not sent";

}

	}


}


$title = "Admission | Add Student";

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
                        	   <b>Add</b> A Student <br>
                        	   <small>Sandeepana Academy : Complete e-admisson Portal.</small>
                        	</h3>
                    	</div>

						<div class="wizard-navigation">
							<ul>
                              <li><a href="#login" data-toggle="tab"><?php if($error=="true") echo $errormsg; else echo "Add Student" ?></a></li>
	                        </ul>

						</div>

                        <div class="tab-content">
                            <div class="tab-pane" id="login">
                                <div class="row">
                                    <h4 class="info-text"> Enter Student Registration Details </h4>

                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Student Name <small>(required)</small></label>
                                            <input name="name" type="text" class="form-control" placeholder="Student Name" required>
                                        </div>
                                    </div>



                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Class
                                                <small>(required)</small>
                                            </label>
																						<select class="form-control" name="class">
																							<?php
																								$result = mysqli_query($mysqli, "SELECT * From class");
																								if($result === FALSE) {
    																						die(mysql_error());
																								}
																								while($res = mysqli_fetch_array($result))
																								{
                                                echo '<option value="'.$res['id'].'">'.$res['name'].'</option>';
																							}
																							?>
																						</select>
                                        </div>
                                    </div>


																		<div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Email
                                                <small>(required)</small>
                                            </label>
                                            <input name="email" type="email" class="form-control" placeholder="name@email.com" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='add' value='Add' />

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
