	<?php 

	foreach ($film as $film_item): ?>
<center>
  <img src="<?php echo base_url('/admin/assets/uploads/files/'. $film_item['gambar']);?>"/>
<p>
<a class="waves-effect waves-light btn" href="<?php echo base_url('home/ticket');?>">
Buy Ticket
</a>
</center>
<hr>
<h2><?php echo $film_item['judul'];?> </h2>
<hr>
<div>
<h5 class="left align">
  <ul>

	 <li>Genre : <?php echo $film_item['kategori'];?></li>
	</ul>
</h5>
</div>

<div>
<h5 class="center-align">

<?php echo $film_item['sinopsis'];?>
</h5>
</div>
<?php endforeach; ?>
