<?php
include_once "../Middlewares/RequestPost.php";
include_once "../Middlewares/guest.php";

use App\Database\Models\User;
use App\Mail\VerificationCode;
use App\Http\Requests\Validation;

include_once "../../../vendor/autoload.php";
session_start();
$validator = new Validation;
$validator->setValueName('email')->setValue($_POST['email'])->required()->regex('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/')
->exists('users');

if (!empty($validator->getErrors())) {
    $_SESSION['errors'] = $validator->getErrors();
    $_SESSION['old'] = $_POST;
    header('location:../../../verifyemail.php');
    die;
}

$verificationCode = rand(10000,99999);
$userModel = new User;
$userModel->setEmail($_POST['email'])->setVerification_code($verificationCode);
if(!$userModel->updateusercode()){
    $_SESSION['errors']['something']['wrong'] = "something  wrong";
    $_SESSION['old'] = $_POST;
    header('location:../../../verifyemail.php');
    die;
}

 $body = "<h4>Hello {$_POST['email']}</h4> <p> your verification code is:<b>{$verificationCode}</b></p><p>best wishes</p>";
 $verificationCode = new VerificationCode($_POST['email'], "verification code", $body);
 if ($verificationCode->send()) {
     $_SESSION['verification_email'] = $_POST['email'];
     header('location:../../../verificationcode.php?page=verify-email');
     die;
 } else {
     $_SESSION['errors']['mail']['error'] = "please try again later";
     header('location:../../../verifyemail.php');
     die;
 }