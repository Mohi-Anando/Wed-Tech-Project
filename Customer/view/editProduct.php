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
  <title> City Gerden</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
  <!-- ...............................Header Start....................... -->
  
  <br><br><br>
<center><h2>
            <ul>
            <i class="bi bi-house-fill"></i>  <a style ="color:SlateBlu;" href="../view/Dashboad.php"> Dashboard  </a>&nbsp;&nbsp;
				 <i class="bi bi-person-circle"></i> <a style ="color:SlateBlu;" href= "../view/ViewProfile.php">View Profile</a> &nbsp;&nbsp;
				 <i class="bi bi-pencil-fill"></i> <a style ="color:SlateBlu;" href="../view/Editprofile.php"> Edit Profile</a>&nbsp;&nbsp;
				 <i class="bi bi-key-fill"></i><a style ="color:SlateBlu;" href="../view/Changepass.php">Change Password</a> &nbsp;&nbsp;
				 <i class="bi bi-cart-check"></i><a style ="color:SlateBlu;" href="../view/showAllProduct.php">Show All Packages</a> &nbsp;&nbsp;
				 <i class="bi bi-plus-circle"></i><a style ="color:SlateBlu;" href="../view/addProduct.php">Add Packages</a> &nbsp;&nbsp;
				 <i class="bi bi-search-heart"></i><a style ="color:SlateBlu;" href="../view/himeil22.php">Search</a> &nbsp;&nbsp;
         <i class="bi bi-search-heart"></i><a style ="color:SlateBlu;" href="../view/searchMember/showMember.php"> Member Search</a> &nbsp;&nbsp;
                     

		     </ul>  
		     </h2></center>
    <!-- .................................Header Close..................... -->


    
<br><br><br>
    <!-- .................................Main Content..................... -->
    <fieldset>
      <table align="center" width="1000">
        <tr>
          
          <td>
            <fieldset>
             
            <form action="../controller/updateProduct.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input value="<?php echo $Product['Name'] ?>" type="text" id="name" name="name"><br>
            <label for="buying">Title:</label>
            <input value="<?php echo $Product['buying'] ?>" type="text" id="buying" name="buying"><br>
            <label for="selling">Contract Number:</label>
            <input value="<?php echo $Product['selling'] ?>" type="text" id="selling" name="selling"><br>
            <label for="quantity">Selary:</label>
            <input value="<?php echo $Product['quantity'] ?>" type="text" id="quantity" name="quantity"><br> <br>
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <input type="submit" name = "updateProduct" value="Update">
            <input type="reset"> 
          </form> 
            </fieldset>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
  
    <!-- .................................Footer Close..................... -->
</body>
</html>











