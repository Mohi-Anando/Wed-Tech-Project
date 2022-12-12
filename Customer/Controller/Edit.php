<?php
session_start();
require_once '../Model/operation.php';
           // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $dobErr = "";
        $name = $email = $gender = $dob = ""; 
		$update=false;

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
       {
             if (empty($_POST["name"])) 
		     {
               $nameErr = "Name is required!";
             } 
		  
		    else 
		    {
               $name = test_input($_POST["name"]);
		
		       // contains minimum word
		    
               // check if name only contains letters and whitespace , period
                if(!preg_match("/^[a-zA-Z-'. ]*$/",$name)) 
		        {
                 $nameErr = "Only letters and white space allowed!";
                }
             

            }
  
            if(empty($_POST["email"])) 
		    {
                $emailErr = "Email is required!";
            } 
		   else 
		   {
               $email = test_input($_POST["email"]);
	  
             // check if e-mail address is well-formed
              if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		       {
                  $emailErr = "Invalid email format and must be in anything@example.Com! ";
               }
            }
    
	         if(empty($_POST["gender"])) 
		    {
               $genderErr = "Gender is required!";
            } 
		    else 
		    {
             $gender = test_input($_POST["gender"]);
            }
	      
	
	        if(empty($_POST["dob"])) 
		    {
                $dob = "Date of birth is required!";
            } 
		    else 
		    {
               $dob = test_input($_POST["dob"]); 
            }
           
         if($nameErr!="" && $genderErr!="" && $emailErr!="" && $dobErr!="")
         {
          
           $update=false;
         }
         else
         {
            if(isset($_POST["submit"]))
            {
                $data['name'] = $_POST['name'];
	             $data['email'] = $_POST['email'];
               $data['gender'] = $_POST['gender'];
               $data['dob'] = $_POST['dob'];



            $_SESSION["Name"]=$_POST['name'];
            $_SESSION["Email"]=$_POST['email'];
            $_SESSION["Gender"]=$_POST['gender'];
            $_SESSION["Dob"]=$_POST['dob'];
                    }

      
              if(updateuser($_SESSION["User"],$data)){
              $update=true;
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

        if($update)
        {
            echo "Update sucsessfully </br>";
              header('Location: ../view/Dashboad.php');
        }
        else
        echo 'You are not allowed to access this page.';
    ?>

        