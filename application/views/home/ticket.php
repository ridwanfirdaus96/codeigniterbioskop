
<div class="error"><?php echo validation_errors(); ?></div>
		<?php echo form_open('home/ticket'); ?>
    <body class="teal lighten-2">

	<div class="container" style="margin-top:90px;">
		<div class="row">
			<div class="col s12 m6 offset-m3">
			
			
		<div class="card-panel z-depth-5">
		<h4 class="center"> Data Diri</h4>
	
<div class="row">
  <form class="col s12 m12">
    <div class="row">
      <div class="input-field col s12 m12">
        <i class="mdi-action-account-circle prefix"></i>
				
				<input id="icon_prefix" type="text" class="validate" name="nama_pemesan" value="<?php echo set_value('nama_pemesan');?>">
				<div class="error"><?php echo form_error('nama_pemesan'); ?></div>
        <label for="icon_prefix">Nama Lengkap</label>
      </div>
      
      <div class="input-field col s12 m12">
			<i class="mdi-action-account-circle prefix"></i>
				<input id="icon_prefix" type="text" class="validate" name="alamat" value="<?php echo set_value('alamat');?>">
				<?php echo form_error('alamat'); ?>
        <label for="icon_prefix">Alamat</label>
			</div>
			
			<div class="input-field col s12 m12">
			<i class="mdi-action-account-circle prefix"></i>
				<input id="icon_prefix" type="text" class="validate" name="no_telp" value="<?php echo set_value('no_telp');?>">
				<?php echo form_error('no_telp'); ?>
        <label for="icon_prefix">No.Telepon</label>
			</div>

			<div class="input-field col s12 m12">
        <i class="mdi-communication-email prefix"></i>
				<input id="icon_email" type="email" class="validate" name="email" value="<?php echo set_value('email');?>">
				<?php echo form_error('email'); ?>
        <label for="icon_email">Email</label>
			</div>
      
			<label for="genter_select">Gender *</label>
        <p>
					<input type="radio" id="gender_male" name="jenis_kelamin" value="L" <?php echo  set_radio('jenis_kelamin', 'L', TRUE); ?> data-error=".errorTxt8"/>
					<?php echo form_error('jenis_kelamin'); ?>
           <label for="gender_male">Male</label>
        </p>
        <p>
					<input type="radio" id="gender_female" name="jenis_kelamin" value="P" <?php echo  set_radio('jenis_kelamin', 'P', TRUE); ?> />
					<?php echo form_error('jenis_kelamin'); ?>
           <label for="gender_female">Female</label>
        </p>
          <div class="input-field">
            <div class="errorTxt8"></div>
          </div>
</div>
			<!--<div class="col s12">
          <label for="tnc_select">T&C *</label>
            <p>
              <input type="checkbox" class="checkbox" id="cagree" name="cagree" data-error=".errorTxt9" /> 
              <label for="cagree">Please agree to our policy</label>
            </p>
              <div class="input-field">
                <div class="errorTxt6"></div>
                </div>
      </div>-->
			</div><!--row-->
 <button class="btn waves-effect waves-light center" type="submit" name="submit" value="pemesan" />Next
    <i class="fa fa-sign-in right"></i>
  </button>
</div><!--card-->
    </div>
  </form>
   



</div><!--col-->
  </div><!--row-->
	</div><!--conatiner-->
	
	
			 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-60673008-2', 'auto');
  ga('send', 'pageview');
</script>
	    
	    
	    
    </body>
  </html>
        
