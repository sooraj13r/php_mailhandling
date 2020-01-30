<?php 
if(isset($_POST['submit'])){
    $to = "sooraj13r@gmail.com"; // this is to email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
     $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = "Booking Enquiry";//some message
    $subject2 = "Copy of your form submission";
    $message = "Booking Enquiry: Name:" . $first_name . " Email:" . $email . "Phone no:". $phone . "\n\n" . $_POST['message']; //content of the mail
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];


    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>


<form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>


</body>
</html>
