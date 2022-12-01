<?php

include "mail.php";

$recepient = $_POST['email'];
$subject = $_POST["subject"];
$message =$_POST["message"];

$recepient = "letsemam19@gmail.com";

mail($recepient,$subject,$message) or die("Error!");

?>