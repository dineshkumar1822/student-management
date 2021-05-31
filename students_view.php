<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<title>Students profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  transition: 0.3s;

}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}




@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.bg-dark1{
  background-image: linear-gradient(to right, #022c5e ,#06649a, #e1e6e2,#e1e6e2);
}
#navbtn{
  background-color: #06649a;
  color: white;
  border-radius:  0;
  margin-left: 3px;
  overflow-x: hidden;
}
#navbtn:hover{
  background-color: white;
  color: #06649a;
  border-bottom: none;
  border-top:2px solid #06649a ;
  border-right:1px solid #06649a ;
  border-left:1px solid #06649a ;
}


.sd{
  padding: 15px 0 15px 10px;
  font-weight: 500;
  font-size: 25px;
}
#tab-content{
  padding-top: 50px;
  background-color: 
}

.form-control{
  border:none;
  border-radius: 0;
  border-bottom: 1px solid black;
  padding-bottom: 10px;
}

label{
  font-weight: 700;
}
td{
  padding: 10px 20px 10px 20px;
  /*text-align: center;*/
}
.tdh{
  font-size: 15px;
  font-weight: 700;
}

</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="index.html">Home</a>
  <a href="#">Sports</a>
  <a href="#">Achievements</a>
  <a href="#">Contact</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  
  <div class="container">
    <p class="text-white font-weight-bold bg-dark1 sd">Student Details</p>
    <div class="row">
      <div class=" col-md-12 col-sm-12">
   <nav>
  <div class="nav nav-tabs " id="nav-tab" role="tablist">
    <button id="navbtn" class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Profile</button>
    <button  id="navbtn" class="nav-link tabbtn" id="nav-documents-tab" data-bs-toggle="tab" data-bs-target="#nav-documents" type="button" role="tab" aria-controls="nav-documents" aria-selected="false">Documents</button>
    <button id="navbtn"class="nav-link tabbtn" id="nav-reports-tab" data-bs-toggle="tab" data-bs-target="#nav-reports" type="button" role="tab" aria-controls="nav-reports" aria-selected="false">Reports</button>
    <button id="navbtn" class="nav-link tabbtn" id="nav-placements-tab" data-bs-toggle="tab" data-bs-target="#nav-placements" type="button" role="tab" aria-controls="nav-placements" aria-selected="false">Placements</button>
  </div>
</nav>
<div id="tab-content" class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profiletab">
    <div class="row">
       <p  style="font-weight: 700; font-size: 20px; color:#06649a; ">Personnel Details</p>
      <div class="col-md-10 col-sm-10">
        
     
<table class=" table table-bordered table-striped col-sm-10">
  <tbody>
    <tr><td class="tdh">Name of the student</td><td>dinesh kumar</td></tr>
    <tr><td class="tdh">Last Name</td><td>V</td></tr>
    <tr><td class="tdh"> Father Name</td><td>Vinayagam j</td></tr>
    <tr><td class="tdh">E-mail</td><td>dineshdk1822@gmail.com</td></tr>
    <tr><td class="tdh">Nationality</td><td>Indian</td></tr>
    <tr><td class="tdh">Contact Number</td><td>7810003899</td></tr>
    <tr><td class="tdh">State of the student</td><td>Tamil Nadu</td></tr>
    <tr><td class="tdh">City</td><td>Vellore</td></tr>
   

  </tbody>
</table>
     
    </div>
      <div class="c0l-md-2 col-sm-2">
        <img src="dk.jpg" class="img-fluid ">
        <table class="table table-bordered table-striped">
          
          
        </table>
      </div>
    
  </div>
  <div class="tab-pane fade" id="nav-documents" role="tabpanel" aria-labelledby="nav-documents-tab">...</div>
  <div class="tab-pane fade" id="nav-reports" role="tabpanel" aria-labelledby="nav-reports-tab">566</div>
  <div class="tab-pane fade" id="nav-placements" role="tabpanel" aria-labelledby="nav-placements-tab">566</div>
</div>
      
        
      </div>
    </div>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
