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
                                      <td width="25%"><?php echo date("d-m-Y"); ?> </td>
                                      <td width="25%">Physics MCQ</td>
                                      <td width="50%" class="td-actions text-right">
                                          <button type="button" rel="tooltip" title="Update Question Paper" class="btn btn-success btn-simple btn-xs">
                                              <i class="material-icons">file_upload</i>
                                          </button>
                                          <div class="togglebutton"><label rel="tooltip" title="Click to reveal"><input type="checkbox" checked></label></div>
                                          <button type="button" rel="tooltip" title="Update Solution" class="btn btn-success btn-simple btn-xs">
                                              <i class="material-icons">file_upload</i>
                                          </button>
                                          <div class="togglebutton"><label rel="tooltip" title="Click to reveal"><input type="checkbox" checked></label></div>
                                          <button type="button" rel="tooltip" title="Click to Update" class="btn btn-success btn-simple btn-xs">
                                              <i class="material-icons">done</i>
                                          </button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td width="25%"><?php echo date("d-m-Y"); ?> </td>
                                      <td width="25%">Physics ST</td>
                                      <td width="50%" class="td-actions text-right">
                                          <button type="button" rel="tooltip" title="Update Question Paper" class="btn btn-success btn-simple btn-xs">
                                              <i class="material-icons">file_upload</i>
                                          </button>
                                          <div class="togglebutton"><label rel="tooltip" title="Click to reveal"><input type="checkbox" checked></label></div>
                                          <button type="button" rel="tooltip" title="Upload Solution" class="btn btn-danger btn-simple btn-xs">
                                              <i class="material-icons">file_upload</i>
                                          </button>
                                          <div class="togglebutton"><label rel="tooltip" title="Toggle Reveal"><input type="checkbox" unchecked></label></div>
                                          <button type="button" rel="tooltip" title="Click to Update" class="btn btn-success btn-simple btn-xs">
                                              <i class="material-icons">done</i>
                                          </button>
                                      </td>
                                  </tr>
                                </tbody>
                            </table>
                            <table>
                                  <tbody>
                                    <tr>
                                        <td width="40%"><input type="date" ></td>
                                        <td width="1%"> <td>
                                        <td width="13%"><input type="text" maxlength="4" size="4" placeholder="Type"> </td>
                                        <td width="1%"> <td>
                                        <td width="40%"><input type="text" maxlength="20" placeholder="Exam Name"> </td>
                                        <td width="5%" class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Click to Add" class="btn btn-success btn-simple btn-md">
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
                                        <td width="25%"><?php echo date("d-m-Y"); ?> </td>
                                        <td width="25%">Physics MCQ </td>
                                        <td width="50%" class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Update Question Paper" class="btn btn-success btn-simple btn-xs">
                                                <i class="material-icons">file_upload</i>
                                            </button>
                                            <div class="togglebutton"><label rel="tooltip" title="Toggle Reveal"><input type="checkbox" unchecked></label></div>
                                            <button type="button" rel="tooltip" title="Update Solution" class="btn btn-success btn-simple btn-xs">
                                                <i class="material-icons">file_upload</i>
                                            </button>
                                            <div class="togglebutton"><label rel="tooltip" title="Toggle Reveal"><input type="checkbox" unchecked></label></div>
                                            <button type="button" rel="tooltip" title="Click to Update" class="btn btn-success btn-simple btn-xs">
                                                <i class="material-icons">done</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25%"><?php echo date("d-m-Y"); ?> </td>
                                        <td width="25%">Physics LT </td>
                                        <td width="50%" class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Update Question Paper" class="btn btn-success btn-simple btn-xs">
                                                <i class="material-icons">file_upload</i>
                                            </button>
                                            <div class="togglebutton"><label rel="tooltip" title="Toggle Reveal"><input type="checkbox" unchecked></label></div>
                                            <button type="button" rel="tooltip" title="Upload Solution" class="btn btn-danger btn-simple btn-xs">
                                                <i class="material-icons">file_upload</i>
                                            </button>
                                            <div class="togglebutton"><label rel="tooltip" title="Toggle Reveal"><input type="checkbox" unchecked></label></div>
                                            <button type="button" rel="tooltip" title="Click to Update" class="btn btn-success btn-simple btn-xs">
                                                <i class="material-icons">done</i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table>
                                      <tbody>
                                      <tr>
                                          <td width="40%"><input type="date" ></td>
                                          <td width="1%"> <td>
                                          <td width="13%"><input type="text" maxlength="4" size="4" placeholder="Type"> </td>
                                          <td width="1%"> <td>
                                          <td width="40%"><input type="text" maxlength="20" placeholder="Exam Name"> </td>
                                          <td width="5%" class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="Click to Add" class="btn btn-success btn-simple btn-md">
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
