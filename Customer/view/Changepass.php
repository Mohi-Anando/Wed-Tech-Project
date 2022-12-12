
<!DOCTYPE html>
<html >
<fieldset>
  <head> <title>CHANGE PASSWORD </title>
     <style>
     .error {color: #FF0000;}
    </style>
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
		
        <div> 
        
        
            <h2 align= "right">
      
      
            
            <a style="color:red;" href="../view/Homepage.php"> <i class="bi bi-box-arrow-left"></i>  Logout </a>  
            
      
       
        </h2>
        
       <hr>
       
     </div> 
         <fieldset><fieldset>
         
       <legend><h2> <u> Account </u> </h2></legend> 
        
         
        
         <h2>
         <ul>
         <i class="bi bi-house-fill"></i>  <a style ="color:SlateBlu;" href="../view/Dashboad.php"> Dashboard  </a>&nbsp;&nbsp;
				 <i class="bi bi-person-circle"></i> <a style ="color:SlateBlu;" href= "../view/ViewProfile.php">View Profile</a> &nbsp;&nbsp;
				 <i class="bi bi-pencil-fill"></i> <a style ="color:SlateBlu;" href="../view/Editprofile.php"> Edit Profile</a>&nbsp;&nbsp;
				 <i class="bi bi-key-fill"></i><a style ="color:SlateBlu;" href="../view/Changepass.php">Change Password</a> &nbsp;&nbsp;
				 <i class="bi bi-cart-check"></i><a style ="color:SlateBlu;" href="../view/showAllProduct.php">Show All Packages</a> &nbsp;&nbsp;
				 <i class="bi bi-search-heart"></i><a style ="color:SlateBlu;" href="../view/himeil22.php">Search</a> &nbsp;&nbsp;
                       

              
          </ul>  
          </h2></fieldset>
      </fieldset><br>

    
	      <div>
		  <br> <br>
		  <fieldset align="center">
         
          <form  method="post" action="../Controller/Pass.php"> <br>
          	<fieldset>
		  
		  <legend><h2 align="center"> CHANGE PASSWORD  </h2></legend>
		  
		  <p align="center">
		  
	  
          <label>Current Password:</label> 
		  <input type="password" name="currentPassword">
          
          <br/><br/>
		  
		  
          <label style="color:green">New Password:</label>
          <input type="password" name="newpassword">
         
          <br/><br/>
		  
		  
          <label style="color:Red">Retype New Password:</label>
          <input type="password" name="rnewpassword" >
    
          
		  
		  <hr> 
		 
         <h4 align = "center"> <input type="submit" name="submit" value="Submit"> </h4>
		 
          <br/>
		    
		  </p>


				
                 <br>
               </fieldset>
      </form>


      </fieldset>  
  </body>
      <?php include 'footer.php';?>
        
</html>