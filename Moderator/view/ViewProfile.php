<?php
session_start();
?>

<!DOCTYPE html>

<html>
     <fieldset>
	 <head>
	     <title> Profile </title>
		 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

table a:hover{

background: gainsboro;

color:black;

}


div a:hover{

background: gainsboro;

color:black;

}
div a:active{

  background: linear-gradient(90deg, rgba(170,170,170,1) 68%, rgba(0,255,252,1) 100%, rgba(0,0,0,0) 100%);

color:black;

}
a{
  text-decoration: none;
  color: black;
}

body{
	font-family: "Allura", cursive;
  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(163,150,150,1) 0%, rgba(0,212,255,1) 100%);

 color:black;
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
	
        
      </ul>
	  
	  
		
    </div>
  </div>
  <p style="float: left;">
			Logged in as<span style ="color:SlateBlu; "  href= "../view/ViewProfile.php"> <?php  echo $_SESSION["Name"]?>| </span>
		    
			<a style="color:SlateBlu;" href="../view/Homepage.php"> <i class="bi bi-box-arrow-left"></i>    </a>  
	

			</p>
</nav>
		<br>
			 
		   <hr>

       <table align="center">
        <h2>
          Profile
        </h2>
        <tr>
          <td>
          Name <span style="color: rgb(255, 255, 255);"> </span>:<?php  echo $_SESSION["Name"]?><hr>

          </td>
          <td>
            
          </td>
          
        </tr>
        <tr>
        <td>
	          Email <span style="color: rgb(255, 255, 255);"> </span> : <?php  echo $_SESSION["Email"]?> <hr>

          </td>
        </tr>
      
        <tr>
        <td>
        Date of birth<span style="color: rgb(255, 255, 255);"> </span>: <?php  echo $_SESSION["dob"]?> <hr>

          </td>
        </tr>
        <tr>
          <td>
          <a tyle ="color:SlateBlu;"  href="../view/EditProfile.php"> Edit Profile </a> 

          </td>
        </tr>
       </table>
       <hr>
		   
       
      
         
		   
	
			
		
	 </body>		
	 
</html>