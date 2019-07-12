<?php
include'../../config/manager.php';
if (!isset($_SESSION['usertype']) || !($_SESSION['usertype']=='manager') ) {
   header("Location: ../");
 }



$title = "Sandeepana Academy | Manager Dashboard";

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
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="orange">
                                  <i class="material-icons">beenhere</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Registrations</p>
                                  <h3 class="title">101
                                  </h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                  Add Approve Cancel
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="green">
                                  <i class="material-icons">school</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Admissions</p>
                                  <h3 class="title">1/43</h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                      Approve Edit Remove
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="red">
                                  <i class="material-icons">&#xE84E;</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Teachers</p>
                                  <h3 class="title">12
                                  </h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                    Add Edit Remove
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="blue">
                                  <i class="material-icons">&#xE8D3;</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Staffs</p>
                                  <h3 class="title">8
                                  </h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                    Add Edit Remove
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="orange">
                                  <i class="material-icons">&#xE86D;</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Subjects</p>
                                  <h3 class="title">17

                                  </h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                    Add Edit Remove
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="green">
                                  <i class="material-icons">class</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Courses</p>
                                  <h3 class="title">3

                                  </h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                      Add Edit Remove
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="red">
                                  <i class="material-icons">&#xE8F0;</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Timetable</p>
                                  <h3 class="title">5

                                  </h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                    Add Edit Remove
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="blue">
                                  <i class="material-icons">&#xE22B;</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Exams</p>
                                  <h3 class="title">2/10

                                  </h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                    Add Edit Remove
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="orange">
                                  <i class="material-icons">&#xE227;</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Fees Pending</p>
                                  <h3 class="title">172

                                  </h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                    Pay Offline - List
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="green">
                                  <i class="material-icons">receipt</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Voucher</p>
                                  <h3 class="title">2/4
                                    <small>Paid</small>
                                  </h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                      Add Pay
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="red">
                                  <i class="material-icons">&#xE850;</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Salary Request</p>
                                  <h3 class="title">2/5
                                  </h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                      Approve Reject
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="blue">
                                  <i class="material-icons">view_list</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Bills</p>
                                  <h3 class="title">2</h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                    Add Pay
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
</div>
 </body>

  <!--   JS   -->
  <?php include'../../account-inc/js.php'; ?>
  <!--   ./JS   -->


</html>
