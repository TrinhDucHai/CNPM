<!--Trinh Duc Hai-->
<?php
ob_start();
?>
<?php 
 include "head.php";
?>
<?php
 require "loginAdmin.php";
      if(!isset($_SESSION['tendangnhap'] )) 
       {
           header("Location:login.php");  
       }

?>
<header class="main-header" >
        <!-- Logo -->
        <a href="index.php" class="logo" style="background-color: black" >
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini "><b>61TH3 Nhóm 3</b>S</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg" style="color: #f3906c !important"><b>61TH3 Nhóm 3</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" style="background-color: black" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../images/logo.png" class="user-image" alt="User Image">
                  <span class="hidden-xs" style="color: white">Tài khoản</span>
                </a>
                <ul class="dropdown-menu">

                  <li class="user-footer">
                      <a href="logout.php" class="btn btn-default btn-flat">Đăng xuất</a>
                  </li>
                </ul>
              </li>

              
            </ul>
          </div>
        </nav>
      </header>
      <?php ob_end_flush(); ?>