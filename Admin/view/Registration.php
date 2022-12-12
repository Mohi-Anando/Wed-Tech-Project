

 <!DOCTYPE html>  
 <html>  
      <head>  
        <style>
          p{
            color: red;
          }
        </style>
           <title>Registration</title>  
    
<link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

      <body>  
      <?php include 'Navvar.php';?>
      </head>  
 <hr>



           <div class="container" >  	<fieldset>
           <legend>REGISTRATION</legend>               
                <form action="../Controller/Adduser.php" method="post" enctype="multipart/form-data"> 
                <fieldset>
                     <br />  
                     <label>Name</label>  <div>
                     <input type="text" name="name" class="form-control" id="name" onkeyup="nameValidation()"/><p id="nameErr"></p> </div>
                     <label>E-mail</label>
                     <input type="text" name = "email" id="email" class="form-control" onkeyup="emailValidation()" /><p id="emailErr"></p> <br />
                     <label>User Name</label><div>
                     <input type="text" name = "un" class="form-control"  id="username" onkeyup="usernameValidation()"/><p id="usernameErr"></p></div>
                     <label>Password</label><div>
                     <input type="password" name = "pass" class="form-control"   id="password" onkeyup="checkPass()"/><br /><p id="passwordErr"></p></div>
                     <label>Confirm Password</label><div>
                     <input type="password" name = "Cpass" class="form-control"  id="password" onkeyup="checkPass()"/><br /><p id="passwordErr"></p></div><br />

                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>
                     </fieldset><fieldset>
                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob"> <br><br>

                     
                    </fieldset> 
                     
                    <fieldset>
        <legend>  PROFILE PICTURE  </legend>
             <img  src="../uploads/81tOUsc7.jpg" width="100px" height="100px" title="profile pic"> </img> <br>
        
            <span style="color: rgb(255, 255, 255);">  </span>  
            <input type="file" name="image"><br><br>
            </fieldset>	 
        <div>
         <hr>
         <input type="submit" name="submit" value="Append" class="btn btn-info" /><br /> 
       </div>
<br><br><br><br>


    
       <script>




function nameValidation()
  {
    var name, msg;

    name = document.getElementById("name").value;

    if(name==""){
      msg = "*Name is empty!";
    }

    
    else {
      msg=""
    }
    document.getElementById("nameErr").innerHTML=msg;
  }

  
 //email
function emailValidation()
  {
    var email, msg;

    email = document.getElementById("email").value;

    if(email==""){
      msg = "*Email is empty!";
    }

    
    else {
      msg=""
    }
    document.getElementById("emailErr").innerHTML=msg;
  }

  




  function usernameValidation()
  {
    var username, msg;

    username = document.getElementById("username").value;

    if(username==""){
      msg = "*username is empty";
    }
    else if(username.length<3){
      msg="*Must be 3 characters"
    }else {
      msg=""
    }
    document.getElementById("usernameErr").innerHTML=msg;
  }


  function checkPass(){
        	if (document.getElementById("password").value == "") {
			  	document.getElementById("passwordErr").innerHTML = "<b>Password can't be blank";
			  	document.getElementById("password").style.borderColor = "red";
			}else{
				document.getElementById("passwordErr").innerHTML = "";
			  	document.getElementById("password").style.borderColor = "black";
			}
        }




  
</script>
                     
                     
     
                      
                </form> 
                 
                  
           <br />  
           <?php include 'footer.php';?>
      </body>  
 </html>  