<?php
    
   if(isset($_POST['submit']) )
   {
    
      
    
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
    
    
            $mailto="ericgachichio@gmail.com";
            $headers="From: ".$email;
            $txt="You have received an email from ".$name."\n\n".$message;

            mail($mailto,$message,$txt,$headers);
    
           
            //  if ( mail($mailto,$message,$txt,$headers)) {
            //     $message = "Your contact information is received successfully.";
	        //      $type = "success";}
                 

             header("Location: contact.php?mailsend");
       }      
    //    require_once "contact.php";    

