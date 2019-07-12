<?php
include'../../config/student.php';
if (!isset($_SESSION['usertype']) || !($_SESSION['usertype']=='student') ) {
   header("Location: ../");
 }



$title = "Sandeepana Academy | Exams";

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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header" data-background-color="green">
                                <h4 class="title">Physics</h4>
                                <p class="category"><b>During DOJ - <?php echo date("d-m-Y"); ?></b></p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table ">
                                    <tbody>
                                      <tr>
                                          <td><?php echo date("d-m-Y"); ?> </td>
                                          <td>Exam Name </td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="View Question Paper" class="btn btn-primary btn-simple btn-xs">
                                                  <i class="material-icons">attachment</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Download Solution" class="btn btn-danger btn-simple btn-xs">
                                                  <i class="material-icons">file_download</i>
                                              </button>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td><?php echo date("d-m-Y"); ?> </td>
                                          <td>Exam Name </td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="View Question Paper" class="btn btn-primary btn-simple btn-xs">
                                                  <i class="material-icons">attachment</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Download Solution" class="btn btn-danger btn-simple btn-xs">
                                                  <i class="material-icons">file_download</i>
                                              </button>
                                          </td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header" data-background-color="orange">
                                <h4 class="title">Chemistry</h4>
                                <p class="category"><b>During DOJ - <?php echo date("d-m-Y"); ?></b></p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                      <tr>
                                          <td><?php echo date("d-m-Y"); ?> </td>
                                          <td>Exam Name </td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="View Question Paper" class="btn btn-primary btn-simple btn-xs">
                                                  <i class="material-icons">attachment</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Download Solution" class="btn btn-danger btn-simple btn-xs">
                                                  <i class="material-icons">file_download</i>
                                              </button>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td><?php echo date("d-m-Y"); ?> </td>
                                          <td>Exam Name </td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="View Question Paper" class="btn btn-primary btn-simple btn-xs">
                                                  <i class="material-icons">attachment</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Download Solution" class="btn btn-danger btn-simple btn-xs">
                                                  <i class="material-icons">file_download</i>
                                              </button>
                                          </td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header" data-background-color="red">
                                <h4 class="title">Maths</h4>
                                <p class="category"><b>During DOJ - <?php echo date("d-m-Y"); ?></b></p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                      <tr>
                                          <td><?php echo date("d-m-Y"); ?> </td>
                                          <td>Exam Name </td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="View Question Paper" class="btn btn-primary btn-simple btn-xs">
                                                  <i class="material-icons">attachment</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Download Solution" class="btn btn-danger btn-simple btn-xs">
                                                  <i class="material-icons">file_download</i>
                                              </button>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td><?php echo date("d-m-Y"); ?> </td>
                                          <td>Exam Name </td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="View Question Paper" class="btn btn-primary btn-simple btn-xs">
                                                  <i class="material-icons">attachment</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Download Solution" class="btn btn-danger btn-simple btn-xs">
                                                  <i class="material-icons">file_download</i>
                                              </button>
                                          </td>
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
