
<center>
  <h2>YOUR INFORMATION </h2>

  <h5 class="center align">
	  <ul>
<?php 
foreach ($pemesan as $pemesan_item): ?>
				
<li>nama pemesan : <?php echo $pemesan_item['nama_pemesan']; ?></li>
      
 <a href="<?php echo site_url('home/'.$pemesan_item['id_pemesan']); ?>"></a>

<?php endforeach; ?>


<?php 
foreach ($film as $film_item): ?>
			
<li>Judul : <?php echo $film_item['judul']; ?></li>
<li>Nama Studio : <?php echo $film_item['nama_studio']; ?></li>
<li>Tanggal Pemesan : <?php echo $film_item['tgl'];?></li>
<li>Jam Tayang : <?php echo $film_item['jam']; ?></li>
<li>Nama Studio : <?php echo $film_item['nama_studio']; ?></li>

      
        <a href="<?php echo site_url('home/'.$film_item['kd_film']); ?>"></a>

<?php endforeach; ?>





<?php $row = $query->row(10) ; ?>
<?php
if (isset($row))?>


        <h5 class="center align">
		
		  <li>baris : <?php echo $row->baris; ?> </li>
</ul>
