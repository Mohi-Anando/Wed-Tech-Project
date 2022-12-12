<html>
<head>
	<title>Header</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="style.css"/>
  
<style>
body {
	background: linear-gradient(90deg, rgba(0,212,255,1) 6%, rgba(170,170,170,1) 100%, rgba(2,0,36,1) 100%);
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

div a:hover{

background: yellow;

color:black;

}
</style>
<body>	
	<fieldset>
		<div class="header"><h5>
    <div>

	<div class="navigation"><b>
			
				<div class="homel"><a style ="color:SlateBlu;" href="../../index.php">  Home<span> |</span><i class="bi bi-house"></i></a></div>
				<div class="login"><a href="Login.php" > Log in<span> |</span><i class="bi bi-box-arrow-in-right"></i></a></div>
				<div class="registration"><a href="#" onclick="loadDoc1()"> Registration<span> |</span><i class="bi bi-plus-square"></i></a></div>
				</div>	</div>
		</div></h5>
	</fieldset>

  <div id="demo">
 </div>

 <div id="d1">
 </div>



	<script>
function loadDoc1() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("d1").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "Registration.php");
  xhttp.send();
}
function loadDoc2() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "Login.php");
  xhttp.send();
}




</script>





</body>
</html>