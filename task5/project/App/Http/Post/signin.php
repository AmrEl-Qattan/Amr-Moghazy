<?php

use App\Database\Models\User;
use App\Http\Requests\Validation;

include_once "../Middlewares/RequestPost.php";
include_once "../Middlewares/guest.php";
include_once "../../../vendor/autoload.php";
session_start();
define('NOT_ACTIVE',0);
$validator = new Validation;
$validator->setValueName('email')->setValue($_POST['email'])->required()->regex('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/')
->exists('users');
$validator->setValueName('password')->setValue($_POST['password'])->required()->regex('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/');
if (!empty($validator->getErrors())) {
    $_SESSION['errors'] = $validator->getErrors();
    $_SESSION['old'] = $_POST;
    header('location:../../../signin.php');
    die;
}

$userModel = new User;
$result = $userModel->setEmail($_POST['email'])->getUserByEmail();
if($result->num_rows != 1) {
    $_SESSION['errors']['email']['wrong'] = "email not exists";
    $_SESSION['old'] = $_POST;
    header('location:../../../signin.php');
    die;
}
$user = $result->fetch_object(User::class);
if(!password_verify($_POST['password'],$user->getPassword())){
    $_SESSION['errors']['password']['wrong'] = "wrong email or password";
    $_SESSION['old'] = $_POST;
    header('location:../../../signin.php');
    die;
}
if($user->getStatus() == NOT_ACTIVE){
    $_SESSION['errors']['something']['block'] = "sorry your account blocked";
    $_SESSION['old'] = $_POST;
    header('location:../../../signin.php');
    die;
}
if(is_null($user->getEmail_verified_at())){
     $_SESSION['verification_email'] = $_POST['email'];
     header('location:../../../verification-code.php');
     die;
}

$_SESSION['user'] = $user->safeData();
header('location:../../../index.php');