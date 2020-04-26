<?php

    $to_email = 'armenianhomeny@gmail.com';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $message = $_POST['message'];
    

    
        $email_subject = 'New Armenian Home Message';
    
        $email_body = "You have recieved a new message from user: $name. \n"."Here is their email: $email.\n"."Here is their phone number: $phonenumber.\n"."Here is the message:\n $message";

        $headers = "From: $email";

        $time = time();
    
        mail($to_email, $email_subject, $email_body);
        //print "Your mail has been sent successfuly ! Thank you for your feedback $time";
        header('Location: ./index.php');
    }else{
        print("Not working");
    }
?>