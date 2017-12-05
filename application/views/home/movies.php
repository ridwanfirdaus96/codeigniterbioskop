<link type="text/css" rel="stylesheet" href="<?php echo base_url('custom/css/jquery-ui.css');?>"  media="screen,projection"/>

<div class="error"><?php echo validation_errors(); ?></div>
		<?php echo form_open('home/movies'); ?>
    <body class="teal lighten-2">

	<div class="container" style="margin-top:90px;">
		<div class="row">
			<div class="col s12 m6 offset-m3">
			
			
		<div class="card-panel z-depth-5">
		<h4 class="center"> FILM </h4>
	
<div class="row">
  <form class="col s12 m12">
    <div class="row">

		<div class="input-field col s12 m12">
			<i class="mdi-action-account-circle prefix"></i>	
    <select name="judul">
      <option value="<?php echo set_value('judul');?>" disabled selected></option>
      <option value="Annabelle">Annabelle</option>
      <option value="Blade Runner 2049">Blade Runner 2049</option>
			<option value="Happy Death Day">Happy Death Day</option>
			<option value="Geostorm">Geostorm</option>
		</select>
		<label for="icon_prefix">Pilih Film</label>
		</div>
			
      
			<div class="input-field col s12 m12">
        <i class="mdi-action-account-circle prefix"></i>		
				<input id="input-tanggal2" type="text" class="input-tanggal" name="tgl" value="<?php echo set_value('tgl');?>">
				<div class="error"><?php echo form_error('tgl'); ?></div>
        <label for="icon_prefix">Pilih tanggal</label>
      </div>
			</div>
			
			<div class="input-field col s12 m12">
			<i class="mdi-action-account-circle prefix"></i>	
    <select name="jam">
      <option value="<?php echo set_value('jam');?>" disabled selected></option>
	  <?php
        $query = $this->db->query("select * from film ");
        $row = $query->row();
	if (isset($row)) ?>
          <?php  echo"<option value=".$row->jam.">".$row->jam."</option>";?>		
		</select>
    <label>Pilih Jam Tayang</label>
	</div>
	
	<div class="input-field col s12 m12">
			<i class="mdi-action-account-circle prefix"></i>	
    <select name="kd_studio">
      <option value="<?php echo set_value('kd_studio');?>" disabled selected></option>
        <?php echo"<option value=".$row->kd_studio.">".$row->kd_studio."</option>";?>   
	        

			
		</select>
     
    <label>Pilih Nomor Studio</label>
	
  </div>

	<div class="input-field col s12 m12">
			<i class="mdi-action-account-circle prefix"></i>	
    <select name="nama_studio">
      <option value="<?php echo set_value('nama_studio');?>" disabled selected></option>
      <option value="starplex">Studio Starplex</option>
			
		</select>
		
    <label>Nama Studio</label>
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
<script>
	$(document).ready(function(){
		$('.input-tanggal').datepicker();		
	});
</script>


</div><!--col-->
  </div><!--row-->
	</div><!--conatiner-->
	<script src="<?php echo base_url('custom/js/jquery-ui.js');?>"></script>
	
</body>
</html>
