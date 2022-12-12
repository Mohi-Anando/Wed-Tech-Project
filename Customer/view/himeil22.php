<?php
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
		table,tr,th{
			border:1px solid rosybrown;
			padding:25px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>




	  
<br><br><br>
<center><h2>
            <ul>
			<i class="bi bi-house-fill"></i>  <a style ="color:SlateBlu;" href="../view/Dashboad.php"> Dashboard  </a>&nbsp;&nbsp;
				 <i class="bi bi-person-circle"></i> <a style ="color:SlateBlu;" href= "../view/ViewProfile.php">View Profile</a> &nbsp;&nbsp;
				 <i class="bi bi-pencil-fill"></i> <a style ="color:SlateBlu;" href="../view/Editprofile.php"> Edit Profile</a>&nbsp;&nbsp;
				 <i class="bi bi-key-fill"></i><a style ="color:SlateBlu;" href="../view/Changepass.php">Change Password</a> &nbsp;&nbsp;
				 <i class="bi bi-cart-check"></i><a style ="color:SlateBlu;" href="../view/showAllProduct.php">Show All Packages</a> &nbsp;&nbsp;
				 <i class="bi bi-search-heart"></i><a style ="color:SlateBlu;" href="../view/himeil22.php">Search</a> &nbsp;&nbsp;


		     </ul>  
		     </h2></center>
   

<body>
<table id="main" border="1" cellspacing="0">
    <tr>
        <td id="header">
       <font color='Green'> <h1>Live Action Search bar</h1>

        <div id="search-bar">
            <label>Search :</label>
            <input type="text" id="search" autocomplete="off"><br><br>
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
</script></font>
</body>
</html>