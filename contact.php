<?php 
if(isset($_POST['submit'])){
    $to = "sonicxxx7@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $subject2 = "Copy of your message to Chayan";
    $message = $name . " " . " wrote the following:" . "\n\n" . $description;
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $description;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $nam . ", we will contact you shortly.";
    header('Location: index.html'); 
    }
?>