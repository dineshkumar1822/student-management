<?php
include 'dbconnect.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>Responsive menu</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

         <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<script >
		jQuery(document).ready(function($){
			$('#toggler').click(function(event){
				{
					event.preventDefault();
					$('#wrap').toggleClass('toggled');
				}
			});
		});
	</script>
	<style >
		*{  margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: tahoma;
 }
 body{ background-color: #c7a7a7; }
 .formcolor{ background-color:white;
            /*border: 2px solid rgba(63,14,64,255);*/
        }
 

 .main-body{
 	width: 100%;
 	min-width: 0px;
 }
 .sidebar{
 	width: 17rem;
 	font-size: 1.1rem;
 	transition: all 0.5s ease;

 }
 .sidebar a:hover {
 	padding-left: 5px;
 	transition: all 0.5s ease;
 	background-color:rgba(63,14,64,255);
 	color: white;

 }
 .sidebar-heading{
 	padding-top: 10px;
 	padding-bottom: 10px;
 }

 .sidebar i{
 	background-color: rgba(63,14,64,255);
 	border-radius: 50%;
 	color: white;
 	padding :3px;
 	margin-right: 3px;
 }
 @media (min-width: 300px){
 	#wrap.toggled .sidebar{
 		margin-left: -16rem
 	}
 }
 #form-setting{padding: 10px;
 	border-radius: 10px;}

 .icon i{
 	width: 100px;
 	height:100px;
 	background: white;
 	font-size: 55px;
 	color: #df2830;
 	border-radius: 50px;
 	padding-top: 18px;
 	position: relative;
 	left: 35%;
 	bottom:5px;
 }

 .icon i:hover{
 	font-size: 65px;
 	background:white;
 	color: #df2830;
 }
 .tocolor{background-color: rgba(63,14,64,255);}
 .form-control{
 	/*background-color: #c7a7a7;*/
 	border:none;
 	border-bottom: 2px solid rgba(63,14,64,255);
 	border-radius: 0;
 }
 label{font-weight: 600;
   color:black; 
}
   .btn-success{background-color:rgba(63,14,64,255);
                  font-weight: 500; }
 /*.studentshadow{box-shadow: 2px 2px 2px black; }*/
	</style>
</head>
<body>
	<div class="d-flex" id="wrap">
		<div class="sidebar bg-light border-light">
			<div class="sidebar-heading ">
				<p class="text-center"> Manage student</p></div>
				<ul class="list-group list-group-flush">
					<a href="main.php" class="list-group-item list-group-item-action">
						<i class="fa fa-vcard-o"></i>Dashboard
					</a>
					<a href="#" class="list-group-item list-group-item-action">
						<i class="fa fa-user"></i>Add Faculty Detail
					</a>
					<a href="#" class="list-group-item list-group-item-action">
						<i class="fa fa-eye"></i>View Faculty Detail
					</a>
					<a href="#" class="list-group-item list-group-item-action">
						<i class="fa fa-pencil"></i>Edit Faculty Detail
					</a>
					<a href="add_student.php" class="list-group-item list-group-item-action">
						<i class="fa fa-user"></i>Add Student Detail
					</a>
					<a href="view_student.php" class="list-group-item list-group-item-action">
						<i class="fa fa-eye"></i>View Student Detail
					</a>
					<a href="edit_student_detail.php" class="list-group-item list-group-item-action">
						<i class="fa fa-pencil"></i>Edit Student Detail
					</a>
					<a href="logout.php" class="list-group-item list-group-item-action">
						<i class="fa fa-sign-out"></i> Logout Detail
					</a>
				</ul>
			</div>
		
		<div class="main-body">
			<button class="btn btn-outline-light tocolor mt-3" id="toggler">
				<i class="fa fa-bars"></i>
			</button>
			
			<section id="main-form">
				
				<!-- <h2 class="text-center text-danger pt-3 font-weight-bold bg-light"> Student Management System</h2> -->
				<div class="container   shadow formcolor col-11" id="form-setting">
					<h3 class="text-center  pb-4 pt-1 font-weight-bold display-6">Edit Student Detail</h3>
						<?php

					if(isset($_GET['edit_student'])){
						$edit_st_id =$_GET['edit_student'];
						$query="select * from student_detail where st_id ='$edit_st_id'";
						$run = mysqli_query($conn,$query);
						while($row = mysqli_fetch_assoc($run)){
							$fname=$row['fname'];
							$lname=$row['lname'];
							$fathername=$row['fathername'];
							$city=$row['city'];
							$nationality=$row['nationality'];
							$mobile=$row['mobile'];
							$district=$row['district'];
							$state=$row['state'];
							$email=$row['email'];

					
                        }}
					?>
					
					<form method="post" enctype="multipart/form-data">
					
					<div class="row">
						<div class="col-md-5 col-sm-5 col-12 m-auto">
							<div class="form-group">
								<label >First Name</label>
								<input type="text" name="fname" placeholder="Enter your first name" class="form-control" value="<?php echo $fname;?>">
							</div>
							<div class="form-group">
								<label >Email</label>
								<input type="email" name="email" placeholder="Enter your Email" class="form-control" value="<?php echo $email;?>">
							</div>
							<div class="form-group">
								<label >Father Name</label>
								<input type="text" name="fathername" placeholder="Enter your Father name" class="form-control" value="<?php echo $fathername;?>">
							</div>
							<!-- <div class="form-group">
								<label >Gender</label>
								<input type="radio" name="gender1" value="male" class="form-check-input ml-2 ">
								<label class="form-check-label class pl-4">Male</label>
								<input type="radio" name="gender2"  value="female" class="form-check-input ml-2 ">
								<label
								 class="form-check-label class pl-4">Female</label>
							</div>
 -->
							
							<div class="form-group">
								<label class>city</label>
								<input type="text" name="city" placeholder="Enter your city" class="form-control" value="<?php echo $city;?>">
							</div>
							<div class="form-group">
								<label >Nationality</label>
								<input type="text" name="nationality" placeholder="Enter your Nationality" class="form-control" value="<?php echo $nationality;?>">
							</div>
						</div>
					<div class="col-md-5 col-sm-5 col-12 m-auto">
						<div class="form-group">
								<label >Last Name</label>
								<input type="text" name="lname" placeholder="Enter your Last name" class="form-control" value="<?php echo $lname;?>">
							</div>
							<div class="form-group">
								<label >Birth Date</label>
								<input type="date" name="birthdate" placeholder="Enter your Birth Date" class="form-control" value="<?php echo $birthdate;?>">
							</div>
							
						
							<div class="form-group">
								<label >Mobile</label>
								<input type="text" name="mobile" placeholder="Enter your Mobile" class="form-control" value="<?php echo $mobile;?>">
							</div>
							<div class="form-group">
								<label >District</label>
								<input type="text" name="district" placeholder="Enter your District" class="form-control" value="<?php echo $district;?>">
							</div>
							<div class="form-group">
								<label >State</label>
								<input type="text" name="state" placeholder="Enter your State" class="form-control" value="<?php echo $state;?>">
							</div>
							<div class="input-group">
								
								<div class="input-group-prepend"><span class="input-group-text" id="InputGroupFileAddon01" style=" background-color:rgba(63,14,64,255);color: white; ">Upload</span></div>
								<div class="custom-file">
									<input type="file" name="image" class="custom-file-input" id="InputGroupFile01" aria-discribedby="InputGroupFileAddon01">
									<label class="custom-file-label"  for="InputGroupFile01">Choose File</label>
								</div>
								
							</div>
							
							<div class="pt-2"><input type="submit" name="update" value="update detail" class="btn btn-success px-5 mt-2"></div>
							

					</div>
				</div>
			</form>
			</div>
				
			</section>
		</div>
	</div>


</body>
</html>
<?php
if(isset($_POST['update'])){
	$edit_st_id =$_GET['edit_student'];
	$fname=mysqli_real_escape_string($conn,$_POST['fname']);
	$lname=mysqli_real_escape_string($conn,$_POST['lname']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$fathername=mysqli_real_escape_string($conn,$_POST['fathername']);
	$birthdate=mysqli_real_escape_string($conn,$_POST['birthdate']);
	// $gender =$_POST['gender'];
	$district=mysqli_real_escape_string($conn,$_POST['district']);
	$nationality=mysqli_real_escape_string($conn,$_POST['nationality']);
	$state=mysqli_real_escape_string($conn,$_POST['state']);
	$city=mysqli_real_escape_string($conn,$_POST['city']);
	$mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
	// $gender1=mysqli_real_escape_string($conn,$_POST['gender1']);
	$image=$_FILES['image']['name'];
	$image_type= $_FILES['image']['name'];
	$image_size= $_FILES['image']['size'];
	$image_tmp= $_FILES['image']['tmp_name'];
	$image_query= "select * from student_detail where st_id='edit_st_id'";
	$run=mysqli_query($conn,$image_query);
	while($row=mysqli_fetch_assoc($run)){
		$image=$row['image'];
	}
unlink('st_image/'.$image);
	if(!$image_type =='image/jpg' or !$image_type =='image/png'){
		$match_err ="Invalid image format";
	}
	else if ($image_size<=2000){
		$size_error = "Image size is larger,Image size should be less than 2mb";
	}
	else{
		move_uploaded_file($image_tmp,"st_image/$image"); 
		$sql="update student_detail set fname ='$fname',lname='$lname',fathername='$fathername',
		email='$email', birthdate='$birthdate', district='$district', nationality='$nationality', state='$state', city='$city', mobile='$mobile', image='$image'  where st_id=$edit_st_id";
		$run=mysqli_query($conn,$sql);
		if($run){
			echo "<script>window.open('view_student.php?update_success=student data updated successfully','_self')</script>";}
			else{
				echo "<script>window.open('view_student.php?update_error=unable to update data ','_self ')</script>";}
		}
		}
	

?>