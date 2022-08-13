<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="<?php echo base_url('img/favicon.png'); ?>" rel="icon">
  <link href="<?php echo base_url('img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets2/bootstrap/css/bootstrap.min.css'); ?>">
  <!--external css-->
  <link href="<?php echo base_url('lib/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/zabuto_calendar.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('lib/gritter/css/jquery.gritter.css'); ?>" />
  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('style.css'); ?>">
  <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('css/style-responsive.css'); ?>" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
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
      <a href="#" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu" style="margin-top:2%">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?php echo base_url(''); ?>">Logout</a></li>
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
          <li class="mt">
            <a class="active" href="<?php echo base_url('VehiculeController/index/');?>">
              <i class="fa fa-dashboard"></i>
              <span>Inserer</span>
              </a>
          </li>
          <li>
            <a href="<?php echo base_url('VehiculeController/vehiculeDispo/');?>">
              <i class="fa fa-envelope"></i>
              <span>Vehicule dispo </span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
          <div class="col-lg-9 ds">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Type</th>
                  <th scope="col">Marque</th>
                  <th scope="col">Numero</th>
                  <th scope="col">Detail</th>
                </tr>
              </thead>
              <tbody>
              <?php if($results): ?>
                <?php for($i=0;$i<count($results);$i++){ ?>
                  <tr>
                    <th scope="row"><?php echo /*$results['typeVehicule'];*/$results[$i]['typeVehicule']; ?></th>
                    <td><?php echo /*$results['marqueVehicule'];*/$results[$i]['marqueVehicule']; ?></td>
                    <td><?php echo /*$results['numero'];*/$results[$i]['numero']; ?></td>
                    <td>
                        <form action="<?php echo base_url('HtmltoPDF/detail/');?>" method="post">
                        <button type="submit" class="btn btn-primary" name="idVehicule" value="<?php echo /*$results['id'];*/$results[$i]['id'];?>">detail</button>
                      </form>
                      <form action="<?php echo base_url('HtmltoPDF/getpdf/');?>" method="post">
                        <button type="submit" class="btn btn-primary" name="idVehicule" value="<?php echo /*$results['id'];*/$results[$i]['id'];?>">pdf</button>
                      </form>
                      <form action="<?php echo base_url('HtmltoPDF/listeKilom/');?>" method="post">
                        <button type="submit" class="btn btn-primary" name="idVehicule" value="<?php echo /*$results['id'];*/$results[$i]['id'];?>">graph</button>
                      </form>
                    </td>
                  </tr>
                <?php } ?>
                <?php endif ?>
              </tbody>
            </table>
            <?php echo($this->pagination_bootstrap->render()); ?>
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    
  </section>
  <!--footer start-->
    
    <!--footer end-->
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url('lib/jquery/jquery.min.js'); ?>"></script>

  <script src="<?php echo base_url('assets2/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script class="include" type="text/javascript" src="<?php echo base_url('lib/jquery.dcjqaccordion.2.7.js'); ?>"></script>
  <script src="<?php echo base_url('lib/jquery.scrollTo.min.js'); ?>"></script>
  <script src="<?php echo base_url('lib/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('lib/jquery.sparkline.js'); ?>"></script>
  <!--common script for all pages-->
  <script src="<?php echo base_url('lib/common-scripts.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('lib/gritter/js/jquery.gritter.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('lib/gritter-conf.js'); ?>"></script>
  <!--script for this page-->
</body>

</html>