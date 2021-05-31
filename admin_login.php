<?php

include 'dbconnect.php';
session_start();
$email_err=$pws_err=$success=$error=''; 
if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$pass=password_hash($password, PASSWORD_BCRYPT);
	$cpass=password_hash($cpassword, PASSWORD_BCRYPT);
	$query="select * from register where email='$email'";
	$run=mysqli_query($conn,$query);
	$row=mysqli_num_rows($run);
	if($row>0){
		$email_err="email id already exist.please try with another email";
	}
	else if($password!==$cpassword){
		$pws_err="password incorrect";
	}
	else{$sql="insert into register(fname,email,password,cpassword) values ('$fname','$email','$pass','$cpass')";
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
	<title>student management</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

         <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<script>
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
	</script>
	<style>
		body{
			background-image:linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)), url("https://wallpapercave.com/wp/wp8538129.jpg");
			background-size: cover;
		}
	*{  margin: 0;
   padding: 0;
   box-sizing: border-box;
 }

.colorpannel{
	background:rgba(0,0,0,0.7);
	border-radius: 30px;
}
.footercolor{
	background-color:rgba(0,0,0,0.8);
color: white;}
	.footer{position: fixed;
		
		bottom:0; }

.form-control{
	border: none;
	border-bottom:2px solid white;
	background-color:rgba(0,0,0,0); 
	border-radius: 0rem;
	background-clip: padding-box;

}
.btn{background:#b00780;
color: white;
font-weight: 600;}	

.navbor{border-right: 2px solid white;
    }
.bgnav{background-color: black;}



	</style>


</head>
<body>
	<nav class="navbar  navbar-expand-md navbar-dark bgnav ">
        <a href="#" class="navbar-brand text-center" style="color: gold; font-size: 25px; font-weight: 500; font-family: fantasy; ">
            Abc <br>Institutions
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ">
                <a href="index.html" class="nav-item nav-link active font-weight-bold">Home</a>
                <a href="#" class="nav-item nav-link font-weight-bold ">Profile</a>
                <a href="#" class="nav-item nav-link font-weight-bold">Messages</a>
                <a href="#" class="nav-item nav-link  font-weight-bold" >Reports</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="admin_login.php" class="nav-item nav-link navbor" onclick="admindisplay()"> Admin Login</a>   <a href="#" class="nav-item nav-link"> Student Login</a>
            </div>
        </div>
    </nav>
	<section  class="mb-4">
		<p class="text-warning text-center font-weight-bold"><?php echo @$_SESSION['login_first'] ;?></p>

		
<!-- //container starts  -->
		<div class="container" id="formsetting"> 
			<h2 class="text-center pt-2 pb-4  font-weight-bold text-white" style="font-weight: 1000;">Admin Login  |  Registration </h2>
			<div class="row   pt-4">

				
				
				<div class="offset-md-4 col-md-4 col-12 mb-4 pt-2 pb-3 shadow  colorpannel">
					<!-- <div class="login-circle text-center"><i class="fa fa-user-circle"></i></div> -->
					<p class="text-danger text-center font-weight-bold"><?php echo @$_GET['error']?></p>
						
					<button class="btn  px-5" onclick="content1()">Register</button>
					<button class="btn  px-5" onclick="content2()">Login</button>
					<div id="div1" style="display:block;" class="mt-2">
					<form method="post" action="" class="">
						<div class="form-group">
							<label  style="font-weight: 500;" class="text-white"> Full Name</label>
							<input type="text" name="fname" placeholder="enter your name" class="form-control " required="required">
						</div>
						<div class="form-group">
							<label style="font-weight: 500;" class="text-white" > Email</label>
							<span class="float-right text-danger font-weight-bold"><?php echo $email_err;   ?></span>
							<input type="text" name="email" placeholder="enter your email" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label style="font-weight: 500;" class="text-white" > Password</label>
							<input type="password"name="password" placeholder="enter your password" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label style="font-weight: 500;" class="text-white" > Confirm Password</label>
							<span class="float-right text-danger font-weight-bold"> <?php echo $pws_err; ?></span>
							<input type="password" name="cpassword" placeholder="RE-enter your password" class="form-control" required="required">
						</div>
						<input type="submit" name="submit" value="Register" class="btn   px-5"><span class="float-right  font-weight-bold"><?php echo $success; echo $error; ?></span> 
					</form></div>
				
					<div id="div2" style="display:none;">
					<form method="post" action="">
						<div class="form-group">
							<label style="font-weight: 500;" class="text-white"> Email</label>
							<input type="email" name="email" placeholder="enter your email" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label style="font-weight: 500;" class="text-white" > password</label>
							<input type="password" name="password" placeholder="enter your password" class="form-control" required="required">
						</div>
						<input type="submit" name="submit1" value="Login" class="btn   px-5">
					</form>

					</div>
				</div>
			</div></div>
			<!-- container ends -->
				
</section>
	<section class=" footer  container-fluid mt-4">
		<div class="row footercolor  ">
					<div class="col-lg-8 col-md-8 col-12  px-5  font-weight-bold ">
						
			
					For Support <i class="fa fa-phone px-2 font-weight-bold "></i> 544645445 </div>
				
						<div class="col-lg-4 col-md-4 col-12  font-weight-bold">
						
			
					 <i class="fa fa-envelope px-3"></i>whhgg@gmail.com</div>
				</div>
	</section>

</body>
</html>
<?php
if(isset($_POST['submit1'])){
	$email=$_SESSION['email']=$_POST['email'];
	$pwd=$_POST['password'];
	$sql="select * from register where email='$email'";
	$run=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($run);

	$pwd_fetch=$row['password'];
	$pwd_decode=password_verify($pwd, $pwd_fetch);
	if($pwd_decode){
		echo " <script>window.open('main.php?success=Loggedin successfully','_self')</script>";
	}
	else{
		echo " <script>window.open('admin_login.php?error=Username or password is incorrect','_self')</script>";
	}

}

?>