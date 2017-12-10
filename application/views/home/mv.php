
<center>
  <img src="<?php echo base_url('/admin/assets/uploads/files/'. $film_item['gambar']);?>"/>
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

	 <li>Genre : <?php echo $film_item['jenis_k'];?></li>
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
 <?php
	    // atur timezone
	   date_default_timezone_set('UTC');
	   // tanggal tayang
	   $tgltayang =  $film_item['tgl_tayang'];
	   // tanggal berakhir
	   $tglberes =  $film_item['tgl_berakhir'];
	   ?>
    <div class="row">
      <div class="col s1">
	   <?php
	   $query = $this->db->query("select *  FROM jadwal");
	 

       while (strtotime($tgltayang) <= strtotime($tglberes)) 
	      foreach ($query->result() as $row) :?>
	      <strong>
		  <?php echo "$tgltayang";?>
		  </strong>	     
	  </div>
	  <div class="col s1">
	  		  <?php $tgltayang = date ("d-m-Y", strtotime("+1 day", strtotime($tgltayang)));?>
			  <?php endforeach;?>
	  </div>
     
	</div>
	<hr>
<div class="datelist">
	
		<div class="title">
	    STARPLEX
	      <span>
		    <?php echo $film_item['jenis_k'];?>/<?php echo $film_item['durasi'];?>/ditayang sejak tanggal <?php echo $film_item['tgl_tayang'];?>
	      </span>
	   </div>
	   <p></p>
	   <div class="row margin">
		   <div class="col s1"><?php echo $film_item['jam_tayang'];?></li>
</ul>

</div>
