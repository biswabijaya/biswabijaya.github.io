<?php
include'../../config/teacher.php';
if (!isset($_SESSION['usertype']) || !($_SESSION['usertype']=='teacher') ) {
   header("Location: ../");
 }

$title = "Sandeepana Academy | Fees";

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
                                <h4 class="title">Salary Overview </h4>
                                <p class="title"> <b>Details for 2018-19</b></p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                      <th>Date</th>
                                      <th>Fees</th>
                                      <th>Paid</th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>01-01-2018</td>
                                        <td>6,00,000</td>
                                        <td>50,000</td>
                                      </tr>
                                      <tr>
                                        <td>01-02-2018</td>
                                        <td>5,50,000</td>
                                        <td>1,00,000</td>
                                      </tr>
                                      <tr>
                                        <td>01-03-2018</td>
                                        <td>4,50,000</td>
                                        <td>50,000</td>
                                      </tr>
                                      <tr>
                                        <td>Balance</td>
                                        <td><b>4,00,000</b></td>
                                        <td><input type="number" min="0" max="400000" placeholder="Enter Amount"></td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom:15px;"> <center> <a href="requestpay.php"> <button class="btn btn-success btn-md"> Request A Payment </button> </a> </center></div>
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
