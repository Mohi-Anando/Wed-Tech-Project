<?php  

require_once '../Model/Operation.php';
 $message = '';  
 $error = '';
  $isok=false;
  $istrue=false;
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["un"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else  if(!preg_match("/^[a-zA-Z-_ ]*$/",$_POST["un"])) 
      {
     $error = " User Name can contain alpha numeric characters, period, dash or underscore only!";
    }

      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(!preg_match('/[\'^£$%&*()}{@#~?><,|=_+¬-]/', $_POST["pass"])) 
          {
        $error= "Password must contain at least 1 special char!"."<br>";
     }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
       
     

      else  
      {  

         
    $ok=false;
               if (isset($_POST['submit'])) {
                    $data['name'] = $_POST['name'];
                    $data['email'] = $_POST['email'];
                    $data['pass'] = $_POST['pass'];
                    $data['gender'] = $_POST['gender'];
                    $data['un'] = $_POST['un'];
                    $data['dob'] = $_POST['dob'];
                  
                    
                    $data['image'] = basename($_FILES["image"]["name"]);
               
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
               
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $ok=true;
                    
               
                 } else {
                   echo "Sorry, there was an error uploading your file.";
                 }
               
                 if (adduser($data) && $ok) {
                     $isok=true;
                    
                     
                 }
               } else {
                   $isok=false;
               }

          
          
      } 
      
    
     
     
 }  
 ?>  

 <!DOCTYPE html>
 <html lang="en">
 <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>AddUser</title>
 </head>
 <body>
      <?php
      if($isok){
      echo "Registration Sucsessfull </br>";
     
                    

    header('location: ../view/Login.php');
     }
      else
      echo $error;
      ?>
 </body>
 </html>