<?php
include 'db.php';

$error="none";
$errormsg="none";

if(!isset($_SESSION['regno']))
header("Location: index.php");


if (isset($_POST['submit']) && $_POST['submit']=="Submit" ){
	$regno = mysqli_real_escape_string($mysqli, $_POST['regno']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$number = mysqli_real_escape_string($mysqli, $_POST['number']);

}


$title = "Admission | Complete Registration";

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
                        	   <b>Admission</b> Fill Details <br>
                        	   <small>Sandeepana Academy : Complete e-admission Portal.</small>
                        	</h3>
                    	</div>

						<div class="wizard-navigation">
							<ul>
                              <li><a href="#profile" data-toggle="tab">Profile</a></li>
															<li><a href="#about" data-toggle="tab">About</a></li>
															<li><a href="#course" data-toggle="tab">Course</a></li>

	                        </ul>

						</div>

                        <div class="tab-content">
                            <div class="tab-pane" id="profile">
                                <div class="row">
                                    <h4 class="info-text"> Fill Student Details </h4>

																		<?php
																			$regno = mysqli_real_escape_string($mysqli, $_SESSION['regno']);
																			$result = mysqli_query($mysqli, "SELECT * From students Where studentid=$regno");
																			if($result === FALSE) {
																			die(mysql_error());
																			}
																			while($res = mysqli_fetch_array($result))
																			{
																				echo '<div class="col-sm-5 col-sm-offset-1">';
																				echo '<div class="form-group">';
																				echo '<label>Registration No</label>';
																				echo '<input name="" type="text" class="form-control" placeholder="SNDP'.$res['studentid'].'" disabled>';
																				echo '</div>';
																				echo '</div>';
																				echo '<div class="col-sm-5 ">';
																				echo '<div class="form-group">';
																				echo '<label>Student Name</label>';
																				echo '<input name="" type="text" class="form-control" value="'.$res['name'].'" disabled>';
																				echo '</div>';
																				echo '</div>';
																				echo '<div class="col-sm-5 col-sm-offset-1">';
																				echo '<div class="form-group">';
																				echo '<label>Contact No.</label>';
																				echo '<input name="cno" type="number" min="7000000000" max="9999999999" class="form-control" placeholder="Enter Mobile No">';
																				echo '</div>';
																				echo '</div>';
																				echo '<div class="col-sm-5">';
																				echo '<div class="form-group">';
																				echo '<label>WhatsApp No.</label>';
																				echo '<input name="wno" type="number" min="7000000000" max="9999999999" class="form-control" placeholder="Enter if any">';
																				echo '</div>';
																				echo '</div>';
																				echo '<div class="col-sm-10 col-sm-offset-1">';
																				echo '<div class="form-group">';
																				echo '<label>Email</label>';
																				echo '<input name="emailid" type="email" class="form-control" value="'.$res['emailid'].'"required>';
																				echo '</div>';
																				echo '</div>';
																				echo '<div class="col-sm-5 col-sm-offset-1 ">';
																				echo '<div class="form-group">';
																				echo '<label>Date Of Birth</label>';
																				echo '<input name="dob" type="date" class="form-control" required>';
																				echo '</div>';
																				echo '</div>';
																				echo '<div class="col-sm-5 col-sm-offset-1 ">';
																				echo '<div class="form-group">';
																				echo '<label>Gender</label>';
																				echo '<select name="gender" class="form-control">';
																				echo '<option value="M" >Male</option>';
																				echo '<option value="F" >Female</option>';
																				echo '<option value="O" >Other</option>';
																				echo '</select>';
																				echo '</div>';
																				echo '</div>';

																		}
																		?>

                                </div>
                            </div>
														<div class="tab-pane" id="about">
                                <div class="row">
                                    <h4 class="info-text"> Fill Guardian Details </h4>

																		<div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Father's Name
                                                <small>(required)</small>
                                            </label>
                                            <input name="father_name" type="text" class="form-control" placeholder="Full Name" required>
                                        </div>
                                    </div>
																		<div class="col-sm-5 ">
                                        <div class="form-group">
                                            <label>Mother's Name
                                                <small>(required)</small>
                                            </label>
                                            <input name="mother_name" type="text" class="form-control" placeholder="Full Name" required>
                                        </div>
                                    </div>

																		<div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Father's Contact No
                                                <small>(required)</small>
                                            </label>
                                            <input name="father_cno" type="number" min="7000000000" max="9999999999" class="form-control" placeholder="+91XXXXXXXXXX" required>
                                        </div>
                                    </div>


																		<div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Mother's Contact No
                                                <small>(required)</small>
                                            </label>
                                            <input name="mother_cno" type="number" min="7000000000" max="9999999999" class="form-control" placeholder="+91XXXXXXXXXX" required>
                                        </div>
                                    </div>

																		<div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Father's Occupation
                                                <small>(required)</small>
                                            </label>
                                            <input name="father_ocp" type="text" class="form-control" placeholder="Enter Occupation" required>
                                        </div>
                                    </div>
																		<div class="col-sm-5 ">
                                        <div class="form-group">
                                            <label>Mother's Occupation
                                                <small>(required)</small>
                                            </label>
                                            <input name="mother_ocp" type="text" class="form-control" placeholder="Enter Occupation" required>
                                        </div>
                                    </div>

																		<div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Parent's Email Address
                                                <small>(required)</small>
                                            </label>
                                            <input name="parents_emailid" type="email" class="form-control" placeholder="Enter Email Id" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

														<div class="tab-pane" id="course">
                                <div class="row">
                                    <h4 class="info-text"> Admission Details </h4>

																		<div class="col-sm-5 col-sm-offset-1">
																				<div class="form-group">
																						<label>School Name
																								<small>(required)</small>
																						</label>
																						<input name="school" type="text" class="form-control" placeholder="Enter Name" required>
																				</div>
																		</div>
																		<div class="col-sm-5 ">
																				<div class="form-group">
																						<label>Class
																								<small>(required)</small>
																						</label>
																						<input name="" type="text" class="form-control" value=""="<?php echo $_SESSION['class']; ?>" disabled>
																				</div>
																		</div>

																		<div class="col-sm-3 col-sm-offset-1">
																				<div class="form-group">
																						<label>Course
																								<small>(required)</small>
																						</label>
																						<select name="course" class="form-control">
																						<?php
																							$class = mysqli_real_escape_string($mysqli, $_SESSION['class']);
																							$result = mysqli_query($mysqli, "SELECT * From course Where class=$class");
																							if($result === FALSE) {
																							die(mysql_error());
																							}
																							while($res = mysqli_fetch_array($result))
																							{
																								echo '<option value="'.$res['name'].'" >'.$res['name'].'</option>';


																						}
																						?>
																						</select>
																				</div>
																		</div>

																		<div class="col-sm-3 ">
																				<div class="form-group">
																						<label>Mark
																								<small>(required)</small>
																						</label>
																						<input name="mark" type="text" class="form-control" placeholder="Enter Mark" required>
																				</div>
																		</div>

																		<div class="col-sm-3 col-sm-offset-1">
																				<div class="form-group">
																						<label>Mark Type
																								<small>(required)</small>
																						</label>
																						<select name="mark_type" class="form-control">
																						<option value="%" >%</option>';
																						<option value="Grade" >Grade</option>';
																						<option value="CGPA">CGPA</option>';
																						</select>
																				</div>
																		</div>

																		<h4 class="info-text"> Choose Subject & Timing </h4>


																		<?php

																			$class = mysqli_real_escape_string($mysqli, $_SESSION['class']);
																			$result = mysqli_query($mysqli, "SELECT * From subjects Where class=$class");

																			if($result === FALSE) {
																			die(mysql_error());
																			}
																			while($res = mysqli_fetch_array($result))
																			{
																			echo '<div class="col-sm-4">';
																			echo '<div class="form-group">';
																			echo '<label>'.$res['name'].'</label>';
																			$sub = mysqli_real_escape_string($mysqli, $res['subjectcode']);
																			$sqlresult = mysqli_query($mysqli, "SELECT * From timetable Where sub=$sub");

																			echo '</div>';
																			echo '</div>';
																		}
																		?>



																	<div class="col-sm-10 col-sm-offset-1">
																		<div class="row">
																			<div class="form-group">
																					<label>Choose Batch
																						<small>(required)</small>
																					</label>
																					<select name="batch">
																						<option value="1" selected>1</option>
																						<option value="2" >2</option>
																						<option value="3" >3</option>
																					</select>
																			</div>
																		</div>
																	</div>

                                </div>
                            </div>
														<div class="tab-pane" id="fees">
                                <div class="row">
                                    <h4 class="info-text"> Fees & Accomodation </h4>

																		<div class="col-sm-5 col-sm-offset-1">
																				<div class="form-group">
																						<label>Hostel Accomodation
																							<small>(required)</small>
																						</label>
																						<select name="acmtn">
																							<option value="none" selected>None</option>
																							<option value="ac" >AC</option>
																							<option value="nonac" >Non-Ac</option>
																						</select>
																				</div>
																		</div>

                                </div>
                            </div>

                        </div>

                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='submit' value='Submit' />

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
