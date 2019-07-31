<?php 

 
    $visitor_name = $_POST['name'];    // name is attribute in html input  

    $visitor_email = $_POST['email'];

    $visitor_message = $_POST['message'];
    

    $email_subject = "New Message from Website";

    $email_body = "You have received a new message from the user $visitor_name.\nHere is the message:\n $visitor_message";

    $to = "rihab.al-yasiri@web.de";  

    $headers   = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/plain; charset=utf-8";   // to get messages in all languages
    $headers[] = "From: {$visitor_email}";

    
    mail($to,$email_subject,$email_body,implode("\r\n",$headers));
 

?>


