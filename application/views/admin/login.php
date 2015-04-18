<div style="border: 1px solid black; width:400px; margin:auto;margin-top:10%;padding:40px 20px 40px 20px ">
<form action="<?php echo base_url()?>login/masuk" method="post">
	<fieldset>
		<legend>Login</legend>
		<label>Username</label>
		<div class="input-control text" data-role="input-control">
			<input type="text" placeholder="Type Username" style="width:90%" name="username">
			<button class="btn-clear" tabindex="-1"></button>
		</div>

		<label>Password</label>
		<div class="input-control password" data-role="input-control">
			<input type="password" placeholder="Type Password" style="width:90%" autofocus name="password">
			<button class="btn-reveal"tabindex="-1"></button>
		</div>	
		<input type="submit"value="Login">
	</fieldset>
	<div>
		<?php if(isset($checklogin)&&$checklogin==1)
		{
			?>
			<span>
				<h4>Username dan password yang anda masukkan salah</h4>
			</span>
		<?php  } ?>
	</div>
</form>
</div>