
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="android app mods">
    <title>Android App Mods</title>
    <?php include'../src/css.php' ?>
</head>

<body class="hidden-sn mdb-skin">

    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed mdb-sidenav">
          <?php include'../src/header-left.php' ?>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>Android App Mods </p>
            </div>
          <?php include'../src/header-top.php' ?>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->

    <!--Main Layout-->
    <main>
      <div class="main-wrapper">
        <div class="container-fluid mt-5">
                 <?php include'body.php' ?>
        </div>
      </div>
    </main>
    <!--/.Main Layout-->


    <!--Footer-Navbar -->
    <nav class="navbar fixed-bottom navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
     <?php include'../src/footer.php' ?>
    </nav>
    <!-- /.Footer-Navbar -->


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <?php include'../src/js.php' ?>
</body>
</html>
