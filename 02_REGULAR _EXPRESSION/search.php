<?php

$First Name = $_POST['First Name'];
$Middle Name = $_POST['Middle Name'];
$Last Name = $_POST['Last Name'];
$City = $_POST['City'];
$Email = $_POST['Email'];
$Contact Number = $_POST['Contact Number'];
$Gender = $_POST['Gender'];
$Aadhar Number = $_POST['Aadhar Number'];
$PAN Number = $_POST['PAN Number'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Confirm password = $_POST['Confirm password'];

$error = "";


if(!preg_match("/^[A-Za-z]{2,20}$/", $First Name))
{
    $error .= "Invalid First Name<br>";
}


if(!preg_match("/^[A-Za-z]{2,20}$/", $Middle name))
{
    $error .= "Invalid Middle Name<br>";
}


if(!preg_match("/^[A-Za-z]{2,20}$/", $Last Name))
{
    $error .= "Invalid Last Name<br>";
}


if(!preg_match("/^[A-Za-z ]{2,30}$/", $City))
{
    $error .= "Invalid City<br>";
}


if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $Email))
{
    $error .= "Invalid Email<br>";
}


if(!preg_match("/^[0-9]{10}$/", $Contact Number))
{
    $error .= "Invalid Contact Number<br>";
}


if(empty($gender))
{
    $error .= "Select Gender<br>";
}


if(!preg_match("/^[0-9]{12}$/", $Aadhar Number))
{
    $error .= "Invalid Aadhaar Number<br>";
}


if(!preg_match("/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/", $PAN Number))
{
    $error .= "Invalid PAN Number<br>";
}


if(!preg_match("/^[A-Za-z0-9_]{5,15}$/", $Username))
{
    $error .= "Invalid Username<br>";
}


if(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,}$/", $Password))
{
    $error .= "Password must contain Uppercase, Lowercase, Number and minimum 8 characters<br>";
}


if($password != $Confirm password)
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
<!DOCTYPE html>
<html>
<head>
    <script>
function validateForm() {
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm_password").value;

    if (password !== confirmPassword) {
        alert("Password and Confirm Password do not match!");
        return false;
    }
    return true;
}
</script>

</body>
</html>