	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="<?php echo base_url()?>login/masuk" method="post">
							<input type="text" placeholder="Username" required/>
							<input type="password" placeholder="Password" required/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Register!</h2>
						<form action="<?php echo base_url()?>login/isiform" method="POST">
							<input name = "Nama_User" type="text" placeholder="Name" required/>
							<input name="Alamat" type="text" placeholder="Address" required/>
							<input name="Tanggal_lahir" type="date" placeholder="Date of Birth" required/>
							<input name="Nomor_HP" type="text" placeholder="Mobile Phone Number" required/>
							<input name="username" type="text" placeholder="Username" required/>
							<input name ="password" type="password" placeholder="Password" required/>
							<!-- <input type="password" placeholder="Re-type Password" required/> -->
							
							<button type="submit" class="btn btn-default">Register!</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	<?php 
	
	/*$con= mysqli_connect('localhost', 'root', '','konco');
	$query= "select * from akun where 1";
	$result = mysqli_query($con, $query);
	if ($result)
	{
		while ($row = mysqli_fetch_array($result)) {
			echo $row['username']."<br>";
			echo $row['password']."<br>";
		}
	}*/	
 ?>	
	
