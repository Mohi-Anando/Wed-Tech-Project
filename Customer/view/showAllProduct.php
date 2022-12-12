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

</head>
<body>



<br><br><br>
<center><h2>
<i class="bi bi-house-fill"></i>  <a style ="color:SlateBlu;" href="../view/Dashboad.php"> Dashboard  </a>&nbsp;&nbsp;
				 <i class="bi bi-person-circle"></i> <a style ="color:SlateBlu;" href= "../view/ViewProfile.php">View Profile</a> &nbsp;&nbsp;
				 <i class="bi bi-pencil-fill"></i> <a style ="color:SlateBlu;" href="../view/Editprofile.php"> Edit Profile</a>&nbsp;&nbsp;
				 <i class="bi bi-key-fill"></i><a style ="color:SlateBlu;" href="../view/Changepass.php">Change Password</a> &nbsp;&nbsp;
				 <i class="bi bi-cart-check"></i><a style ="color:SlateBlu;" href="../view/showAllProduct.php">Show All Packages</a> &nbsp;&nbsp;
				 <i class="bi bi-search-heart"></i><a style ="color:SlateBlu;" href="../view/himeil22.php">Search</a> &nbsp;&nbsp;
		     </ul>  
		     </h2></center>
    <fieldset>
      <table align="center" width="1000">
        <tr>       
            <tr>
              <th>No</th>
              <th>Title</th>
              <th>People</th>
              <th>Price</th>
              <th>Image</th>
            </tr>
            <?php foreach ($Product as $i => $Product): ?>
              <tr>
                <td><a href="showProduct.php?id=<?php echo $Product['ID'] ?>"><?php echo $Product['Name'] ?></a></td>
                <td><?php echo $Product['buying'] ?></td>
                <td><?php echo $Product['selling'] ?></td>
                <td><?php echo $Product['quantity'] ?></td>
                <td><img width="100px" src="../uploads/<?php echo $Product['image'] ?>" alt="<?php echo $Product['Name'] ?>"></td>
                <td><a href="editProduct.php?id=<?php echo $Product['ID'] ?>"></a>&nbsp<a href="../controller/deleteProduct.php?id=<?php echo $Product['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')"></a></td>
              </tr>
            <?php endforeach; ?>
            </tr>
            </fieldset>
          </td>
        </tr>
      </table>
    </fieldset>
</body>
</html>











