<?php

include 'dbconnect.php';
session_start();
if(!$_SESSION['email']){
	$_SESSION['login_first']="please log in first";
	header('Location:index.php');}
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
<script ><src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
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
        <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
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
.search{
    margin-left: 700px;
}


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
					<a href="#" class="list-group-item list-group-item-action">
						<i class="fa fa-sign-out"></i> Logout Detail
					</a>
				</ul>
			</div>
			<div class="main-body">
			<button class="btn btn-outline-light tocolor mt-3" id="toggler">
				<i class="fa fa-bars"></i>
			</button>
            <div class="search">
            <label class="font-weight-bold">Search student:</label>
            <input id="myInput" type="text" placeholder="Search.." ></div>
            <section id="main-form">
            	<h3 class="text-center text-success"><?php echo @$_GET['update_success'];echo @$_GET['update_error']; echo @$_GET['delete-msg'];?></h3>
            	<h3 class="text-center  pb-4 pt-1 font-weight-bold display-6">View Student Detail</h3>
            	<div class="container bg-light shadow my-3">
            		<div class="row">
            		<div class="col-md-12 col-sm-12 col-12">
            			<table class="table table-bordered table-responsive ">
            				<thead>
            					<tr>
            						<th>S.NO</th>
            						<th>First Name</th>
            						<th>Last Name</th>
            						<th>Father Name</th>
            						<th>Email</th>
            						<th>BirtDate</th>
            						<th>Mobile</th>      
            						<th>city</th>
            						<th>District</th>
            						<th>Nationality</th>
            						<th>state</th>
            						<th>image</th>
            						<th>Change</th>

            					</tr>
            				</thead>
            				<tbody id="myTable">
            					<?php
            					$sql="select * from student_detail";
            					$run=mysqli_query($conn,$sql);
            					$i=1;
            					while($row=mysqli_fetch_assoc($run)){ 
            					?>

            					<tr>
            						<td><?php echo $i++  ?></td>
            						<td><?php echo $row['fname'] ; ?></td>
            						<td><?php echo $row['lname'] ; ?></td>
            						<td><?php echo $row['fathername'] ; ?></td>
            						<td><?php echo $row['email']; ?></td>
            						<td><?php echo $row['birthdate'] ; ?></td>
            						<td><?php echo $row['mobile'] ; ?></td>
            						<td><?php echo $row['city'] ; ?></td>
            						<td><?php echo $row['district'];  ?></td>
            						<td><?php echo $row['nationality'];  ?></td>
            						<td><?php echo $row['state'];  ?></td>
            						<td><a href="st_image/<?php echo $row['image']; ?>">
            							<img src="st_image/<?php echo $row['image']; ?>"  width="60" height="60" >
            						</a></td>
            						<td>
            							<a style="color:blue;text-decoration: none;" href="edit_student_detail.php?edit_student=<?php echo $row['st_id']; ?>">Edit</a> |
            							<a style="color: red;text-decoration: none;" href="delete_student_detail.php?delete_student=<?php echo $row['st_id']; ?>">Delete</a> |
            						</td>	
            						
            					</tr>
            				</tbody>
                       <?php } ?>
            				
            			</table>
            		</div>	
            		</div>
            	</div>
            </section>
        </div>
    </div>
    		</body>
</html>