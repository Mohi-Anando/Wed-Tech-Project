<?php
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
		div a:hover{

background: gainsboro;

color:black;

}

body{
	font-family: "Allura", cursive;
  
  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(163,150,150,1) 0%, rgba(0,212,255,1) 100%);
  text-align: center;
}


	</style>
</head>


   

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../view/Dashboad.php">Dashboad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/ViewProfile.php">View Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/Editprofile.php">Edit Profile</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="../view/Changepass.php">Change Password</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="../view/showAllProduct.php">Packages</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="../view/himeil22.php">Search</a>
        </li>
		<li  >
			
	
		</li>
        
      </ul>
	  
	  
		
    </div>
  </div>
 
</nav>
<br><br>
<table id="main" border="1" align="center">
    <tr>
        <td id="header">
       <font color='red'> <h1>Search the Package</h1>

        <div id="search-bar">
            <label>Search :</label>
            <input type="text" id="search" autocomplete="off" name="search" placeholder="search by title" onkeyup="searchValidation()" ><br><br>
            <span id="searchErr"></span> 
          </div>
        </td>
    </tr>

    <tr>
        <td id="table-data">
        </td>
    </tr>
</table>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    // Table show
    function loadTable(){
        $.ajax({
        url : "ajax-load.php",
        type : "POST",
        success : function(data){
            $("#table-data").html(data);
        }
        });
    }
    loadTable();

    // Live Search
    $("#search").on("keyup",function(){
    var search_term = $(this).val();

    $.ajax({
        url: "ajax-live-search.php",
        type: "POST",
        data : {search:search_term },
        success: function(data) {
            $("#table-data").html(data);
        }
    });
    });
});

function searchValidation()
  {
    var search, msg;

    search = document.getElementById("search").value;

    if(search==""){
      msg = "*username is empty";
    }
    else {
      msg=""
    }
    document.getElementById("searchErr").innerHTML=msg;
  }




</script></font>
</body>
</html>