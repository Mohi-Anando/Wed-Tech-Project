<?php 

require_once '../controller/productInfo.php';
$Product = fetchProduct($_GET['id']);


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Edit Product</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css"/> 
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
 








</head>


<style>
  div a:hover{

background: gainsboro;

color:black;

}

body{
	font-family: "Allura", cursive;
  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(163,150,150,1) 0%, rgba(0,212,255,1) 100%);

 color:black;
  text-align: center;
}



</style>
<body>
  <!-- ...............................Header Start....................... -->
  
  
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
		<li  >
			
	
		</li>
        
      </ul>
	  
	  
		
    </div>
  </div>
 
</nav>
    
<br><br><br>
    <!-- .................................Main Content..................... -->
    <fieldset>
      <table align="center" width="auto">
        <tr>
          
          <td>
            <fieldset>
             
            <form action="../controller/updateProduct.php" method="POST" enctype="multipart/form-data">
            <label for="name">No:</label><br>
            <input value="<?php echo $Product['Name'] ?>" type="text" name="name" id="name" onkeyup="nameValidation()">
            <br>
            <span id="nameErr"></span> 
            <br>
            <label for="buying">Title:</label><br>
            <input value="<?php echo $Product['buying'] ?>" type="text" id="buying" name="buying" onkeyup="buyValidation()" ><br>
            <span id="buyingErr"></span> 
            <br>
            <label for="selling">People:</label><br>
            <input value="<?php echo $Product['selling'] ?>" type="text" id="selling" name="selling" onkeyup="peopleValidation()" ><br>
            <span id="peopleErr"></span> 
            <br>
            <label for="quantity">Price:</label> <br>
            <input value="<?php echo $Product['quantity'] ?>" type="text" id="quantity" name="quantity" onkeyup="priceValidation()"><br> 
            <span id="priceErr"></span> 
            <br> <br>
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <input type="submit" name = "updateProduct" value="Update">
            <input type="reset"> 
            </form> 
            </fieldset>
          </td>
        </tr>
      </table>
    </fieldset>



    <script>
      function nameValidation()
  {
    var name, msg;

    name = document.getElementById("name").value;

    if(name==""){
      msg = "*No is empty";
    }
    else {
      msg=""
    }
    document.getElementById("nameErr").innerHTML=msg;
  }



      function buyValidation()
  {
    var buying, msg;

    buying = document.getElementById("buying").value;

    if(buying==""){
      msg = "*Title is empty";
    }
    else {
      msg=""
    }
    document.getElementById("buyingErr").innerHTML=msg;
  }



      function peopleValidation()
  {
    var selling, msg;

    selling = document.getElementById("selling").value;

    if(selling==""){
      msg = "*People is empty";
    }
    else {
      msg=""
    }
    document.getElementById("peopleErr").innerHTML=msg;
  }


      function priceValidation()
  {
    var quantity, msg;

    quantity = document.getElementById("quantity").value;

    if(quantity==""){
      msg = "*Price is empty";
    }
    else {
      msg=""
    }
    document.getElementById("priceErr").innerHTML=msg;
  }

    </script>
   
</body>
</html>











