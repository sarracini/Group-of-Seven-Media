<?php
   if(isset($_POST['submit'])) {

 
    $email_to = "ursulasarracini@gmail.com";
    $email_subject = "subject line";
   

    $name = $_POST['name']; 
    $agency = $_POST['agency']; 
    $client = $_POST['client']; 
    $market = $_POST['market'];

    
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Agency: ".clean_string($agency)."\n";
    $email_message .= "Client: ".clean_string($client)."\n"; 
    $email_message .= "Market: ".clean_string($market)."\n";
 

    mail($email_to, $email_subject, $email_message);  
    }
    else{
        echo "mail failed to send";
    }
 
?>