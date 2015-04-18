{
  "aaData": [
    <?php  $in_cart = array(); $i=1; $total = count($data);  foreach($data as $row) : ?>
		{
		  "nama barang": "<?php  echo $row->NAMA_BARANG ?>",
		  "quantity": "<?php  echo $row->QUANTITY ?>"
		}<?php  if($i<$total) { echo ","; $i++; } ?>
	<?php  endforeach; ?>
  ]
}