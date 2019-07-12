<?php
include'../../config/student.php';
if (!isset($_SESSION['usertype']) || !($_SESSION['usertype']=='student') ) {
   header("Location: ../");
 }



$title = "Sandeepana Academy | Profile";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> <?php echo $title; ?> </title>
    <?php include'../../account-inc/head.php'; ?>
    <!--   CSS   -->
    <?php include'../../account-inc/css.php'; ?>
    <!--   ./CSS   -->
</head>

<body>
  <div class="wrapper">
      <?php include'../../account-inc/sidebar.php'; ?>
      <div class="main-panel">
          <?php include'../../account-inc/navbar.php'; ?>
          <div class="content">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="card">
                              <div class="card-header" data-background-color="<?php echo $_SESSION['nav-tab-color']; ?>">
                                  <h4 class="title">Edit Profile</h4>
                                  <p class="category">Complete your profile</p>
                              </div>
                              <div class="card-content">
                                  <form>
                                      <div class="row">
                                          <div class="col-md-5">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">SNDP 18000</label>
                                                  <input type="text" class="form-control" disabled>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Full Name</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Email address</label>
                                                  <input type="email" class="form-control">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Class</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Course</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Batch</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Date of Join</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Date of Birth </label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Gender</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Father's Name</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Mother's Name</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Self Contact No</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Father's Contact No</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Mother's Contact No</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">ResidentialAddress</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">School</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">City</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Postal Code</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                          </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary pull-right">Request Update Profile</button>
                                      <div class="clearfix"></div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--   Footer   -->
          <?php include'../../account-inc/footer.php'; ?>
          <!--   ./Footer   -->
      </div>
  </div>
 </body>

  <!--   JS   -->
  <?php include'../../account-inc/js.php'; ?>
  <!--   ./JS   -->


</html>
