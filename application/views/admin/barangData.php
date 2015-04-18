{
  "aaData": [
    <?php  $in_cart = array(); $i=1; $total = count($barang);  foreach($barang as $row) : ?>
		{
		  "nama": "<?php  echo $row->NAMA_BARANG; ?>",
		  "harga": "<?php  echo $row->HARGA; ?>",
		  "deskripsi": "<?php echo $row->DESKRIPSI?>",
		  "foto": "<img src='<?php echo base_url()?>picture/<?php echo $row->FOTO?>.png' width=80px height=80px >",
		  "edit": "<form action='<?php echo base_url()?>admin_page/editBarang' method='post'> <input type='hidden' name='id' value='<?php echo $row->ID_BARANG?>'><span><button type='submit' class='default'><i class='icon-pencil on-left'></i>Edit</button></span></form>",
		  "hapus": "<button  class='danger' onclick=hapus('<?php echo $row->ID_BARANG?>')><i class='icon-remove on-left'></i>Hapus</button>"
		}<?php  if($i<$total) { echo ","; $i++; } ?>
	<?php  endforeach; ?>
  ]
}