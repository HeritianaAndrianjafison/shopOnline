<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assetBack/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url(); ?>assetBack/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url(); ?>assetBack/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assetBack/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url(); ?>assetBack/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="<?php echo base_url(); ?>assetBack/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="<?php echo base_url(); ?>assetBack/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="<?php echo base_url(); ?>assetBack/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="<?php echo base_url(); ?>assetBack/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="<?php echo base_url(); ?>assetBack/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="index.html" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.html" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                    <li>
                        <a href="basic-table.html" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Basic Table</a>
                    </li>
                    <li>
                        <a href="fontawesome.html" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Icons</a>
                    </li>
                    <li>
                        <a href="map-google.html" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Google Map</a>
                    </li>
                    <li>
                        <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Blank Page</a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Error 404</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Insertion de produit</h4> </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="post" action="<?= base_url()?>backOffice/add"  enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-12">Nom</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="nom">  </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Prix</label>
                                    <div class="col-md-12">
                                        <input type="number" class="form-control form-control-line" name="prix" id="example-email"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Quantité</label>
                                    <div class="col-md-12">
                                        <input type="number" class="form-control form-control-line" name="qte" id="example-email"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Unité</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="unite">  </div>
                                </div>

                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Categorie</label>
                                    <div class="col-md-12">
                                        <input type="number" class="form-control form-control-line" name="categorie" id="example-email"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Image</label>
                                    <div class="col-md-12">
                                        <input type="file" class="form-control form-control-line" name="profile_img" id="example-email"> 
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="submit" name="ok" value="inserer"  class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                  <div class="album py-5 bg-light"></div>
            </div>
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Insertion de recette</h4> </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="post" action="<?= base_url() ?>backOffice/addRecette"  enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-12">Recette</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="recette" required>  </div>
                                </div>
                                <div class="form-group hidden">
                                    <label for="example-email" class="col-md-12">Prix</label>
                                    <div class="col-md-12">
                                        <input type="number" class="form-control form-control-line" name="prix" id="example-email"> 
                                    </div>
                                </div>
                                <div class="form-group hidden">
                                    <label for="example-email" class="col-md-12">Image</label>
                                    <div class="col-md-12">
                                        <input type="file" class="form-control form-control-line" name="profile_img" id="example-email"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cars">Ingredients</label>
                                      <?php 
                                        echo '<div class="form-check">';
                                        foreach ($allProduit->result() as $row)
                                            {
                                                    echo '
                                                      <input class="form-check-input flexCheckDefault'.$row->id.'" type="checkbox" name="ingredient[]" value="'.$row->id.'" id="flexCheckDefault'.$row->id.'" onclick="flexCheckDefaultClic('.$row->id.')">
                                                      <label class="form-check-label" for="'.$row->nom.'">
                                                        '.$row->nom.'
                                                      </label><div class="ingredient-input-'.$row->id.'"></div><br>
                                                    ';
                                            } 
                                        echo '</div>';
                                    ?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="submit" name="ok" value="inserer"  class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                  <div class="album py-5 bg-light"></div>
            </div>
        <div class="container-fluid">
          <div class="row">
            <h1>Demande Rechargment</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">idUser</th>
                    <th scope="col">Montant</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                            foreach ($resultat->result() as $row)
                                {
                                        echo '
                                            <tr>
                                              <td>'.$row->id.'</td>
                                              <td>'.$row->idUser.'</td>
                                              <td>'.$row->argent.'</td>
                                              <td><a href="'.base_url().'backOffice/validerDemande/'.$row->id.'">Valider</a></td>
                                            </tr>
                                        ';
                                } 
                        ?>
                </tbody>
              </table>
          </div>
        </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
<?php

    $simple = 'demo text string';

    $complexArray = array('demo', 'text', array('foo', 'bar'));

?>
    <!-- /#wrapper -->
    <!-- jQuery -->
<script src="<?php echo base_url(); ?>assetBack/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assetBack/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assetBack/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url(); ?>assetBack/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assetBack/js/waves.js"></script>
    <!--Counter js -->
    <script src="<?php echo base_url(); ?>assetBack/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="plugins/bower_components/counterup/jquery.counterup.min.js"></script><?php echo base_url(); ?>assetBack/
    <!-- chartist chart -->
    <script src="<?php echo base_url(); ?>assetBack/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url(); ?>assetBack/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assetBack/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assetBack/js/dashboard1.js"></script>
    <script src="<?php echo base_url(); ?>assetBack/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script type="text/javascript">
        // $(".flexCheckDefault").each(function(){
            function flexCheckDefaultClic(id,prix){
                if($('.flexCheckDefault'+id).is(":checked")){
                    $('.ingredient-input-'+id).append('<input type="number" name="qte[]" class="" required /><br />');
                    $('.ingredient-input-'+id).append('<input type="text" name="qte2[]" class="" required /><br />');
                } else {
                    $('.ingredient-input-'+id).html('');
                }
            }
            
        // });
    </script>
</html>
