<?php

session_start();
	require_once '../Model/Operation.php';
    // define variables and set to empty values
   $usernameErr = $passwordErr ="" ;
   $username = $password =""  ; 
   $isuserok=false;
   $ispassok=false;

 if ($_SERVER["REQUEST_METHOD"] == "POST") 
   {
       if (empty($_POST["username"])) 
       {
          $usernameErr = "UserName is required!";
       } 
     
       else 
       {
          $username = test_input($_POST["username"]);
   
          // check if name only contains letters and whitespace , period
     
           
           // contains minimum char
               
          

       
                 if(checkuser($_POST["username"]))
                 {
                         $isuserok=true;
                 }
                 else
                 $usernameErr="Invalid Username";
         
       }
       


       if(empty($_POST["password"])) 
       {
           $passwordErr = "Password is required!";
       } 
       else 
           {    
              $password = test_input($_POST["password"]);
              
                if(checkpass($_POST["password"]))
                {
                        $ispassok=true;
                }
                else
                $passwordErr="Invalid Password";
             
           }
     
     if(!empty($_POST["Remember me"]))
     {
       if(empty($passwordErr) && empty($usernameErr))
       {

        
     $cookie_user = $username;
      $cookie_pass = $password;
      setcookie($cookie_user, $cookie_pass, time() + (86400 * 30), "/"); 

       }
     }

       
   }


   function test_input($data) 
   {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   }


   if($ispassok==true && $isuserok==true)
   {
       echo "Login Succsessful <br>";
        
     
   $data=Searchuser($_POST["username"]);
       
   foreach ($data as $i => $user):
    $_SESSION["User"]=$user['U_name'];
    $_SESSION["Name"]=$user['Name'];
    $_SESSION["Email"]=$user['Email'];
    $_SESSION["Gender"]=$user['Gender'];
    $_SESSION["dob"]=$user['Dob'];
    endforeach;
        
                        
                     
                     
                   

    header('location: ../view/Dashboad.php');
   }
   else
   {
     if($usernameErr)
     echo $usernameErr;
     else
     echo $passwordErr;
   }


?>


