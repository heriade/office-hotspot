<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Stallion&Associates || Registration</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/PgwModal/pgwmodal.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/impromptu/jquery-impromptu.css">
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
  <div class="container" style="padding-top: 6%"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Registration Page</h3>
                  </div>
                  <div class="panel-body">

                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>

                      <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Name" name="user_name" id="uname" type="text" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="E-mail" name="user_email" id="uemail" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Password" name="user_password" id="upass" type="password">
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Confirm Password" id="ucpass" type="password">
                              </div>

                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" id="btnregister" name="register" >

                          </fieldset>
                      </form>
                      <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>">Login here</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>

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

</html>
