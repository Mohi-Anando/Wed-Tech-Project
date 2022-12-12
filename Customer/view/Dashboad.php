<?php
session_start();
?>

<!DOCTYPE html>

<html>
<fieldset>
     
	 <head>
	     <title> Home </title>
		 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<style>

* {
    box-sizing: border-box;
  }
  .pp1 {
    width: 40%;
    float: left;
    margin-left: 80px;
    margin-right: 40px;
    padding: 30px;
  }
  .pp1 img {
    height: 400px;
  }

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
	   

		<fieldset>

		<legend align="center"><h1  > Welcome to <?php echo $_SESSION["Name"]?> of our hononerable customer<h1/></legend>
			<span> <p> </p> </span>
		</fieldset>
		
	


    <table align="center">
        <tr>
            <td>
            <img src="../uploads/pp1.jpg" height="350" width="400">
            <center><p>Akib & Rina's wedding</p></center>
            </td>
            <td>
            <img src="../uploads/pp2.jpg" height="350" width="400">
            <center><p>Pritom Hasan wedding</p></center>
            </td>
            <td>
            <img src="../uploads/pp3.jpg" height="350" width="400">
            <center><p>Pritom and Shahtaj monira's wedding</p></center>
            </td>
        </tr>
        <tr>
        <td>
            <img src="../uploads/pp5.jpg" height="350" width="400">
            <center><p>True love stories never have endings</p></center>
            </td>
            <td>
            <img src="../uploads/pp6.jpg" height="350" width="400">
            <center><p>Where there is love,there is a life</p></center>
            </td>
            <td>
            <img src="../uploads/pp15.jpg" height="350" width="400">
            <center><p>We've decided on forever</p></center>
            </td>
        </tr>
    </table>




		
<div>

<?php
       include 'footer.php';
       ?>
</div>
	 </body>
	 </fieldset>
</html>	 