
<?php
$msg='';
if(isset($_POST["send"]))
{
$fname=$_POST["fullname"];
$phone=$_POST["phone"];
$city=$_POST["city"];
$adres=$_POST["address"];
$msg .="Delhi/NCR Leads Enquiry form<br>"; 
 
  $msg .="<b>Name</b>------------------" . $fname. "<br>";
  $msg .="<b>Phone</b>----------------" .$phone . "<br>";
  $msg .="<b>Address</b>--------------" .$adres. "<br>";
  $msg .="<b>City</b>----------------" .$city . "<br>";
    // echo "hello";
    
    $sub="Delhi/NCR Leads 32Watts Enquiry";
             $to="info@32watts.com,deepakclearaligner@gmail.com,services@renderwise.in,puneet.b@32watts.com";
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