<?php
include 'dbconnect.php';

$email_err=$pws_err=$success=$error=''; 
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$pass=password_hash($password, PASSWORD_BCRYPT);
	$cpass=password_hash($cpassword, PASSWORD_BCRYPT);
	$query="select * from student_register where email='$email'";
	$run=mysqli_query($conn,$query);
	$row=mysqli_num_rows($run);
	if($row>0){
		$email_err="email id already exist.please try with another email";
	}
	else if($password!==$cpassword){
		$pws_err="password incorrect";
	}
	else{$sql="insert into student_register(username,email,password,cpassword) values ('$username','$email','$pass','$cpass')";
     $run=mysqli_query($conn,$sql);
     if($run){
     	$success="Registered successfully";
     }
     else{$error="Unable to submit data.please try again"; 
     }}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>student_login</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

         <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
	function content1(){
			document.getElementById("div1").style.display="block";
			document.getElementById("div2").style.display="none";
			// body...
		}
			function content2(){
			document.getElementById("div1").style.display="none";
			document.getElementById("div2").style.display="block";
			// body...
		}

		// body...
	

</script>
<style >
	body{
		background-image: linear-gradient(#022c5e, #2ca1c4, #b0dde3);
		background-repeat: no-repeat;
		background-size:cover; 
	}
	.twobt{
		background-color: transparent;
		
		color:white;
		border-radius: 0;
		border-bottom:2px solid black;
		font-weight: 700;
		font-size: 20px;


	}
	.twobt:hover{
		/*border:2px solid white;*/
		color: white;
		
		
}
.colorpannel{
	background-color: transparent;

  /*background-image: linear-gradient(#022c5e, #2ca1c4, #b0dde3);*/
}
.form-control{
	border:none;
	border-radius: 0;
	border-bottom: 2px solid white;
	background-color: transparent; 
}
.form-control::focus{
	background-color: none;
}

label{
	color: white;
	font-weight: 500;
}

	
</style>
	
</head>
<body>
	<div class="row pt-4" >
		<div class=" col-md-4 col-12 mx-auto shadow colorpannel">
			<p class="text-danger text-center font-weight-bold"><?php echo @$_GET['error']?></p>
			<a class="btn my-3 px-4 twobt" onclick="content1()">Resiter</a>
			<a class="btn  my-3 px-4 twobt" onclick="content2()">Login</a>
			<div style="display: block;" id="div1" class="py-4">
		<form method="post">	<div class="form-group">
				<label>User Name</label>
				<input type="text" name="username" class="form-control" placeholder="Enter Your Username" required="">
				
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" placeholder="Enter Your email">
				
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="Password" name="password" class="form-control" placeholder="Enter Your password">
				
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="Password" name="cpassword" class="form-control" placeholder="RE-Enter password">
				
			</div>
			<input type="submit"  name="submit" value="Register" class="btn btn-primary px-4" > <span class="float-right  font-weight-bold"><?php echo $success; echo $error; ?></span>
		</form>
	</div>
	<!-- register ends ------------------------------------------------------------------------>
		<div style="display: none;" id="div2">
			<form method="post">
				<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" placeholder="Enter Your email">
				
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="Password" name="password" class="form-control" placeholder="Enter Your password">
				
			</div>
			<input  type="submit" value="Login" name="submit1" class=" btn btn-primary" > 
			</form>
			
		</div>
			
			
		</div>
	</div>

</body>
</html>
<?php
if(isset($_POST['submit1'])){
	$email=$_POST['email'];
	$pwd=$_POST['password'];
	$sql="select * from student_register where email='$email'";
	$run=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($run);

	$pwd_fetch=$row['password'];
	$pwd_decode=password_verify($pwd, $pwd_fetch);
	if($pwd_decode){
		echo " <script>window.open('students_view.php?success=Loggedin successfully','_self')</script>";
	}
	else{
		echo " <script>window.open('student_register.php?error=Username or password is incorrect','_self')</script>";
	}

}

?>