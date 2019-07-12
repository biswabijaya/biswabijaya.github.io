<?php
include'../../config/teacher.php';
if (!isset($_SESSION['usertype']) || !($_SESSION['usertype']=='teacher') ) {
   header("Location: ../");
 }



$title = "Sandeepana Academy | Add Notes";

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
                          <div class="card-header" data-background-color="<?php echo $_SESSION['nav-tab-color']; ?>">
                              <h4 class="title">Physics XI</h4>
                              <p class="category"><b>Session 2018-19</b></p>
                          </div>
                          <div class="card-content table-responsive">
                              <table class="table table-hover">
                                  <tbody>
                                    <tr>
                                        <td>28-02-2018</td>
                                        <td>File Name </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Delete" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28-02-2018</td>
                                        <td>File 2</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Upload File" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">cloud_upload</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo date("d-m-Y"); ?> </td>
                                        <td><input type="text" placeholder="Add File Name"></td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Add File" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">done</i>
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
                          <div class="card-header" data-background-color="<?php echo $_SESSION['nav-tab-color']; ?>">
                              <h4 class="title">Physics XII</h4>
                              <p class="category"><b>Session 2018-19</b></p>
                          </div>
                          <div class="card-content table-responsive">
                              <table class="table table-hover">
                                  <tbody>
                                    <tr>
                                        <td>28-02-2018</td>
                                        <td>File 1 </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Delete" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28-02-2018 </td>
                                        <td>File 2</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Upload File" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">cloud_upload</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo date("d-m-Y"); ?> </td>
                                        <td><input type="text" placeholder="Add File Name"></td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Add File" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">done</i>
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
