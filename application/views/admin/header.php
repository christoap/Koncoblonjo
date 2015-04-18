<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('themes/images/logo.jpg');?>">
    <script src="<?php  echo base_url(); ?>js/jquery/jquery.min.js"></script>
    <script src="<?php  echo base_url(); ?>js/jquery/jquery.widget.min.js"></script>

    <script src="<?php  echo base_url(); ?>js/metro/metro-loader.js"></script>
    <script src="<?php  echo base_url(); ?>js/metro/metro-hint.js"></script>
    <script src="<?php  echo base_url(); ?>js/metro/metro-input-control.js"></script>
    <script src="<?php  echo base_url(); ?>js/metro/metro-button-set.js"></script>
    <script src="<?php  echo base_url(); ?>js/jquery/jquery.dataTables.js"></script>
    <script src="<?php  echo base_url(); ?>js/jquery/jquery.mousewheel.js"></script>
    <script src="<?php  echo base_url(); ?>js/metro.min.js"></script>
    <script src="<?php  echo base_url(); ?>js/load-metro.js"></script>
    <script src="<?php  echo base_url(); ?>js/metro/metro-dropdown.js"></script> 
    <link rel="stylesheet" href="<?php  echo base_url(); ?>css/metro-bootstrap.css">
    <link rel="stylesheet" href="<?php  echo base_url(); ?>css/docs.css">
    <link href="<?php  echo base_url(); ?>js/prettify/prettify.css" rel="stylesheet">
    <link href="<?php  echo base_url(); ?>css/metro-bootstrap-responsive.css" rel="stylesheet">
    <title>Admin Page</title>
</head>
<style type="text/css">
    .ui-dialog-title {
font-family: 'Andika', sans-serif;
color: #FFFFCC;  
background-color:#330033;
}
</style>
<body class="metro">

    <header  class="bg-dark" >
    <div class="navbar">
        <nav class="navigation-bar dark" >
            <nav class="navigation-bar-content container" >
            <a href="<?php echo base_url()?>admin_page/listbarang">
                <img src="<?php echo base_url()?>themes/images/logo.png"  style="height: inherit;width: 60px; margin-left:9%" class="element">    
                </a>
            <span class="element-divider" style="height:100%"></span>
            <a class="element1 pull-menu" href="#"></a>
            <?php if (!isset($header))
            { ?>
                <ul class="element-menu" >
                <li>
                <div class="element" style="margin-top: 10px;">
                    <a class="dropdown-toggle" href="#" style="font-size: x-large;">Barang</a>
                    <ul class="dropdown-menu dark" data-role="dropdown">
                        <li><a href="<?php echo base_url()?>admin_page/listBarang";>List Barang</a></li>
                        <li><a href="<?php echo base_url()?>admin_page/editBarang">Edit Barang</a></li>
                        <li><a href="<?php echo base_url()?>admin_page/tambahbarang">Tambah Barang</a></li>
                    </ul>
                </div>
                </li>
                <li>
                <div class="element" style="margin-top: 10px;">
                    <a   href="<?php echo base_url()?>admin_page/listTransaksi" style="font-size: x-large; color:white">Daftar Pemesanan</a>
                </div>
                </li>
                <li>
                <div class="element" style="margin-top: 10px;">
                    <a href="<?php echo base_url()?>admin_page/pesan" style="font-size: x-large; color:white">Pesan</a>
                </div>
                </li>
                <li>
            </ul>
            <div class="no-tablet-portrait no-phone">
            <span class="element-divider place-right"></span>
            <div class="element place-right" style="margin: 10px 10px 0px 0px;">
                    <a class="dropdown-toggle" href="#" style="font-size: x-large;">Akun</a>
                    <ul class="dropdown-menu dark" data-role="dropdown">
                        <li><a href="javascript:password();" >Rubah Password</a></li>
                        <li><a href="<?php echo base_url()?>login/logout">Logout</a></li>
                    </ul>
                </div>
            </div>

            <?php } ?>
            </nav>
            <span class="element-divider" style="height:100%"></span>

        </nav>
    </div>
    </header>

    <script>
    function password()
    {
                $.Dialog({
                shadow: true,
                overlay: true,
                draggable: true,
                width: 450,
                padding: 30,
                height:300,
                content: '',
                border:"2px solid white",
                background: "#000000",
                onShow: function(_dialog){
                    var content = '<form name="passwordForm" action="<?php echo base_url()?>admin/changepassword" method="POST" onsubmit="return tes()"><div class="input-control text">'+
                     '<input type="password" placeholder="Masukkan Password Lama" name="password"/><button class="btn-clear"></button></div>'+
                     '<div class="input-control text"><input id="password1" type="password" placeholder="Masukkan Password Baru" name="password1"/><button class="btn-clear"></button></div><div class="input-control text">'+
                     '<input type="password" id="password2" placeholder="Masukkan Lagi Password Baru" name="password2"><button class="btn-clear"></button></div><div><input type="submit" class="default large" id="confirmButton"></div></form>';
                    $.Dialog.title("Rubah Password");
                    $.Dialog.content(content);
                    $.Metro.initInputs();
                }
            });
        
    }
    function tes()
    {
        var password1=document.forms["passwordForm"]["password1"].value;
        var password2=document.forms["passwordForm"]["password2"].value;
        if (password2==password1 && password1!="")
        {
            return true;
        }
        else
        {
            alert('Password yang anda masukkan tidak sama');
        }
        return false;
    }
    </script>