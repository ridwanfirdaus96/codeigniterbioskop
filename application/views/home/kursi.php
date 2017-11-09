
<div class="error"><?php echo validation_errors(); ?></div>
		<?php echo form_open('home/kursi'); ?>
    <body class="teal lighten-2">

	<div class="container" style="margin-top:90px;">
		<div class="row">
			<div class="col s12 m6 offset-m3">
			
			
		<div class="card-panel z-depth-5">
		<h4 class="center"> Silahkan Pilih kursi</h4>
	
<div class="row">
  <form class="col s12 m12">
    <div class="row">


      <div class="input-field col s12 m12">
        <i class="mdi-action-account-circle prefix"></i>	
		<select name="baris">
      <option value="<?php echo set_value('baris');?>" disabled selected>Choose your option</option>
      <?php echo kursi1();?>
    </select>
    <label>	Pilih Kursi</label>
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
   
  <?php
//functions to loop day,month,year
function kursi1(){
    for($i=1; $i<=10; $i++){
        $selected = ($i==date('n'))? ' selected' :'';
        echo '<option'.$selected.' value="'.$i.'">'.$i.'</option>'."\n";
    }
}
?>


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
        
