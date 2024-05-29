<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $msg = $_POST['message']; // Get Message Value
         
        $to = "siddharth.singh.uemk.cse@gmail.com"; // You can change here your Email
        $subject = $name . " has been sent a mail"; // This is your subject
         
        $message = $name .  " wrote the following:" . "\n\n" . $msg;

         
        if(mail($to,$subject,$message)){
            // Message if mail has been sent
            echo "<script>
                    alert('Mail has been sent Successfully.');
                </script>";
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('Error sending mail. Contact me on siddharthsinh03@gmail.com');
                </script>";
        }
    }
?>