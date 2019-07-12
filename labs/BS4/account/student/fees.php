<?php
include'../../config/student.php';
if (!isset($_SESSION['usertype']) || !($_SESSION['usertype']=='student') ) {
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
                                <h4 class="title">Course Fee Details </h4>
                                <p class="title"> <b>For Class XII - PCM - Batch 1 </b></p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                      <th>Type</th>
                                      <th>Fees</th>
                                      <th>Paid</th>
                                      <th>Remaining</th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Physics</td>
                                        <td>12,500</td>
                                        <td>10,000</td>
                                        <td>2,500</td>
                                      </tr>
                                      <tr>
                                        <td>Chemistry</td>
                                        <td>12,500</td>
                                        <td>10,000</td>
                                        <td>2,500</td>
                                      </tr>
                                      <tr>
                                        <td>Math</td>
                                        <td>12,500</td>
                                        <td>10,000</td>
                                        <td>2,500</td>
                                      </tr>
                                      <tr>
                                        <td>Study Material</td>
                                        <td>5,000</td>
                                        <td>5,000</td>
                                        <td>0</td>
                                      </tr>
                                      <tr>
                                        <td>Total</td>
                                        <td><b>42,500</b></td>
                                        <td><b>35,000</b></td>
                                        <td><b>7,500</b></td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom:15px;"> <center> <a href="payments.php"> <button class="btn btn-primary btn-md"> Pay Remaining </button> </a> </center></div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="<?php echo $_SESSION['nav-tab-color']; ?>">
                                <h4 class="title">Payment Details </h4>
                                <p class="title"><b> During DOJ - <?php echo date("d-m-Y"); ?></b></p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                      <th>Date</th>
                                      <th>Mode</th>
                                      <th>Transaction ID</th>
                                      <th>Amount</th>
                                    </thead>
                                    <tbody><tr>
                                      <th><b>5-02-2018</b>  </th>
                                      <td>Offline</td>
                                      <td>PP2018-11233</td>
                                      <td>42,500</td>
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
