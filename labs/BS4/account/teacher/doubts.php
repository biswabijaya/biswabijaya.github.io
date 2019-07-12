<?php
include'../../config/teacher.php';
if (!isset($_SESSION['usertype']) || !($_SESSION['usertype']=='teacher') ) {
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
                  <div class="col-md-6">
                      <div class="card">
                          <div class="card-header" data-background-color="<?php echo $_SESSION['nav-tab-color']; ?>">
                              <h4 class="title">Physics XI Doubts</h4>
                              <p class="category"><b>Session 2018-19</b></p>
                          </div>
                          <div class="card-content table-responsive">
                              <table class="table table-hover">
                                  <tbody>
                                    <tr>
                                        <td>28-02-2018</td>
                                        <td> <p rel="tooltip" title="This is Question 1 bla bla bla" > This is Que </p> </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Click To Answer" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">edit</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28-02-2018</td>
                                        <td> <p rel="tooltip" title="This is Question 2 bla bla bla" > This is Que </p> </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Click To Answer" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">edit</i>
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
                              <h4 class="title">Physics XII Doubts</h4>
                              <p class="category"><b>Session 2018-19</b></p>
                          </div>
                          <div class="card-content table-responsive">
                              <table class="table table-hover">
                                  <tbody>
                                    <tr>
                                        <td>28-02-2018</td>
                                        <td> <p rel="tooltip" title="This is Question 1 bla bla bla" > This is Que </p> </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Click To Answer" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">edit</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28-02-2018</td>
                                        <td> <p rel="tooltip" title="This is Question 2 bla bla bla" > This is Que </p> </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Click To Answer" class="btn btn-primary btn-simple btn-xs">
                                                <i class="material-icons">edit</i>
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
