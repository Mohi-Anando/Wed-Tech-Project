<?php
session_start();
?>

<!DOCTYPE html>

<html>
<fieldset>
     
	 <head>
	     <title> DASHBOARD </title>
		 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>




<style>

div a:hover{

background: gainsboro;

color:black;

}

body{
	font-family: "Allura", cursive;
  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(163,150,150,1) 0%, rgba(0,212,255,1) 100%);
 
  text-align: center;
}

</style>
	 </head>
	     
	 <body>



	 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../view/Dashboad.php">Dashboad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/ViewProfile.php">View Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/Editprofile.php">Edit Profile</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="../view/Changepass.php">Change Password</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="../view/showAllProduct.php">Packages</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="../view/himeil22.php">Search</a>
        </li>
		<li >
		<a class="nav-link" href="#" onclick="loadDoc()" >About Us</a>
	
	
		</li>
		<li class="nav-item">
          <a class="nav-link" href="#" onclick="loadDoc1()">Contact</a>
        </li>
        
      </ul>
	  
	  
		
    </div>
  </div>
  <p style="float: left;">
			Logged in as<span style ="color:SlateBlu; "  href= "../view/ViewProfile.php"> <?php  echo $_SESSION["Name"]?>| </span>
		    
			<a style="color:SlateBlu;" href="../view/Homepage.php"> <i class="bi bi-box-arrow-left"></i>    </a>  
	

			</p>
</nav>
	
	   
		   
		     <hr>
	     
		  
		</fieldset>

		<fieldset>

		<legend align="center"><h1  > Welcome to <?php echo $_SESSION["Name"]?> the moderator of our page <h1/></legend>
			<span>  </span>
		</fieldset>
		
		


    <marquee behavior="scroll" direction="left" scrollamount="12"><h4>Welcome to Dream Heaven page, where you can find the best event management!</h4></marquee>




<!--slide animation-->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="500">
      <img src="../uploads/pp1.jpg" class="d-block w-100" alt="..." height="500px" >
      <div class="carousel-caption d-none d-md-block">
        <h5  style="color:black;background-color:aliceblue; border: 1px solid black;">Rakib and Rina's Wedding</h5>
        <p  style="color:black;background-color:aliceblue; border: 1px solid black;">“Once in awhile, right in the middle of an ordinary life, love gives us a fairy tale.”</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../uploads/pp2.jpg" class="d-block w-100" alt="..." height="500px" >
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black;background-color:aliceblue; border: 1px solid black;">Pritom Hasan and Shahtaj Monira Hashem's wedding</h5>
        <p  style="color:black;background-color:aliceblue; border: 1px solid black;">“A hundred hearts would be too few to carry all my love for you.”</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../uploads/pp3.jpg" class="d-block w-100" alt="..." height="500px">
      <div class="carousel-caption d-none d-md-block">
        <h5  style="color:black;background-color:aliceblue; border: 1px solid black;">Pritom Hasan and Shahtaj Monira Hashem's wedding</h5>
        <p  style="color:black;background-color:aliceblue; border: 1px solid black;">“Gravitation is not responsible for people falling in love.”</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>

<!-- Hover Welcome-->
<div onmouseover="mOver(this)" onmouseout="mOut(this)" 
style="background-color:white;width:300px;height:50px;padding:20px;text-align:center; margin-left: auto; margin-right: auto;">
Welcome to our Page</div>




<script>
function mOver(obj) {
  obj.innerHTML = "Welcome to our Page"
}

function mOut(obj) {
  obj.innerHTML = "Hope your have a good day!"
}

function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "ajax_info.txt");
  xhttp.send();
}


function loadDoc1() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("d1").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "contact.php");
  xhttp.send();
}






</script>
<br>
<div id="demo">
 </div>

 <div id="d1">
 </div>

 

		

		
	 </body>
	 </fieldset>
</html>	 