
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>City Gerden</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
</head>
<body>
  <!-- ...............................Header Start....................... -->
  
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="./donnerDashboard.php">Dashboard</a>&nbsp;
           
            
            
          </td>
        </tr>
      </table>
      <table align="right">
        <tr>
            <td>
              <a href="../../controller/logout.php">Logout</a>
            </td>
        </tr>

    </table>

    </fieldset>
    <!-- .................................Header Close..................... -->


    

    <!-- .................................Main Content..................... -->
    <fieldset>
      <table align="center" width="1000">
        <tr>
          <td>
            <h3>Account</h3>
            <hr>
            <ul>
            <li><a href="./donnerDashboard.php">Dashboard</a></li>
              <li><a href="./viewProfile.php">View profile</a></li>
              <li><a href="./donnerUpdateProfile.php">Update Profile</a></li>
              <li><a href="./donnerChangeProfilePic.php">Change Profile Picture</a></li>
              <li><a href="./donnerChangePassword.php">Change Password</a></li> 
              <li><a href="./searchApplicantList.php">Search Applicant List</a></li>
              <li><a href="./donnerDeleteAccount.php">Delete Account</a></li>
			  <li><a href="addProduct.php"> Add product</a></li>
              <li><a href="showAllProduct.php"> Show all product</a></li>
              <li><a href="searchProduct.php"> Search product</a></li>
            </ul>
          </td>
          <td>
		  
	
		  <thead>
		<tr>
			<th>User_id</th>
			<th>E_name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedProduct as $i => $user): ?>
			<tr>
				<td><a href="../../../showProduct.php?id=<?php echo $user['ID'] ?>"><?php echo $user['ID'] ?></a></td>
				<td><?php echo $user['Name'] ?></td>
				<td><a href="../../../editProduct.php?id=<?php echo $user['ID'] ?>">Edit</a>&nbsp<a href="deleteProduct.php?id=<?php echo $user['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>


            </fieldset>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>

    <!-- .................................Footer Close..................... -->
</body>
</html>











