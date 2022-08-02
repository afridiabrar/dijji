<?php




    if(isset($_REQUEST['submit'])){
        // $email = $_POST['newsletter'];
        // $msg = "demo";
        // mail($email,"My subject",$msg);

        $to = "ahtesham.inovio@gmail.com";
        $subject = "This is subject";
        
        $message = "<b>This is HTML message.</b>";
        $message .= "<h1>This is headline.</h1>";
        
        $header = "from:abc@somedomain.com \r\n";
        $header .= "cc:afgh@somedomain.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        
        $retval = mail ($to,$subject,$message,$header);
        
        if( $retval == true ) {
           echo "Message sent successfully...";
        }else {
           echo "Message could not be sent...";
        }
    }

?>

<?php

      ?>