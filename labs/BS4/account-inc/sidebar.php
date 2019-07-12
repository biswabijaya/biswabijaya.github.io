<div class="sidebar" data-color="<?php  if (isset($_SESSION['nav-tab-color'])) echo$_SESSION['nav-tab-color']; else echo 'red';?>" data-image="https://www.biswabijaya.com/labs/BS4/account-assets/img/<?php  if (isset($_SESSION['nav-image'])) echo$_SESSION['nav-image']; else echo 'sidebar-2.jpg';?> ">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="https://www.biswabijaya.com/labs/BS4/account" class="simple-text">
            Hi! <?php  if (isset($_SESSION['username'])) echo$_SESSION['username']; else echo 'Guest';?>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
          <?php

            $path = $_SERVER['REQUEST_URI'];
            $file = basename($path);
            $ut = $_SESSION['ut'];
            $sql = mysqli_query($mysqli, "SELECT * FROM navdata WHERE usertype =$ut");
            while($res = mysqli_fetch_array($sql)) {
              echo '<li class="';
              if ($file==$res['link']) {
                echo 'active';
              }
              echo '"><a href="'.$res['link'].'">';
              echo '<i class="material-icons">'.$res['icon-name'].'</i>';
              echo '<p>'.$res['value'].'</p>';
              echo '</a>';
              echo '</li>';
            }
            ?>
        </ul>
    </div>
</div>
