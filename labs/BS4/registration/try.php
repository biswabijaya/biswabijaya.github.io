<?php
 $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0";
 $numbers = "123456789";
    for ($i = 0; $i < 4; $i++) {
        $n = rand(0, strlen($alphabet)-1);
        $arr[$i] = $alphabet[$n];
    }

    for ($i = 4; $i < 8; $i++) {
        $n = rand(0, strlen($numbers)-1);
        $arr[$i] = $numbers[$n];
    }

    $pass = implode($arr);
    echo $pass;
    $passhash = password_hash($pass, PASSWORD_DEFAULT);
    echo $passhash;

    $email = "biswabijayasamal@gmail.com" ;

    

?>
<html>
    <head>
    </head>
    <body>
        <form method="post" action="send_mail.php">
        To : <input type="text" name="mail_to" value="<?php echo $email; ?>"> <br/>
        Subject :   <input type="text" name="mail_sub" value="Registration Details">
       <br/>
         Message   <input type="text" name="mail_msg" value="Registration Success <br> Email id : <?php echo $email; ?> <br> Password Email id : <?php echo $pass; ?>" >
        <br/>
            <input type="submit" value="Send Email">
        </form>
    </body>
</html>