
<?php
$msg='';
if(isset($_POST["send"]))
{
$fname=$_POST["fname"];
$phone=$_POST["phone"];
$city=$_POST["city"];
$adres=$_POST["address"];
//$msg .="Landing Enquiry form<br>"; 
  $sub="Landing 32Watts Enquiry";
 
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
  CURLOPT_POSTFIELDS => array('name' => $fname,'phone' => $phone,'email' =>"demo@gmail.com",'token' => 'q4r11xnqyjqw'),
));

$response = curl_exec($curl);

curl_close($curl);
$response;

   $msg .="
		<html>
		<head>
	
				<style>
				table {
			  
			  border-collapse: collapse;
			  width: 100%;
			}
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    
}

.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}


</style>
		</head>
		<body>

		<table class='styled-table'  style='border: 1px solid #000;width:50%;'>
		<thead>
		<tr>
		<td colspan='3'><h3 align='center'>" .$sub . "</h3></td>
		</tr></thead>

		<tr >
		<th>&nbsp;&nbsp;&nbsp;&nbsp;Name </th> 
		<td>" . $fname. "</td>
		</tr>
		
		<tr >
		<th>&nbsp;&nbsp;&nbsp;&nbsp;Phone </th> 
		<td>" .$phone . "</td>
		</tr>
		
		<tr >
		<th>City </th> 
		<td>" .$city . "</td>
		</tr>
		
	    <tfoot><tr>
		<td colspan='3'><h3 align='center'>Thank you,</h3></td>
		</tr></tfoot>
		</table>
		</body>
		</html>
		";
 
 // $msg .="<b>Name</b>------------------" . $fname. "<br>";
  //$msg .="<b>Phone</b>----------------" .$phone . "<br>";
 // $msg .="<b>Address</b>-------------------------" .$adres. "<br>";
  //$msg .="<b>City</b>----------------" .$city . "<br>";
    // echo "hello";
    
   
              $to="info@32watts.com,Deepakclearaligner@gmail.com,services@renderwise.in";
              //$to="Vikas.p@32watts.com";
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