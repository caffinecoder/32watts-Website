
<?php
$msg='';
if(isset($_POST["send"]))
{
$fname=$_POST["fname"];
$phone=$_POST["phone"];
$city=$_POST["city"];
$adres=$_POST["address"];
$msg .="Google Ads Leads Enquiry form<br>"; 
 
 
 
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://32wattscrm.in/lead-data.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('name' => $fname,'phone' => $phone,'email' =>"demo@gmail.com",'token' => 'ybx6evdqdwhv'),
));

$response = curl_exec($curl);

curl_close($curl);
$response;
 
  $msg .="<b>Name</b>------------------" . $fname. "<br>";
  $msg .="<b>Phone</b>----------------" .$phone . "<br>";
  $msg .="<b>Address</b>-------------------------" .$adres. "<br>";
  $msg .="<b>City</b>----------------" .$city . "<br>";
    // echo "hello";
    
    $sub="Google Ads Leads 32Watts Enquiry";
             $to="info@32watts.com,deepakclearaligner@gmail.com,services@renderwise.in,puneet.b@32watts.com";
            //  $to='<neerajsngh901@gmail.com>';
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