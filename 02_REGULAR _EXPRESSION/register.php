<?php

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$city = $_POST['city'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$aadhar = $_POST['aadhar'];
$pan = $_POST['pan'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$error = "";


if(!preg_match("/^[A-Za-z]{2,20}$/", $fname))
{
    $error .= "Invalid First Name<br>";
}


if(!preg_match("/^[A-Za-z]{2,20}$/", $mname))
{
    $error .= "Invalid Middle Name<br>";
}


if(!preg_match("/^[A-Za-z]{2,20}$/", $lname))
{
    $error .= "Invalid Last Name<br>";
}


if(!preg_match("/^[A-Za-z ]{2,30}$/", $city))
{
    $error .= "Invalid City<br>";
}


if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email))
{
    $error .= "Invalid Email<br>";
}


if(!preg_match("/^[0-9]{10}$/", $contact))
{
    $error .= "Invalid Contact Number<br>";
}


if(empty($gender))
{
    $error .= "Select Gender<br>";
}


if(!preg_match("/^[0-9]{12}$/", $aadhar))
{
    $error .= "Invalid Aadhaar Number<br>";
}


if(!preg_match("/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/", $pan))
{
    $error .= "Invalid PAN Number<br>";
}


if(!preg_match("/^[A-Za-z0-9_]{5,15}$/", $username))
{
    $error .= "Invalid Username<br>";
}


if(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,}$/", $password))
{
    $error .= "Password must contain Uppercase, Lowercase, Number and minimum 8 characters<br>";
}


if($password != $cpassword)
{
    $error .= "Password and Confirm Password do not match<br>";
}

/* Final Result */
if($error == "")
{
    echo "<h2 style='color:green'>Registration Successful</h2>";
}
else
{
    echo "<h2 style='color:red'>Validation Errors:</h2>";
    echo $error;
}

?>