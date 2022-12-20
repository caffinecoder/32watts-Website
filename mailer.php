
<?php
$msg='';
if(isset($_GET["send"]))
{

 $patientname= $_GET['patientname'];
 $patientid= $_GET['patientid'];
 $doctorname= $_GET['doctorname'];
 $comment = $_GET['comment'];
 $PlanNO= $_GET['PlanNO'];

$msg .="Price Enquiry form<br>"; 
 
  $msg .="<b>Patient-Name</b>------------------" . $patientname. "<br>";
  $msg .="<b>Patient-id</b>----------------" .$patientid . "<br>";
  $msg .="<b>Doctor Nane</b>-------------------------" .$doctorname. "<br>";
   $msg .="<b>Comment</b>----------------" .$comment . "<br>";
  $msg .="<b>Plan No</b>-------------------------" .$PlanNO. "<br>";
    // echo "hello";
    
    $sub="32Watts Enquiry";
                 $to="arayanmanish@gmail.com,puneet.b@32watts.com";
  
              $headers  = 'MIME-Version: 1.0' . "\r\n";
               $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
               $headers .= 'From:'.$email . "\r\n" .
                    'Reply-To:' . "\r\n" .
                     'X-Mailer: PHP/'.phpversion();					  
            if ( mail($to,$sub,$msg,$headers))
           {
      ?>
<script type="text/javascript">
window.location.href = 'https://www.32watts.com/clear-aligners-cost-in-india.html';
</script>
<?php
          
           }
           else
           {
           echo "unable to sent mail";
           }
           
           
}

?>