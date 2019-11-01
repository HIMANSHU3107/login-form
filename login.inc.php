<?
if(isset($_POST['login-submit'])){
	
	require 'dbh.inc.php';

	$username,$email,$password="";
	$username_err,$email_err,$password_err="";

	if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter password.";
    } else{
        $password = trim($_POST["password"]);
    }
 
if(empty(email_err)) || empty(password_err)){
	$sql= "SELECT email,password FROM loginsystem WHERE email=?";
}

?>