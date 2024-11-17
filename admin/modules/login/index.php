<?php 
if(isset($_POST['username'])){
	$_POST['password']=$_POST['password'];
	$qry="SELECT id FROM login WHERE username='$_POST[username]' AND password='$_POST[password]'";	
	if($dbobj->fetchRow($qry)){
		$data=$dbobj->loginFetchOne($qry);
		$_SESSION['logindtl']=$data;
		header("location:".BASEURL);
	}
	else{
		echo "<script>alert('Username or Password is wrong')</script>";
	}
}
?>
<form method="post">
	<table class="table table-bordered table-striped">
		<tr>
			<th colspan="2" style="text-align: center;">Login Form</th>
		</tr>
		<tr>
			<th>Username</th>
			<td><input type="text" name="username" class="form-control"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" class="form-control"></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><input type="submit" value="submit" class="btn btn-primary"></td>
		</tr>
	</table>
</form>