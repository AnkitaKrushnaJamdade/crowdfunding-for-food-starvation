<?php
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $name = $_POST["name"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
  
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';    
    
    if(emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) !== false){
        header("location: ./signup.php?error=emptyinput"); //redirect to the same page if any error occur
        exit();
    }
    if(invalidUid($username) !== false){ //functions return value here
        header("location: ./signup.php?error=invaliduid");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ./signup.php?error=invalidemail");
        exit();
    }
    // if(pwdStrong($pwd) !== false){
    //     header("location: ./signup.php?error=notstrongpass");
    //     exit();
    // }
    if(pwdMatch($pwd, $pwdrepeat) !== false){
        header("location: ./signup.php?error=passwordsnotmatch");
        exit();
    }
    if(uidExits($conn, $username, $email) !== false){
        header("location: ./signup.php?error=usernametaken ");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else {
    header("location: ./signup.php");
    exit();
}

?>