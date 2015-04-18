<script type="text/javascript">
	function checkFunction()
	{
		var harga=document.getElementById("harga");
		var y=harga.value;
		var x=y.length;

		for (i=0; i<x; i++)
		{
			if (y.charCodeAt(i)>= 48 && y.charCodeAt(i)<=57)
			{

			}
			else{
				 $.Dialog({
                shadow: true,
                overlay: true,
                draggable: true,
                icon: '<span class="icon-warning"></span>',
                title: 'Warning',
                width: 550,
                padding: 10,
                content: '',
                onShow: function(_dialog){
                    var content = '<div align="center"><h3>Hanya masukkan angka</h3></div>';
                    $.Dialog.title("Hapus barang");
                    $.Dialog.content(content);
                    $.Metro.initInputs();
                }
				});
				 return false;
			break;
			}
		}
		return true;
	}
	function validateForm() 
	{
	    var x = document.forms["myForm"]["nama"].value;
	    var z = document.forms["myForm"]["deskripsi"].value;
	    var y = document.forms["myForm"]["harga"].value;
	    var check=true;
	    var content;
	    if (x == null || x == "") {
	       content=("<h3><center>Kolom nama harus Diisi</center></h3>");
	       check=false;
	    }
	    else if (y == null || y == "") {
	         content=("<h3><center>Kolom harga harus Diisi</center></h3>");
	         check=false;
	    }
	    else if (z == null || z == "") {
	         content=("<h3><center>Kolom deskripsi harus Diisi</center></h3>");
	        check=false;
	    }
	    if (check==false)
	    {
	    	 $.Dialog({
                shadow: true,
                overlay: true,
                draggable: true,
                icon: '<span class="icon-warning"></span>',
                title: 'Hapus barang',
                width: 550,
                padding: 10,
                content: content,
                onShow: function(_dialog){
                    $.Dialog.title("Hapus barang");
                    $.Dialog.content(content);
                    $.Metro.initInputs();
                }
            });
	    }
	    else{
	    	check=checkFunction();	
	    }
	   	
	    return check;
	}
</script>

<div style="margin-top:40px; width:500px;margin-left:auto;margin-right:auto">
<h1 style="text-align: center;margin-bottom:30px">Edit Barang</h1>
	<form action="<?php echo base_url()?>admin/edit_barang" method="post" onsubmit="return validateForm()" name="myForm">
		<div class="input-control text">
		 <label class="formlabel">Nama Barang</label>
	    <input type="text" name="nama" value="<?php echo $barang[0]['NAMA_BARANG']?>" />
	    <button class="btn-clear"></button>
		</div>
		<label class="formlabel">Harga Barang</label>
		<div class="input-control text">
	    <input type="text" name="harga" id="harga" value="<?php echo $barang[0]['HARGA']?>" onblur="checkFunction()">
	    <button class="btn-clear"></button>
		</div>
		<label class="formlabel">Deskripsi Barang</label>
		<div class="input-control text">
	    <textarea type="text" name="deskripsi" value="<?php echo $barang[0]['DESKRIPSI']?>" rows="5" cols="71"><?php echo $barang[0]['DESKRIPSI']?></textarea>
	    <button class="btn-clear"></button>
		</div>
		<input type="hidden" name="id" value="<?php echo $barang[0]['ID_BARANG']?>">
		<input type="submit" class="default large on-right" value="Edit" style="margin-top:50px">
	</form>
		<form method="post" action="<?php echo base_url()?>admin/editphoto" enctype="multipart/form-data">
			<label class="formlabel" style="margin-top:50px">Foto Barang</label>
			<div class="input-control text" >
			<img src="<?php echo base_url()?>picture/<?php echo $barang[0]['FOTO']?>.png">
		    <input type="file" name="userfile" placeholder="Foto" />
			</div>
			<input type="hidden" name="id" value="<?php echo $barang[0]['ID_BARANG']?>">
			<input type="submit" class="default large on-right" value="Edit Foto" style="margin-top:15px">
		</form>
	
		
</div>