{
  "aaData": [
    <?php  $in_cart = array(); $i=1; $total = count($transaksi);  foreach($transaksi as $row) : ?>
		{
		  "id": "<?php  echo $row->ID_TRANSAKSI; ?>",
		  "nama": "<?php  echo $row->NAMA_PEMBELI; ?>",
		  "total": "<?php echo $row->TOTAL?>",
		  "status": "<?php if ($row->STATUS==0){echo 'Belum Melakukan Pembayaran';} elseif ($row->STATUS==1) {
		  	echo 'Sudah Membayar';
		  } elseif ($row->STATUS==2) {
		  	echo 'Barang Sudah Dikirim';
		  }; ?>",
		  "ubahstatus": "<button  class='default' onclick=changestatus(<?php echo $row->ID_TRANSAKSI?>)>Edit</button>",
		  "details": "<button  class='default' onclick=details(<?php echo $row->ID_TRANSAKSI?>)>Details</button>"
		}<?php  if($i<$total) { echo ","; $i++; } ?>
	<?php  endforeach; ?>
  ]
}