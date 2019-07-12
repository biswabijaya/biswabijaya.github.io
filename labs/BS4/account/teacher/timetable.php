<?php
include'../../config/teacher.php';
if (!isset($_SESSION['usertype']) || !($_SESSION['usertype']=='teacher') ) {
   header("Location: ../");
 }



$title = "Sandeepana Academy | Timetable";

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
                                <h4 class="title">Time Table</h4>
                                <p class="category"> Class - XII | Course - PCM | Batch - 1</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>Day</th>
                                        <th>Period 1</th>
                                        <th>Period 2</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Monday</td>
                                            <td>Physics</td>
                                            <td><strike>Chemistry</strike></td>
                                        </tr>
                                        <tr>
                                          <td>Wednesday</td>
                                          <td>Chemistry</td>
                                          <td>Math</td>
                                        </tr>
                                        <tr>
                                          <td>Friday</td>
                                          <td>Physics</td>
                                          <td>Math</td>
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
