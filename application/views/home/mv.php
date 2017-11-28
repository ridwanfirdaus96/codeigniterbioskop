	<?php 
$query = $this->db->query("select * from film");
$row = $query->row(0, 'home_model');
	if (isset($row)) ?>
<center>
  <img src="<?php echo base_url('/admin/assets/uploads/files/'. $row->gambar);?>"/>w
<p>
<a class="waves-effect waves-light btn" href="<?php echo base_url('home/ticket');?>">
Buy Ticket
</a>
</center>
<hr>
<h4><?php echo $row->judul;?> </h3>
<hr>
<div>
<h5 class="left align">
  <ul>

	 <li>Genre : <?php echo $row->kategori;?></li>
	 <li>Director : <?php echo $row->director;?></li>
	 <li>Durasi : <?php echo $row->durasi;?></li>
	 <li>Rating : <?php echo $row->rating;?></li>
	 <li>Subtitle : <?php echo $row->subtitle;?></li>
	</ul>
</h5>
</div>

<div>
<h5 class="center-align">

<?php echo $row->sinopsis;?>
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
	<ul>
		<li> 
		<div class="title">
	    "Blade Runner"
	    <span>
		ready
	   </span>
</ul>
</div>
          

