<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<div class="slider" style="width: 1000px; height: 440px; margin-top: 100px; margin-bottom: 100px; margin-right: 150px; margin-left: 400px">
    <ul class="slides">
      <li>
        <img src="<?php echo base_url('custom/image/movie2017.jpg');?>"> 
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>	
      </li>
      <li>
        <img src="<?php echo base_url('custom/image/justice-league.jpg');?>"> 
        <div class="caption left-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="<?php echo base_url('custom/image/powerranger.jpg');?>"> 
        <div class="caption right-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
				<img src="<?php echo base_url('custom/image/augustmovie.jpg');?>">
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
    </ul>
	</div>

<center>
   <h2>================= MOVIE LIST ================</h2>
<p></p>
	 <div class="row">

	 <div class="col s12 m6 l3">
		  <a href="<?php echo base_url('home/mv01');?>">
				<img src="<?php echo base_url('uploads/geostorm.jpg'); ?>" style="width: 440px; float: left; display: block;">
      </a>
		
				
			</div>
	 <div class="col s12 m6 l3">
		 		  <a href="<?php echo base_url('home/mv02');?>">
	           <img src="<?php echo base_url('uploads/hdd-new.png'); ?>" style="width: 440px; float: left; display: block;">
          </a>
	   
   </div>
	 <div class="col s12 m6 l3">
		 		  <a href="<?php echo base_url('home/mv03');?>">
	 <img src="<?php echo base_url('uploads/annabelle-new.jpg'); ?>" style="width: 440px; float: left; display: block;">
</a>
	
			
   </div>
	 <div class="col s12 m6 l3">
		 		  <a href="<?php echo base_url('home/mv04');?>">
	 <img src="<?php echo base_url('uploads/bladerunner.jpg'); ?>" style="width: 440px; float: left; display: block;">
</a>

				 
    </div>


<script type="text/javascript">
	 $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
</script>



</body>
</html>

