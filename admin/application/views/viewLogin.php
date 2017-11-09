<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Aplikasi Database Bioskop Ver 1.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<base href="<?php echo base_url();?>"/>
    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url('assets/flatUI/css/bootstrap.css');?>" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url('assets/flatUI/css/flat-ui.css');?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url('assets/flatUI/images/illustrations/clipboard.png');?>">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/flatUI/js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">


      <div class="login">
        <div class="login-screen">
          <div class="login-icon">
            <img src="assets/flatUI/images/login/login-icon.png" alt="Welcome to Mail App" />
            <h4>LOGIN<small>DATABASE</small></h4>
          </div>

		<?php echo validation_errors(); ?>
		   <?php echo form_open('controllerVerifyLogin'); ?>

          <div class="login-form">
            <div class="control-group">
              <input type="text" class="login-field" value="" placeholder="Enter your name" id="username" name="username"/>
              <label class="login-field-icon fui-man-16" for="login-name"></label>
            </div>

            <div class="control-group">
              <input type="password" class="login-field" value="" placeholder="Password" id="login-pass" id="password" name="password"/>
              <label class="login-field-icon fui-lock-16" for="login-pass"></label>
            </div>
			
			<input class="btn btn-primary btn-large btn-block" type="submit" value="Login"/>
      
            <!--<a  href="#">Login</a>-->
            <span class="login-link">username:admin, password:admin</span>		
			</form>
          </div>
        </div>
      </div>

      

    </div> <!-- /container -->

    <!-- Load JS here for greater good =============================-->
    <script src="<?php echo base_url('admin/assets/flatUI/js/jquery-1.8.2.min.js');?>"></script>
    <script src="<?php echo base_url('admin/assets/flatUI/js/jquery-ui-1.10.0.custom.min.js');?>"></script>
    <script src="<?php echo base_url('admin/assets/flatUI/js/jquery.dropkick-1.0.0.js');?>"></script>
    <script src="<?php echo base_url('admin/assets/flatUI/js/custom_checkbox_and_radio.js');?>"></script>
    <script src="<?php echo base_url('admin/assets/flatUI/js/custom_radio.js');?>"></script>
    <script src="<?php echo base_url('admin/assets/flatUI/js/jquery.tagsinput.js');?>"></script>
    <script src="<?php echo base_url('admin/assets/flatUI/js/bootstrap-tooltip.js');?>"></script>
    <script src="<?php echo base_url('admijn/assets/flatUI/js/jquery.placeholder.js');?>"></script>
    <script src="http://vjs.zencdn.net/c/video.js"></script>
    <script src="<?php echo base_url('admin/assets/flatUI/js/application.js');?>"></script>
    <!--[if lt IE 8]>
      <script src="assets/flatUI/js/icon-font-ie7.js"></script>
      <script src="assets/flatUI/js/icon-font-ie7-24.js"></script>
    <![endif]-->
  </body>
</html>

