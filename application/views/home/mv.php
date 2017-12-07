
<center>
  <img src="<?php echo base_url('/admin/assets/uploads/files/'. $film_item['gambar']);?>"/>w
<p>
<a class="waves-effect waves-light btn" href="<?php echo base_url('home/ticket');?>">
Buy Ticket
</a>
</center>
<hr>
<h4><?php echo $film_item['judul'];?> </h4>
<hr>
<div>
<h5 class="left align">
  <ul>

	 <li>Genre : <?php echo $film_item['kategori'];?></li>
	 <li>Director : <?php echo $film_item['director'];?></li>
	 <li>Durasi : <?php echo $film_item['durasi'];?></li>
	 <li>Subtitle : <?php echo $film_item['subtitle'];?></li>
	</ul>
</h5>
</div>

<div>
<h5 class="center-align">

<?php echo $film_item['sinopsis'];?>
</h5>
</div>
<hr>
<h4>Schedules</h4>
<hr>
    <div class="row">
      <div class="col s1">
	   <strong>29</strong>
	    <span>Nov</span>
	   </div>
       <div class="col s1">
	   <strong>30</strong>
	    <span>Nov</span>
	   </div>
	    <div class="col s1">
	   <strong>31</strong>
	    <span>Nov</span>
	   </div>
	    <div class="col s1">
	   <strong>1</strong>
	    <span>Des</span>
	   </div>
	    <div class="col s1">
	   <strong>2</strong>
	    <span>Des</span>
	   </div>
	    <div class="col s1">
	   <strong>3</strong>
	    <span>Des</span>
	   </div>
	    <div class="col s1">
	   <strong>4</strong>
	    <span>Des</span>
	   </div>
	    <div class="col s1">
	   <strong>5</strong>
	    <span>Des</span>
	   </div>
	    <div class="col s1">
	   <strong>6</strong>
	    <span>Des</span>
	   </div>
	    <div class="col s1">
	   <strong>7</strong>
	    <span>Des</span>
	   </div>
	</div>
	<hr>
<div class="datelist">
	
		<div class="title">
	    STARPLEX
	      <span>
		    <?php echo $film_item['kategori'];?>/<?php echo $film_item['durasi'];?>/ditayang sejak tanggal <?php echo $film_item['tgl_tayang'];?>
	      </span>
	   </div>
	   <p></p>
	   <div class="row margin">
		   <div class="col s1"><?php echo $film_item['jam'];?></li>
</ul>

</div>
          

