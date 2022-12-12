<?php
session_start();
?>

<!DOCTYPE HTML>  
<html>
<fieldset>
  <head> <title>  Edit Profile </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
     .error {color: #FF0000;}
    </style>

<style>

div a:hover{

background: yellow;

color:black;

}

</style>

 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css"/> 
    </head>
    <body>  
    
	 <?php
	require "../view/dnav.php"
?>
	  
      </fieldset><br>
	   

    
	  
	  
      
          <form method="post" action="../Controller/Edit.php"> 
		  <fieldset>
		  
		       <legend align="center"><h1> EDIT PROFILE </h1></legend>
		       <p align="center">
		  
		       <b> <p align="center" <label for="name"> Name : </label> </b> 
			   <input type="text" name="name" value="<?php  echo $_SESSION["Name"]?>"> 
			   
               <hr>
			  
			    <b> <p align="center" <label for="email"> Email : </label> </b>
                <input type="text" name="email" value="<?php  echo $_SESSION["Email"]?>">
                
                <hr>
                <p align="center">
                <b>Date of Birth:
                     <input type="date" name="dob"  value="<?php  echo $_SESSION['dob']?>">
                      <br>
                     <hr></p>

		        <b> <p align="center" <label for="gender"> Gender : </label></b>
                <input name="gender" value="<?php  echo $_SESSION["Gender"]?>" > 
  
               

                 <h3 align="center"><input type="submit" name="submit" value="Submit"> </h3>
				  <hr>

                 </p>

				</fieldset>
                </form> <br>

               
                </fieldset>
   <?php include 'footer.php';?> 
   </body>
</html>