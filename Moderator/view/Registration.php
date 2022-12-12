<!DOCTYPE html>  
<html>  
<head>  
<title>Registration</title>      
<link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head> 
<body>  
<?php include 'Navvar.php';?>
<hr>
      <div class="container" > 
      <form action="../Controller/Adduser.php" method="post" name="myForm" enctype="multipart/form-data">
       <div class="formdesign" id="name">
            Name: <input type="text" name="name" class="form-control" id="name" onkeyup="validateForm()"><b>
                <span class="formerror"> </span></b>
      </div> <br>
      <div class="formdesign" id="email">
            Email: <input type="text" name = "email" class="form-control" onkeyup="validateForm()" ><b> 
                <span class="formerror"> </span></b>
      </div><br>

        <div class="formdesign" id="username">
        User Name<input type="text" class="form-control" name="un" id="username" onkeyup="validateForm()" ><b> 
        <span class="formerror"> </span></b>
        </div><br>

        <div class="formdesign" id="address">
            Address: <input type="text" class="form-control" name="faddress" onkeyup="validateForm()"><b>
                <span class="formerror"> </span></b>
        </div> <br>
        
        <div class="formdesign" id="phone">
            Phone: <input type="phone" class="form-control" name="fphone" onkeyup="validateForm()"><b>
                <span class="formerror"></span></b>
        </div><br>

        <div class="formdesign" id="pass">
            Password: <input type="password" name = "pass" class="form-control"   id="password" onkeyup="validateForm()"><b>
                <span class="formerror"</span></b>
        </div> <br>

        <div class="formdesign" id="cpass">
            Confirm Password: <input type="password" name = "Cpass" class="form-control"  id="password" onkeyup="validateForm()"><b>
                <span class="formerror"></span></b>
        </div> <br>

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
        <div>
        <img  src="../uploads/81tOUsc7.jpg" width="100px" height="100px" title="profile pic"> </img> <br>
            <span style="color: rgb(255, 255, 255);">  </span>  
            <input type="file" name="image"><br><br>
            </fieldset>	 
        <div>
         <hr>
         <input type="submit" name="submit" value="Registration" class="btn btn-info" /><br /> 
       </div>
      </div>
        </form>

<script>

function clearErrors(){

errors = document.getElementsByClassName('formerror');
for(let item of errors)
{
    item.innerHTML = "";
}

}

function seterror(id, error){
//sets error inside tag of id 

element = document.getElementById(id);
element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm(){
var returnval = true;
clearErrors();

//perform validation and if validation fails, set the value of returnval to false
var name = document.forms['myForm']["name"].value;
if (name.length<5){
    seterror("name", "*Length of name is too short");
    returnval = false;
}

if (name.length == 0){
    seterror("name", "*Length of name cannot be zero!");
    returnval = false;
}


var username = document.forms['myForm']["un"].value;
if (username.length == 0){
    seterror("username", "*Must be a valid username");
    returnval = false;
}

var address = document.forms['myForm']["faddress"].value;
if (address.length == 0){
    seterror("address", "Can't empty your address!");
    returnval = false;
}



var email = document.forms['myForm']["email"].value;
var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ ;

if (email.length>15){
    seterror("email", "*Email length is too long");
    returnval = false;
}
if (email   ==!  validRegex){
    seterror("email", "*Must be use correct email address");
    returnval = false;
}

var phone = document.forms['myForm']["fphone"].value;
if (phone.length == 0){
    seterror("phone", "*Phone number should be completed!");
    returnval = false;
}

var phone = document.forms['myForm']["fphone"].value;
if (phone.length != 11){
    seterror("phone", "*Phone number should be of 11 digits!");
    returnval = false;
}



var password = document.forms['myForm']["pass"].value;
if (password.length < 6){

    seterror("pass", "*Password should be atleast 6 characters long with special keyword!");
    returnval = false;
}

var cpassword = document.forms['myForm']["Cpass"].value;
if (cpassword != password){
    seterror("cpass", "*Password and Confirm password should match!");
    returnval = false;
}

return returnval;

}

</script>
<br><br>

</body>  
 </html>  