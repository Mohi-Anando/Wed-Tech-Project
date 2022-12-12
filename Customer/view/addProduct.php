
<?php
    
    require_once('../Model/donnerModel.php');
    session_start();
   // $userName = $_SESSION['username'];
   // $user = getUserByUsername($userName); 


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>City Gerden</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
 
</style>
</head>
<body>



<?php
	require "../view/dnav.php"
?>

    <!-- .................................Header Close..................... -->


    

    <!-- .................................Main Content..................... -->
    <fieldset>
      <table align="center" width="1000">
        <tr>
          
          <td>

          <form action="../controller/createProduct.php" method="POST" enctype="multipart/form-data">
            <label for="name">No:</label>
            <input type="text" id="name" name="name"><br>
            <label for="buying">Title:</label>
            <input type="text" id="buying" name="buying"><br>
            <label for="selling">People:</label>
            <input type="text" id="selling" name="selling"><br>
            <label for="quantity">Price:</label>
            <input type="text" id="quantity" name="quantity"><br> <br>
            <input type="file" name="image"><br><br>
            <input type="submit" name = "createProduct" value="Create">
            <input type="reset"> 
</form> 

         </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
  

    <!-- .................................Footer Close..................... -->
</body>
</html>

