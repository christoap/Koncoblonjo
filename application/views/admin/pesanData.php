{
  "aaData": [
    <?php  $in_cart = array(); $i=1; $total = count($pesan);  foreach($pesan as $row) : ?>
		{
		  "nama": "<?php  echo $row->Nama; ?>",
		  "email": "<?php  echo $row->EMail; ?>",
		  "hp": "<?php echo $row->NO_HP?>",
		  "pesan": "<?php echo $row->pesan?>",
		  "status" : "<?php echo $row->status?>",
		  "balas": "<button  class='primary' onclick=balas('<?php echo $row->id_kontak?>','<?php echo $row->EMail?>')>Balas</button>"
		}<?php  if($i<$total) { echo ","; $i++; } ?>
	<?php  endforeach; ?>
  ]
}