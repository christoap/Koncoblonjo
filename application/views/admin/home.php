
<script>
	function checkPassword(status)
	{
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
                    var content = '<div align="center"><h3>Perubahan Password '+status+'</h3></div>';
                    $.Dialog.content(content);
                    $.Metro.initInputs();
                }
				});
	}

</script>
<?php 

if (isset($changePassword) && $changePassword!="")
{
    echo "lala".$changePassword;
?>
<script>
checkPassword("<?php echo $changePassword?>")
</script>
<?php 
}
?>

