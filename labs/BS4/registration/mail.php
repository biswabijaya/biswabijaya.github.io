<html>

   <head>
      <title>Sending HTML email using PHP</title>
   </head>

   <body>

      <?php
         $to = "biswabijayasamal@gmail.com";
         $subject = "This is subject";

         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";


				 $header = "From: Biswabijaya Samal <me@biswabijaya.com> \r\n";
         $header .= "Cc:me@biswabijaya.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
				 $header .= "Mailed-By: biswabijaya.com\r\n";

         $retval = mail ($to,$subject,$message,$header);

         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>

   </body>
</html>
