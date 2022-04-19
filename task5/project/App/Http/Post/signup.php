<?php
include_once "../Middlewares/RequestPost.php";
include_once "../Middlewares/guest.php";
include_once "../../../vendor/autoload.php";
session_start();

use App\Database\Models\User;
use App\Mail\VerificationCode;
use App\Http\Requests\Validation;

$validator = new Validation;
$validator->setValueName('first_name')->setValue($_POST['first_name'])->required()->max(32);
$validator->setValueName('last_name')->setValue($_POST['last_name'])->required()->max(32);
$validator->setValueName('email')->setValue($_POST['email'])->required()
    ->regex('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/')
    ->max(64)->unique('users');
$validator->setValueName('password')->setValue($_POST['password'])->required()->regex('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/', "Minimum eight and maximum 20 characters, at least one uppercase letter, one lowercase letter, one number and one special character")
    ->confirmed($_POST['password_confirmation']);
$validator->setValueName('phone')->setValue($_POST['phone'])->required()->regex('/^01[0125][0-9]{8}$/')->unique('users');
$validator->setValueName('password_confirmation')->setValue($_POST['password_confirmation'])->required();
$validator->setValueName('gender')->setValue($_POST['gender'])->in(['f', 'm']);

if (!empty($validator->getErrors())) {
    $_SESSION['errors'] = $validator->getErrors();
    $_SESSION['old'] = $_POST;
    header('location:../../../signup.php');
    die;
}
$verificationCode = rand(10000, 99999);

$user = new User;
$user->setFirst_name($_POST['first_name'])->setLast_name($_POST['last_name'])
    ->setPhone($_POST['phone'])->setEmail($_POST['email'])->setGender($_POST['gender'])
    ->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT))->setVerification_code($verificationCode);
if ($user->create()) {
    $body = "<h4>Hello {$_POST['first_name']}</h4> <p> your verification code is:<b>{$verificationCode}</b></p><p>best wishes</p>";
    $verificationCode = new VerificationCode($_POST['email'], "verification code", $body);
    if ($verificationCode->send()) {
        $_SESSION['verification_email'] = $_POST['email'];
        header('location:../../../verificationcode.php?page=signup');
        die;
    } else {
        $_SESSION['errors']['mail']['error'] = "please try again later";
        header('location:../../../signup.php');
        die;
    }
} else {
    $_SESSION['errors']['something']['error'] = "something wentWorng";
    header('location:../../../signup.php');
    die;
}
