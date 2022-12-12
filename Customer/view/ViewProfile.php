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



<style>

div a:hover{

background: yellow;

color:black;

}

</style>
	 </head>
	     
	 <body>
	 
	   
	 <?php
	require "../view/dnav.php"
?>
	  <br>
			 
		   <div>
		   
		   
	<fieldset>
		    <legend align="center"><h1> PROFILE </h1></legend>
			
			<h3 align="center">
		  <!-- 
			<img  src="1.png" height="200px" width="250px"  > </img> <br>
			<a align="right" href=" "> Change </a> <br><br>
			
-->
			
		      Name <span style="color: rgb(255, 255, 255);"> </span>:<?php  echo $_SESSION["Name"]?><hr>
	          Email <span style="color: rgb(255, 255, 255);"> </span> : <?php  echo $_SESSION["Email"]?> <hr>
		      Gender<span style="color: rgb(255, 255, 255);"> </span>: <?php  echo $_SESSION["Gender"]?> <hr>
			 Date of birth<span style="color: rgb(255, 255, 255);"> </span>: <?php  echo $_SESSION["dob"]?> <hr>


		   
		    <a tyle ="color:SlateBlu;"  href="../view/EditProfile.php"> Edit Profile </a>
			
			</h3>
			</fieldset>
		    </fieldset>
			
		</div>
		</fieldset>
	 </body>		
	  <?php
       include 'footer.php';
       ?>

</html>