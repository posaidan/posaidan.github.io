<?php

$name = $_POST['name'];

$subject = $_POST['subject'];

$email  = $_POST['email'];

$message = $_POST['message'];

if($name==""){

    echo "<div class='alert alert-warning'><i class='fa fa-exclamation-triangle'></i> <span>Please enter your name .</span></div>";

    die;

}

if($email==""){

    echo "<div class='alert alert-warning'><i class='fa fa-exclamation-triangle'></i> <span>Please enter your email address.</span></div>";

    die;

}



if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

  echo "<div class='alert alert-warning'><i class='fa fa-exclamation-triangle'></i> <span>Invalid email format.</span></div>"; 

  die;

}



if($message==""){

    echo "<div class='alert alert-warning'><i class='fa fa-exclamation-triangle'></i> <span>Please enter message.</span></div>";

    die;

}





$to      = 'webmaster@example.co';

$headers = 'From: webmaster@example.com' . "\r\n" .

    'Reply-To: webmaster@example.com' . "\r\n" .

    'X-Mailer: PHP/' . phpversion();







if(mail($to, $subject, $message, $headers)){

    die('done');

}else{

    echo "<i class='fa fa-exclamation-triangle'></i> <span>Send message error.</span>";

    die;

}

?> 



<?php



