<?php  
require_once '../controller/productInfo.php';
$Product = fetchAllProduct();

?>


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
  
  body{
	background-image: url(../uploads/pp20.jpg);
	background-repeat: no-repeat;
  	background-attachment: fixed;
  	background-size: cover;
	
  }
</style>
</head>
<body>


  <!-- ...............................Header Start....................... -->
  

  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-white bg-white static-top">
  <div class="container">
    <a class="navbar-brand" href="../view/Dashboad.php">
      <img src="../uploads/logo.png" alt="..." height="36">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../view/Dashboad.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/showAllProduct.php">Show All Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/addProduct.php">Add Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/searchMember/showMember.php">Show All Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/himeil22.php">Search</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            My Account
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../view/ViewProfile.php">View Profile</a></li>
            <li><a class="dropdown-item" href="../view/Editprofile.php">Edit Profile</a></li>
            <li><a class="dropdown-item" href="../view/Changepass.php">Change Password</a></li>
            
           
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

















    <!-- .................................Header Close..................... -->


    <br>

    <!-- .................................Main Content..................... -->
    <fieldset>
      <table align="center" width="1000">
        <tr>
               
         
            <tr>
              <th>No</th>
              <th>Title</th>
              <th>People</th>
              <th>Price</th>
              <th>Image</th>
              <th>Delete</th>
            </tr>
            <?php foreach ($Product as $i => $Product): ?>
              <tr>
                <td><a href="showProduct.php?id=<?php echo $Product['ID'] ?>"><?php echo $Product['Name'] ?></a></td>
                <td><?php echo $Product['buying'] ?></td>
                <td><?php echo $Product['selling'] ?></td>
                <td><?php echo $Product['quantity'] ?></td>
                <td><img width="100px" src="../uploads/<?php echo $Product['image'] ?>" alt="<?php echo $Product['Name'] ?>"></td>
                <td><a href="editProduct.php?id=<?php echo $Product['ID'] ?>"></a>&nbsp<a href="../controller/deleteProduct.php?id=<?php echo $Product['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
              </tr>
            <?php endforeach; ?>
            
            </tr>
             


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











