
<?php
$msg='';
if(isset($_POST["mobilebtn"]))
{
$fname=$_POST["fname"];
$phone=$_POST["phone"];
$adres=$_POST["address"];
 $email = 'info@32watts.com';
$msg .="Book Free Consultation Enquiry (mobile)<br>"; 
 
  $msg .="<b>Name</b>------------------" . $fname. "<br>";
  $msg .="<b>Phone</b>----------------" .$phone . "<br>";
  $msg .="<b>Address</b>--------------" .$adres. "<br>";
    // echo "hello";
    
    
    
/*$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://32wattscrm.in/lead-data.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('name' => $fname,'phone' => $phone,'email' =>"demo@gmail.com",'address' => $adres,'token' => 'qunfpo4kghrs'),
));

$response = curl_exec($curl);

curl_close($curl);
$response;
 print_r($response);
 exit;*/
    
    $sub="32Watts Enquiry Free Consultation";
            $to="info@32watts.com,puneet.b@32watts.com,manojkumarcse432@gmail.com";
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