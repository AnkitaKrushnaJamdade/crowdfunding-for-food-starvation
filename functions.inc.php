<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) {
    $result;

    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;

    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdStrong($pwd) {
    $result;
    $uppercase = preg_match('@[A-Z]@', $pwd);
    $lowercase = preg_match('@[a-z]@', $pwd);
    $number    = preg_match('@[0-9]@', $pwd);
    $specialChars = preg_match('@[^\w]@', $pwd);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdrepeat) {
    $result;

    if($pwd !== $pwdrepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExits($conn, $username, $email) {
    $sql = "select * from users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ./signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
     
}

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ./signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ./signup.php?error=none");
    exit();   
}

function storeDonate($conn, $dname, $demail, $phone, $food, $address, $date, $time) {
    $sql = "INSERT INTO `donatefood`(`name`, `email`, `contact`, `famount`, `address`, `date`, `time`) VALUES  ('$dname','$demail', '$phone', '$food', '$address', '$date', '$time');";
    $stmt = mysqli_stmt_init($conn);
   
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ./fooddonate.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssss", $dname, $demail, $phone, $food, $address, $date, $time);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ./fooddonate.php?error=none");
    exit();   
}

function emptyInputLogin($username, $pwd) {
    $result;

    if(empty($username) || empty($pwd)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExits($conn, $username, $username);

    if($uidExists === false) {
        header("location: ./login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
        header("location: ./login.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ./index.php");
        exit();
    }
}

?>

function emptyInputPay($eemail, $phone, $price) {
    $result;

    if(empty($eemail) || empty($phone) || empty($price)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function checkPhone($phone) {
    $result;

    if(preg_match('/^\d{10}$/',$phone)) // phone number is valid
    {
      $phone = '0' . $phone;
      $result = true;
    }        
    }
    else{
        $result = false;
    }
    return $result;
}