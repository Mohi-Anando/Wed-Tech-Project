<?php
session_start();
require_once '../Model/operation.php';

   $currentPassword=$newpassword=$rnewpassword="";
   $cpasswordError=$npasswordError=$rnpasswordError="";
   $update=false;
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
     if (empty($_POST["currentPassword"]))
	 {
       $cpasswordError = "Current password is required!";
     }
     else
	 {
       $currentPassword = test_input($_POST["currentPassword"]);
       
	 }

        if (empty($_POST["newpassword"])) 
		{
          $npasswordError = "New password is required!";
        }
        else 
		{
         $newpassword = test_input($_POST["newpassword"]);

        
		}

           if (empty($_POST["rnewpassword"]))
			{
             $rnpasswordError = "Retype New Password is required!";
            }
           else 
		   {
            $rnewpassword = test_input($_POST["rnewpassword"]);
             if (strcmp($newpassword,$rnewpassword)) 
			 {
                $rnpasswordError = "Retype password and New Password need to be same!";
             }
			 else
			 {
               
        if(isset($_POST["submit"]))
        {
          $data['pass']=$_POST["newpassword"];
        }
        if(updatepass($_SESSION["User"],$data)){
          $update=true;
          }
			 
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

   if($update){
   echo "Password changed Sucsessfully";
   header('Location: ../view/Dashboad.php');
  }
   else
   echo "There is an error";
     ?>