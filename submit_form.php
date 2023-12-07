<?php
require_once('assets/dbConnect/DBController.php');
$db_handle = new DBController();
date_default_timezone_set('Asia/Hong_Kong');
$inserted_at = date('Y-m-d H:i:s');

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['contact_form'])) {
    $fname = $db_handle->checkValue($_POST['fname']);
    $lname = $db_handle->checkValue($_POST['lname']);
    $email = $db_handle->checkValue($_POST['email']);
    $phone = $db_handle->checkValue($_POST['phone']);
    $message = $db_handle->checkValue($_POST['message']);

    $insert_data = $db_handle->insertQuery("INSERT INTO `contact_data`(`fname`, `lname`, `email`, `phone`, `message`, `inserted_at`) VALUES ('$fname','$lname','$email','$phone','$message','$inserted_at')");


    $email_to = $db_handle->notify_email();
    $subject = 'Email From ACHIEVE BUNKER';


    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <p style='text-align: center;color:green;font-weight:bold'>New Contact Info Data</p>   
                        
                            <p style='color:black'> 
                                First Name: $fname<br/>
                                Last Name: $lname<br/>
                                Email: $email<br/>
                                Phone: $phone<br/>
                                Message: $message
                            </p>
                        </div>
                    </body>
                </html>
                ";

    $sender_name = "ACHIEVE BUNKER";
    $sender_email = $db_handle->from_email();

    $username = "noreply@achievebunker.com";
    $password = "123Qweasd!@#";

    $receiver_email = $email_to;


    $mail = new PHPMailer(true);
    $mail->isSMTP();

    $mail->Host = 'gsgpm1041.siteground.biz';

    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';

    $mail->Port = 465;

    $mail->setFrom($sender_email, $sender_name);
    $mail->Username = $username;
    $mail->Password = $password;

    $mail->Subject = $subject;
    $mail->msgHTML($messege);
    $mail->addAddress($receiver_email);


    if ($mail->send() && $insert_data) {
        echo "<script>
                alert('Data Submitted Successfully!');
                window.location.href = 'index.php';
             </script>";
    }
}