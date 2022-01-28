<?php 
session_start(); 

    if (isset($_POST["submit"])) {
        
       $username = $_POST["uid"]; 
       $pwd = $_POST["pwd"]; 
       
       require_once 'dbh.inc.php';
       require_once 'functions.inc.php';    
      
       if(emptyInputLogin($username, $pwd) !== false){
            header("location: ./login.php?error=emptyinput"); //redirect to the same page if any error occur
            exit();
       }
        
       loginUser($conn, $username, $pwd);
    }
   
    else {
        header("location: ./signup.php");
        exit();
    }
?>