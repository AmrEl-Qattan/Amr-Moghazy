<?php
session_start();
include_once "App/Http/Middlewares/auth.php";
unset($_SESSION['user']);
header('location:signin.php');