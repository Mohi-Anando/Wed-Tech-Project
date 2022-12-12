<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
    
div a:hover{

background: yellow;

color:black;

}
</style>
</head>
<body>
<br>
	
		
    <h3 align= "right">

    Logged in as<a style ="color:SlateBlu;"  href= "../view/ViewProfile.php"> <?php  echo $_SESSION["Name"]?>| </a>
 
    <a style="color:SlateBlu;" href="../view/Homepage.php"> <i class="bi bi-box-arrow-left"></i> Logout   </a>  
    


</h3>

<hr>

</div> 

<div>
 <fieldset>

<legend> <h2> <u> Account </u> </h2></legend> <style="color: rgb(255, 255, 255);"> </style><h1 align="center" ><h1/> 

 

 <h2>
 <ul>
 <i class="bi bi-house-fill"></i>  <a style ="color:SlateBlu;" href="../view/Dashboad.php"> Dashboard  </a>&nbsp;&nbsp;
      <i class="bi bi-person-circle"></i> <a style ="color:SlateBlu;" href= "../view/ViewProfile.php">View Profile</a> &nbsp;&nbsp;
      <i class="bi bi-pencil-fill"></i> <a style ="color:SlateBlu;" href="../view/Editprofile.php"> Edit Profile</a>&nbsp;&nbsp;
      <i class="bi bi-key-fill"></i><a style ="color:SlateBlu;" href="../view/Changepass.php">Change Password</a> &nbsp;&nbsp;
      <i class="bi bi-cart-check"></i><a style ="color:SlateBlu;" href="../view/showAllProduct.php">Show All Packages</a> &nbsp;&nbsp;
      <i class="bi bi-search-heart"></i><a style ="color:SlateBlu;" href="../view/himeil22.php">Search</a> &nbsp;&nbsp;
     


  </ul>  
  </h2>



  <hr>


</fieldset>    





</body>
</html>