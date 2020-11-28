<?php include '../Auth_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Lavish shop</title>

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="../lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="../https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="lib/chart-master/Chart.js"></script>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="../dashboard.php" class="logo"><b>LAVISH<span>SHOP</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <h5 class="centered">LOG-in Name</h5>
          <li class="mt">
            <a href="../dashboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sub-menu">
            <a class="active" href="../javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Admin User</span>
            </a>
            <ul class="sub">
              <li><a href="../Admin/Create.php">Add User</a></li>
              <li><a href="../Admin/View.php">View All User</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="../javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Store User</span>
            </a>
            <ul class="sub">
              <li><a href="../Users/View.php">View User</a></li>
              <li><a href="../Users/Blocked_View.php">Blocked User</a></li>
              <li><a href="../#">User Ordered</a></li>
              <li><a href="../#">Order Delivered</a></li>
              <li><a href="../#">Order To Be Deliver</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="../javascript:;">
              <i class="fa fa-book"></i>
              <span>Store</span>
            </a>
            <ul class="sub">
              <li><a href="../Categories/View.php">Categories</a></li>
              <li><a href="../Products">Products</a></li>
              <li><a href="../Categories/Hidden_View.php">Hidden Categories</a></li>
              <li><a href="../Products/Hidden_View.php">Hidden Products</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="../javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Income</span>
            </a>
            <ul class="sub">
              <li><a href="../#">Report</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="../javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Contact</span>
            </a>
            <ul class="sub">
              <li><a href="../#">Delivery</a></li>
              <li><a href="../#">Factory</a></li>
              <li><a href="../#">Clients</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
  </section>