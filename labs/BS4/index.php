<?php
include'config/db.php';

$title = "Sandeepana Academy | Home";

?>


<!DOCTYPE html>
<html lang="en">
<!--   HEAD   -->
<head>
    <title> <?php echo $title; ?> </title>
    <?php include'inc/head.php' ?>
    <meta name="title" content="Sandeepana Academy : Best CBSE Coaching Institute in Bhubaneswar ">
    <meta name="keyword" content="Sandeepana, Sandeepana Academy, CBSE Coaching, CBSE Coaching Institute in bhubaneswar, Best CBSE Coaching Institute in bhubaneswar  ">
    <meta name="description" content=" A gate way to explore more, Smart Campus with transport facility.">
    <!--   CSS   -->
    <?php include'inc/css.php' ?>
    <!--   ./CSS   -->
</head>
<!--   ./HEAD   -->

<!--   BODY   -->
<body class="index-page ">
  <!--   Navbar   -->
    <?php include'inc/navbar.php' ?>
  <!--   ./Navbar   -->
    <!--   Body Content   -->
    <div class="page-header header-filter " data-parallax="true" style=" height: 500px; background-image: url('assets/img/kit/bg2.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="brand">
                        <h2>Sandeepana Academy</h2>
                        <h3>A Gateway to Explore More.</h3>
                        <h4>One of the best coaching institute in Bhubaneswar Providing CBSE Coaching. </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="section section-basic">
            <div class="container">
                <div class="title">
                    <h2>Basic Elements</h2>
                </div>
                <!--  buttons -->
            </div>
        </div>
        <!--   Registration ALert   -->
        <div class="alert alert-success">
            <div class="container">
                <div class="alert-icon">
                    <i class="material-icons">check</i>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                </button>
                <b>Registration:</b> Current Session Registrations are ongoing
            </div>
        </div>
        <!--  ./Registration ALert   -->
        <div class="section section-basic">
            <div class="container">
                <div class="title">
                    <h2>Basic Elements</h2>
                </div>
                <!--  buttons -->
            </div>
        </div>
    </div>
    <!--   ./Body content   -->

    <!--   Footer   -->
    <?php include'inc/footer.php' ?>
    <!--   ./Footer   -->

    <!--   JS   -->
    <?php include'inc/js.php' ?>
    <!--   ./JS   -->

</body>
<!--   ./BODY   -->
</html>
