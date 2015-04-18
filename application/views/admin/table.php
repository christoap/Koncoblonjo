<script type="text/javascript">
        function hapus(id)
        {
            $.Dialog({
                shadow: true,
                overlay: true,
                draggable: true,
                icon: '<span class="icon-warning"></span>',
                title: 'Hapus barang',
                width: 550,
                padding: 10,
                content: '',
                onShow: function(_dialog){
                    var content = '<div align="center"><form  action="<?php echo base_url()?>admin/hapus_barang" method="post"><h3>Apakah anda yakin untuk menghapus data barang yang anda pilih?</h3><br/><input type="hidden" name="id" value="'+id+'"><input type="submit" class="primary large" id="confirmButton" value="Ya">&nbsp;<input type="button" class="primary large" id="cancelButton" onclick="$.Dialog.close()" value="Tidak"></form></div>';
                    $.Dialog.title("Hapus barang");
                    $.Dialog.content(content);
                    $.Metro.initInputs();
                }
            });
        }
    </script>

    <div>
        <h1 style="text-align: center;"> List Barang</h1>

        <div style="width:900px;margin:auto;">
        <div style="position:float; background:gray;">
            <a href="<?php echo base_url()?>admin_page/tambahbarang" alt="Tambah Barang"><big><i class="icon-plus fg-green large on-right" style="float:right;margin-bottom:30px;font-size: 60px;"></i></big></a>
        </div>
        <br><br><br>
            <table class="table striped hovered dataTable" id="dataTables-1" style="margin-top:30px">
                <thead>
                <tr>
                    <th class="text-left">Nama Barang</th>
                    <th class="text-left">Harga Barang</th>
                    <th class="text-left">Deskripsi Barang</th>
                    <th class="text-left">Foto Barang</th>
                    <th class="text-left">Edit Barang</th>
                    <th class="text-left">Hapus Barang</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                     <th class="text-left">Nama Barang</th>
                    <th class="text-left">Harga Barang</th>
                    <th class="text-left">Deskripsi Barang</th>
                    <th class="text-left">Foto Barang</th>
                    <th class="text-left">Edit Barang</th>
                    <th class="text-left">Hapus Barang</th>
                </tr>
                </tfoot>
            </table>
            <script>
                $(function(){

                    $('#dataTables-1').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "<?php echo base_url()?>admin_page/loadBarang",
                        "aoColumns": [
                            { "mData": "nama" },
                            { "mData": "harga" },
                            { "mData": "deskripsi" },
                            { "mData": "foto" },
                            { "mData": "edit" },
                            { "mData": "hapus" }
                        ]
                    } );
                });
            </script>
        </div>    
    </div>

    <script src="js/hitua.js"></script>
    