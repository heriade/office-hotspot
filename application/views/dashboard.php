<?php

  $sess=$this->session->userdata('user_name');

  if($sess==null){
    redirect('user/login_view');
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Stallion&Associates || Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/PgwModal/pgwmodal.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/impromptu/jquery-impromptu.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="hold-transition login-page">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="">&nbsp;<?php echo 'Stallion & Associates' ?> <span style="font-size:12px;font-style:italic;"><?php echo 'HotSpot' ?></span></a>
          </div>
      </div>
  </nav>

    <div class="wrapper">
      <!-- Sidebar Holder -->
      <nav id="sidebar">
          <div class="sidebar-header">
              <img src="<?php echo base_url(); ?>assets/img/avatar.png" alt="<?php echo $this->session->userdata('user_name'); ?>" class="img-circle" width="50" height="50" />  <span>Welcome <?php echo $this->session->userdata('user_name'); ?></span>

          </div>

          <ul class="list-unstyled components">
              <h4><i class="fa fa-bank"></i> Side Menu</h4>
              <hr>
              <li class="active">
                  <i class="fa fa-users"></i> User Mngt
                  <ul>
                      <li id="chgpassli"><a href="#">Change Password</a></li>
                  </ul>
              </li>
              <li id="upd">
                 <a href="#">Upload File</a>
              </li>
              <li>
                 <a href="#">Download File</a>
              </li>
              <li>
                  <a href="#">Contact</a>
              </li>
          </ul>

      </nav>

      <!-- Page Content Holder -->
      <div id="content" style="width: 100%">

          <nav>
              <div class="container-fluid">

                  <div class="navbar-header">
                      <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                          <i class="glyphicon glyphicon-align-left"></i>
                          <span>Toggle Sidebar</span>
                      </button>
                  </div>

              </div>
          </nav>

          <div>
              <h3>
                  Stallion & Associates<em style="font-size: 12px">(Hotspot) </em> DashBoard
              </h3>
              <ol class="breadcrumb">
                  <li><a href=""><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                  <li>
                      <div class="fb-like" data-href="https://www.facebook.com/candycrushsaga" data-width="200" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                  </li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              </ol>
          </div>

          <div>
            <?php 
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

              if($success_msg){
                ?>
                <div class="alert alert-success">
                  <?php echo $success_msg; ?>
                </div>
              <?php
              }
              if($error_msg){
                ?>
                <div class="alert alert-danger">
                  <?php echo $error_msg; ?>
                </div>
                <?php
              }
            ?>
          </div>

          <div id="main_content">

          </div>
     </div>
  </div>

  <footer>
      <p>&copy; <?php echo date('Y') ?> by Stallion & Associates <?php echo 'All rights reserved.' ?></p>
  </footer>

  </body>
  <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.form.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/respond.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/html5shiv.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/PgwModal/pgwmodal.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/impromptu/jquery-impromptu.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/main.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/menu.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/btn.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
  </script>
</html>