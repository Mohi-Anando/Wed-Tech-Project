
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="shortcut icon" href="../../assets/icon.png">
<style>
  div a:hover{

background: gainsboro;

color:black;

}
</style>

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
              <li><a href="./searchApplicantList.php">Search Castomer List</a></li>
              <li><a href="./donnerDeleteAccount.php">Delete Account</a></li>
              <li><a href="addProduct.php"> Add Employ</a></li>
              <li><a href="showAllProduct.php"> Show all Employ</a></li>
              <li><a href="searchProduct.php"> Search Employ</a></li>
            </ul>
          </td>
          <td>
            <fieldset>
             
            <!-- [SEARCH FORM] -->
            <form method="post" action="../controller/findProduct.php">
              <h1>SEARCH FOR Employ</h1>
              <input type="text" name="p_name" />
              <input type="submit" name="findProduct" value="Search"/>
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











