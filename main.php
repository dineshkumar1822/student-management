
<?php
session_start();
if(!$_SESSION['email']){
	$_SESSION['login_first']="please log in first";
	header('Location:admin_login.php');

}
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
 body{background-color: rgba(248,248,248,255);}

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
 	background-color: rgba(63,14,64,255);
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
 	background:rgba(63,14,64,255) ;
 	font-size: 55px;
 	color: white;
 	border-radius: 50px;
 	padding-top: 18px;
 	position: relative;
 	left: 35%;
 	bottom:5px;
 }

 .icon i:hover{
 	font-size: 65px;
 	background:rgba(63,14,64,255);
 	color: white;
 }

  .tocolor{background-color: rgba(63,14,64,255);}
  .as {border-right: 2px solid rgba(63,14,64,255);}
   .vs {border-right: 2px solid rgba(63,14,64,255);}
    .af {border-right: 2px solid rgba(63,14,64,255);}
     .vf {border-right: 2px solid rgba(63,14,64,255);}
.textcolor{color: rgba(63,14,64,255);}


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
				<h2 class="text-center  text-dark pb-4 pt-2 font-weight-bold display-6">Welcome to Dashboard</h2>
				<div class="container  shadow  col-11" id="form-setting">
					
					<div class="row">
					<div class="col-md-4  col-sm-4 col-12 m-auto icon as  pt-4">
						<a href="add_student.php" class=" textcolor text-center"><i class="fa fa-user"></i><h3>Add Student Detail</h3></a>
					</div>
				<div class="col-md-4  col-sm-4 col-12 m-auto icon  vs pt-4 ">
						<a href="view_student.php" class=" textcolor text-center"><i class="fa fa-eye"></i><h3>View Student Detail</h3></a>
					</div>
				<div class="col-md-4 col-sm-4 col-12 m-auto icon es pt-4">
						<a href="edit_student.php" class=" textcolor text-center"><i class="fa fa-pencil"></i><h3>Edit Student Detail</h3></a>
					</div>
				</div>
				<hr class="text-white">
					<div class="row">
					<div class="col-md-4 col-sm-4 col-12 m-auto icon af  pt-4">
						<a href="" class=" textcolor text-center"><i class="fa fa-user"></i><h3>Add Faculty Detail</h3></a>
					</div>
				<div class="col-md-4 col-sm-4 col-12 m-auto icon  vf pt-4">
						<a href="" class=" textcolor text-center"><i class="fa fa-eye"></i><h3>View Faculty Detail</h3></a>
					</div>
				<div class="col-md-4 col-sm-4 col-12 m-auto icon ef pt-4">
						<a href="" class="  textcolor text-center"><i class="fa fa-pencil"></i><h3>Edit Faculty Detail</h3></a>
					</div>
				</div>
				</div>
				
			</section>
		</div>
	</div>


</body>
</html>