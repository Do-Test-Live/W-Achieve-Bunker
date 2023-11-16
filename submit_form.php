<?php
require_once ('assets/dbConnect/DBController.php');
$db_handle = new DBController();
date_default_timezone_set('Asia/Hong_Kong');
$inserted_at = date('Y-m-d H:i:s');
if(isset($_POST['contact_form'])){
    $fname = $db_handle->checkValue($_POST['fname']);
    $lname = $db_handle->checkValue($_POST['lname']);
    $email = $db_handle->checkValue($_POST['email']);
    $phone = $db_handle->checkValue($_POST['phone']);
    $message = $db_handle->checkValue($_POST['message']);

    $insert_data = $db_handle->insertQuery("INSERT INTO `contact_data`(`fname`, `lname`, `email`, `phone`, `message`, `inserted_at`) VALUES ('$fname','$lname','$email','$phone','$message','$inserted_at')");

    if($insert_data){
        echo "
        <script>
        alert('Data Submitted Successfully!');
        window.location.href = 'index.php';
</script>
        ";
    }
}