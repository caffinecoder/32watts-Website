
<?php
$msg='';
if(isset($_POST["send"]))
{
$fname=$_POST["fname"];
$phone=$_POST["phone"];
$adres=$_POST["address"];
$mail=$_POST["email"];
$msg .="Price Enquiry form<br>"; 
$email = 'info@32watts.com';
 
  $msg .="<b>Name</b>------------------" . $fname. "<br>";
  $msg .="<b>Phone</b>----------------" .$phone . "<br>";
  $msg .="<b>Address</b>-------------------------" .$adres. "<br>";
  if($mail != null || $mail!=""){
      $msg .="<b>Email</b>-------------------------" .$mail. "<br>";
  }

    
    $sub="32Watts Enquiry";
              $to="info@32watts.com,services@renderwise.in,puneet.b@32watts.com,manojkumarcse432@gmail.com";
              $headers  = 'MIME-Version: 1.0' . "\r\n";
               $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
               $headers .= 'From:'.$email . "\r\n" .
                    'Reply-To:' . "\r\n" .
                     'X-Mailer: PHP/'.phpversion();					  
            
           $retval = mail($to,$sub,$msg,$headers);
		   if($retval==true)
		   {
			   echo "Message Send Successfully";
		   }
			else
		   {
			  echo "unable to sent mail";
		   }
           
           
}

?>