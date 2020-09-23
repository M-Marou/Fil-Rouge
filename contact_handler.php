<?php

	$message = $name = $email = $subject = "";
	// var_dump($_GET);
	// exit;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    $message = $_POST['message'];
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $email_from = 'info@portfolio.com';

    $email_subject = "New form submission";

    $email_body = "User Message: $message.\n".
                        "User Name: $name.\n".
                            "User Email: $email.\n".
                                "User Subject: $subject.\n";


    $to = "marouane.moumni20@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
 
    $conn = new mysqli('localhost','root','','myportfolio');
    if($conn->connect_error){
        die('connection Failed: '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO contact(contName, contEmail, contSubject, contMessage)
        values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$name, $email, $subject, $message);
        $stmt->execute();
        // echo"data inserted successfully";
        $stmt->close();
        $conn->close();
    }
    header("Location: contact.php?mailsend");
}


// if (isset($_POST['submit'])) {
//     $message = $_POST['message'];
//     $name = $_POST['name']; 
//     $email = $_POST['email'];
//     $subject = $_POST['subject'];

//     $mailto = "marouane.moumni20@gmail.com";
//     $headers = "From: ".$email;
//     $txt = "You have recieve an e-mail from ".$name.".\n\n".$message;

//     mail($mailto, $subject, $txt, $headers);
//     header("Location : contact.php?mailsend");
// }

?>
