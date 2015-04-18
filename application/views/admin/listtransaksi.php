
<script type="text/javascript">
        function changestatus(id)
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
                    var content = '<div align="center"><form method="POST" action="<?php  echo base_url(); ?>admin/editstatus">'+
                    '<h3>Pilih Status</h3><br/>'+
                    '<input type="hidden" name="id" value="'+id+'">'+
                    '<select style="width:250px" class="input-control select" name="status">'+
                    '<option value="0">Belum Melakukan Pembayaran</option>'+
                    '<option value="1">Sudah Membayar</option>'+
                    '<option value="2">Barang Sudah Dikirim</option></select>'+
                    '<div><input type="submit" class="default large" id="confirmButton" value="Ubah"></div></form></div>';
                    $.Dialog.title("Edit Status");
                    $.Dialog.content(content);
                    $.Metro.initInputs();
                }
            });
        }
        function abc()
        {
            alert("sdsad");
        }
    </script>

    <div>
    <div style="width:900px;margin:auto;">
        <h1 style="text-align: center;"> List Transaksi</h1>
            <table class="table striped hovered dataTable" id="dataTables-1" style="margin-top:30px">
                <thead>
                <tr>
                    <th class="text-left">ID Transaksi</th>
                    <th class="text-left">Nama Pembeli</th>
                    <th class="text-left">Total Harga</th>
                    <th class="text-left">Status</th>
                    <th class="text-left">Ubah Status</th>
                    <th class="text-left">Details</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <th class="text-left">ID Transaksi</th>
                    <th class="text-left">Nama Pembeli</th>
                    <th class="text-left">Total Harga</th>
                    <th class="text-left">Status</th>
                    <th class="text-left">Ubah Status</th>
                    <th class="text-left">Details</th>
                </tr>
                </tfoot>
            </table>
            <script>
                $(function(){

                    $('#dataTables-1').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "<?php echo base_url()?>admin_page/loadTransaksi",
                        "aoColumns": [
                            { "mData": "id" },
                            { "mData": "nama" },
                            { "mData": "total" },
                            { "mData": "status" },
                            { "mData": "ubahstatus" },
                            { "mData": "details" }
                        ]
                    } );
                });
            </script>
        </div>    
    </div>
    <div style="visibility:hidden; ">
    </div>
    <script src="js/hitua.js"></script>
    <script type="text/javascript">
    var id;
        function details(id)
        {
            id=id;
           $.Dialog({
                shadow: true,
                overlay: true,
                width: 550,
                padding: 10,
                height:400,
                content: '',
                onShow: function(_dialog){
                    var content = '<table class="table striped hovered dataTable" id="dataTables-3"><thead><tr><th class="text-left">Nama Barang</th><th class="text-left">Quantity</th></tr></thead><tbody></tbody></table><button class="default" style="margin-left:200px;width:100px" onclick="$.Dialog.close()">OK</button>';
                    $.Dialog.content(content);
                    $.Metro.initInputs();
                }
            });

            $(function(){

                    $('#dataTables-3').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "<?php echo base_url()?>admin_page/detail_transaksi/"+id+"",
                        "aoColumns": [
                            { "mData": "nama barang" },
                            { "mData": "quantity" }
                        ]
                    } );
                });
        }
    </script>
    <script src="<?php echo base_url()?>assets/js/hitua.js"></script>
    