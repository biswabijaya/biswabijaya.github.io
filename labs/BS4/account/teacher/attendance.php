<?php
include'../../config/teacher.php';
if (!isset($_SESSION['usertype']) || !($_SESSION['usertype']=='teacher') ) {
   header("Location: ../");
 }



$title = "Sandeepana Academy | Attendance";

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
                                <h4 class="title">Attendance Details</h4>
                                <p class="title"> <b>During 5-02-2018 - <?php echo date("d-m-Y"); ?></b></p>
                            </div>
                            <div class="card-content table-responsive">
                              <table class="table">
                                  <thead class="text-primary">
                                    <th>Date</th>
                                    <th>Period 1</th>
                                    <th>Period 2</th>
                                  </thead>
                                  <tbody><tr>
                                    <th><b>25-02-2018</b></th>
                                    <td>XII - 1<button type="button" rel="tooltip" title="Attendance Taken" class="btn btn-success btn-simple btn-xs"> <i class="material-icons">done</i></button> </td>
                                    <td>XI - 1<button type="button" rel="tooltip" title="Attendance Taken" class="btn btn-success btn-simple btn-xs"> <i class="material-icons">done</i></button> </td>
                                  </tr>
                                  <tr>
                                    <th><b>26-02-2018</b></th>
                                    <td>XII - 2<button type="button" rel="tooltip" title="Attendance Taken" class="btn btn-success btn-simple btn-xs"> <i class="material-icons">done</i></button> </td>
                                    <td>XI - 2<button type="button" rel="tooltip" title="Class Cancelled" class="btn btn-danger btn-simple btn-xs"> <i class="material-icons">clear</i></button> </td>
                                  </tr>
                                  <tr>
                                    <th><b>27-02-2018</b></th>
                                    <td>XII - 1<button type="button" rel="tooltip" title="Attendance Taken" class="btn btn-success btn-simple btn-xs"> <i class="material-icons">done</i></button> </td>
                                    <td>XI - 1<button type="button" rel="tooltip" title="Class Cancelled" class="btn btn-danger btn-simple btn-xs"> <i class="material-icons">clear</i></button> </td>
                                  </tr>
                                    <tr>
                                      <th><b>28-02-2018</b></th>
                                      <td>XII - 2<button type="button" rel="tooltip" title="Attendance Taken" class="btn btn-success btn-simple btn-xs"> <i class="material-icons">done</i></button> </td>
                                      <td>XI - 2<button type="button" rel="tooltip" title="Attendance Taken" class="btn btn-success btn-simple btn-xs"> <i class="material-icons">done</i></button> </td>
                                    </tr>
                                    <tr>
                                      <th><b>01-03-2018</b></th>
                                      <td>XII - 1<button type="button" rel="tooltip" title="Attendance Not Taken" class="btn btn-info btn-simple btn-xs"> <i class="material-icons">edit</i></button> </td>
                                      <td>XI - 1 <button type="button" rel="tooltip" title="Attendance Not Taken" class="btn btn-info btn-simple btn-xs"> <i class="material-icons">edit</i></button> </td>
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
