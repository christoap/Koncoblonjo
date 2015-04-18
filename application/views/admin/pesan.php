
<script type="text/javascript">
        function balas(id,email)
        {   
            $.Dialog({
                shadow: true,
                overlay: true,
                draggable: true,
                title: 'Balas Pesan',
                width: 650,
                height:450,
                padding: 10,
                content: '',
                onShow: function(_dialog){
                    var content = '<div align="center"><form method="POST" action="<?php echo base_url(); ?>admin/sendemail">'+
                    '<input type="hidden" name="id" value="'+id+'">'+
                    '<div class="input-control text" data-role="input-control"><input type="text" name="email"  value="'+email+'" disable /><button class="btn-clear"></button></div>'+
                    '<div class="input-control textarea"><textarea name="pesan" placeholder="tulis pesan disini"/></textarea></div>'+
                    '<div><input type="submit" class="default large" id="confirmButton" value="Kirim"></div></form></div>';
                    $.Dialog.content(content);
                    $.Metro.initInputs();
                }
            });
        }
    </script>

    <div>
    <div style="width:900px;margin:auto;">
        <h1 style="text-align: center;"> List Pesan</h1>
            <table class="table striped hovered dataTable" id="dataTables-1" style="margin-top:30px">
                <thead>
                <tr>
                    <th class="text-left">Nama</th>
                    <th class="text-left">E-Mail</th>
                    <th class="text-left">NO HP</th>
                    <th class="text-left">Pesan</th>
                    <th class="text-left">Status</th>
                    <th class="text-left">Balas</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <th class="text-left">Nama</th>
                    <th class="text-left">E-Mail</th>
                    <th class="text-left">NO HP</th>
                    <th class="text-left">Pesan</th>
                    <th class="text-left">Status</th>
                    <th class="text-left">Balas</th>
                </tr>
                </tfoot>
            </table>
            <script>
                $(function(){

                    $('#dataTables-1').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "<?php echo base_url()?>admin_page/get_pesan",
                        "aoColumns": [
                            { "mData": "nama" },
                            { "mData": "email" },
                            { "mData": "hp" },
                            { "mData": "pesan" },
                            { "mData": "status" },
                            { "mData": "balas" },
                        ]
                    } );
                });
            </script>
        </div>    
    </div>
    <div style="visibility:hidden; ">
    </div>
    <script src="js/hitua.js"></script>
    <script src="<?php echo base_url()?>assets/js/hitua.js"></script>
    