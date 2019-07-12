<?php
include'../../config/teacher.php';
if (!isset($_SESSION['usertype']) || !($_SESSION['usertype']=='teacher') ) {
   header("Location: ../");
 }



$title = "Sandeepana Academy | Teacher Dashboard";

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
                                  <p class="category">Next Class</p>
                                  <h3 class="title">Physics
                                  </h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                    <i class="material-icons">date_range</i> Class XII Batch 1
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="green">
                                  <i class="material-icons">border_color</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Doubts</p>
                                  <h3 class="title">0/0</h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                      <i class="material-icons">date_range</i> Till <?php echo date("d-m-Y"); ?>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="red">
                                  <i class="material-icons">account_balance</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Students Enrolled</p>
                                  <h3 class="title">50</h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                      <i class="material-icons">date_range</i> Till <?php echo date("d-m-Y"); ?>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="blue">
                                  <i class="material-icons">import_contacts</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Faculty of</p>
                                  <h3 class="title">Physics</h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                      <i class="material-icons">local_offer</i> Class XI - XII - Batch - 1 & 2
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="card">
                              <div class="card-header card-chart" data-background-color="green">
                                  <div class="ct-chart" id="dailySalesChart"></div>
                              </div>
                              <div class="card-content">
                                  <h4 class="title">Exam Performance</h4>
                                  <p class="category">
                                      <span class="text-success"><i class="fa fa-long-arrow-up"></i></span> Based on Exam Marks Evaluation </p>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                      <i class="material-icons">access_time</i> updated on <?php echo date("d-m-Y"); ?>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card">
                              <div class="card-header card-chart" data-background-color="orange">
                                  <div class="ct-chart" id="emailsSubscriptionChart"></div>
                              </div>
                              <div class="card-content">
                                  <h4 class="title">Monthly Attendance</h4>
                                  <p class="category">2017-19 Batch</p>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                      <i class="material-icons">access_time</i> updated on <?php echo date("d-m-Y"); ?>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card">
                              <div class="card-header card-chart" data-background-color="red">
                                  <div class="ct-chart" id="completedTasksChart"></div>
                              </div>
                              <div class="card-content">
                                  <h4 class="title">Exam Attendance</h4>
                                  <p class="category"><span class="text-danger"><i class="fa fa-long-arrow-down"></i></span> Updated According to Various Exams Given</p>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                      <i class="material-icons">access_time</i> updated on <<?php echo date("d-m-Y"); ?>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Upcoming Exams</h4>
                                <p class="category">Updated on <?php echo date("d-m-Y"); ?></p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-warning">
                                        <th>Exam Name</th>
                                        <th>Date</th>
                                        <th>Day</th>
                                        <th>Time</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td>Physics 50 Mark</td>
                                          <td>00-00-0000</td>
                                          <td>Sunday</td>
                                          <td>10 am</td>
                                        </tr>
                                        <tr>
                                          <td>Chemistry 50 Mark</td>
                                          <td>00-00-0000</td>
                                          <td>Sunday</td>
                                          <td>10 am</td>
                                        </tr>
                                        <tr>
                                          <td>Maths 50 Mark</td>
                                          <td>00-00-0000</td>
                                          <td>Sunday</td>
                                          <td>10 am</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      <div class="col-lg-6 col-md-12">
                          <div class="card">
                              <div class="card-header" data-background-color="orange">
                                  <h4 class="title">Marks in Earlier Exams</h4>
                                  <p class="category">According to last exams till <?php echo date("d-m-Y"); ?></p>
                              </div>
                              <div class="card-content table-responsive">
                                  <table class="table table-hover">
                                      <thead class="text-warning">
                                          <th>Date</th>
                                          <th>Exam Name</th>
                                          <th>Scored</th>
                                          <th>Average </th>
                                          <th>Highest </th>
                                      </thead>
                                      <tbody>
                                          <tr>
                                            <td>00-00-0000</td>
                                            <td>Physics MCQ</td>
                                            <td class="text-success">90</td>
                                            <td>85</td>
                                            <td>95</td>
                                          </tr>
                                          <tr>
                                            <td>00-00-0000</td>
                                            <td>Chemistry MCQ</td>
                                            <td class="text-danger">80</td>
                                            <td>85</td>
                                            <td>95</td>
                                          </tr>
                                          <tr>
                                            <td>00-00-0000</td>
                                            <td>Maths MCQ</td>
                                            <td class="text-info">85</td>
                                            <td>85</td>
                                            <td>95</td>
                                          </tr>
                                      </tbody>
                                  </table>
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
