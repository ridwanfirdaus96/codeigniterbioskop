<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<div class="slider" style="width: 1000px; height: 440px; margin-top: 100px; margin-bottom: 100px; margin-right: 150px; margin-left: 300px">
    <ul class="slides">
      <li>
        <img src="<?php echo base_url('custom/image/bladerunner2049.jpg');?>"> 
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>	
      </li>
      <li>
        <img src="<?php echo base_url('custom/image/hdd-new1.png');?>"> 
        <div class="caption left-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="<?php echo base_url('custom/image/annabelle-new1.jpg');?>"> 
        <div class="caption right-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
				<img src="<?php echo base_url('custom/image/geostorm1.jpg');?>">
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
    </ul>
	</div>

<center>
   <hr class="style2">Movie List</hr>
	 <hr class="style2"></hr>
<p></p>
	 <div class="row">
	<?php 
	foreach ($filmkategori as $film_item):?>

	 <div class="col s12 m6 l3">

		 <a href="<?php echo site_url('home/mv/'.$film_item['judul']);?>">
				<img src="<?php echo base_url('/admin/assets/uploads/files/'. $film_item['gambar']);?>" style="width: 350px; float: left; display: block;">
      </a>
		
				
		</div>

<?php endforeach; ?>



<script type="text/javascript">
	 $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
</script>



</body>
</html>

