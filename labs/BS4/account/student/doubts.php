<?php
include'../../config/student.php';
if (!isset($_SESSION['usertype']) || !($_SESSION['usertype']=='student') ) {
   header("Location: ../");
 }



$title = "Sandeepana Academy | Doubts";

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
                                <p class="title"> <b>During DOJ - <?php echo date("d-m-Y"); ?></b></p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                      <th>Subject</th>
                                      <th>Total</th>
                                      <th>Present</th>
                                      <th>Absent</th>
                                      <th>(%)</th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Physics</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>100</td>
                                      </tr>
                                      <tr>
                                        <td>Chemistry</td>
                                        <td>8</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>50</td>
                                      </tr>
                                      <tr>
                                        <td>Math</td>
                                        <td>4</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>75</td>
                                      </tr>
                                      <tr>
                                        <td><b>Total</b></td>
                                        <td><b>22</b></td>
                                        <td><b>17</b></td>
                                        <td><b>5</b></td>
                                        <td><b>77.27</b></td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="<?php echo $_SESSION['nav-tab-color']; ?>">
                                <h4 class="title">Attendance Details (Hour Wise)</h4>
                                <p class="title"><b> During DOJ - <?php echo date("d-m-Y"); ?></b></p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                      <th>Date</th>
                                      <th>Period 1</th>
                                      <th>Period 2</th>
                                    </thead>
                                    <tbody><tr>
                                      <th><b>5-02-2018</b></th>
                                      <td>Physics<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
                                      <td>Chemistry<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
                                    </tr>
                                    <tr>
                                      <th><b>7-02-2018</b></th>
                                      <td>Chemistry<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
                                      <td><strike>Math</strike></td>
                                    </tr>
                                    <tr>
                                      <th><b>9-02-2018</b></th>
                                      <td>Physics<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
                                      <td><strike>Math</strike></td>
                                    </tr>
                                      <tr>
                                        <th><b>12-02-2018</b></th>
                                        <td>Physics<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
                                        <td>Chemistry<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
                                      </tr>
                                      <tr>
                                        <th><b>14-02-2018</b></th>
                                        <td>Chemistry<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
                                        <td>Math<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-danger">clear</i></button></td>
                                      </tr>
                                      <tr>
                                        <th><b>16-02-2018</b></th>
                                        <td>Physics<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
                                        <td>Math<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
                                      </tr>
                                        <tr>
                                          <th><b>19-02-2018</b></th>
                                          <td>Physics<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
                                          <td>Chemistry<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
                                        </tr>
                                        <tr>
                                          <th><b>21-02-2018</b></th>
                                          <td>Chemistry<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
                                          <td>Math<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
                                        </tr>
                                        <tr>
                                          <th><b>23-02-2018</b></th>
                                          <td>Physics<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
                                          <td>Math<button type="button" class="btn btn-primary btn-simple btn-xs"><i class="material-icons text-success">check</i></button></td>
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
