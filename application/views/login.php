<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Stallion&Associates || Login</title>
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

    <div class="container" style="padding-top: 10%">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
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

                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" id="user_email" name="user_email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" id="user_password" name="user_password" type="password" value="">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" id="btnLogin" >

                        </fieldset>
                    </form>
                <center><b>Not registered ?</b> <br></b><a href="<?php echo base_url('user/register_view'); ?>">Register here</a></center><!--for centered text-->

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
