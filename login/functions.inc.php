<?php
function emptyInputRegister($fname, $lname, $email, $password, $number, $birth, $gender)
{
    if (empty($fname) || empty($lname) || empty($email) || empty($password) || empty($number) || empty($birth) || empty($gender)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidFname($name)
{
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidLname($name)
{
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function wrongemail($email)
{
    $mail=explode('@',$email);
    $domain=end($mail);
    if($domain=='admin.com'||$domain=='gsolutions.com')
    {
        $result=true;
    }
    else
    {
      $result=false;
    }
    return $result;
}
function emptyInputadmin($fname, $lname, $email, $password,$cpassword, $number, $birth, $gender)
{
    if (empty($fname) || empty($lname) || empty($email) || empty($password) ||empty($cpassword)|| empty($number) || empty($birth) || empty($gender)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function passwordsmismatch($password,$cpassword)
{
    if($password!=$cpassword)
    {
        $result=true;
    }
    else
    {
        $result=false;
    }
    return  $result;
}
function checkemailadmin($email)
{
    $mail=explode('@',$email);
    $domain=end($mail);
    if($domain=='gmail.com'||$domain=='gsolutions.com')
    {
        $result=true;
    }
    else
    {
        $result=false;
    }
    return $result;
}
function manager($email)
{
    $mail=explode('@',$email);
    $domain=end($mail);
    if($domain=='gmail.com'||$domain=='admin.com')
    {
        $result=true;
    }
    else
    {
        $result=false;
    }
    return $result;
}
//for login
function emptyInputlogin($email, $password,)
{
    if (empty($email) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
