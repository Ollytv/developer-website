<?php 
$db=new mysqli("localhost","root","","ola");
if(mysqli_connect_error()){
    echo"Wrong connection";
}else{
    echo"connected";
}
if(isset($_POST["submit"])){
    $UserName=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
  //send to db table
  $insert="insert into ola values('','".$UserName."','".$email."','".$password."',now())";
  $q=$db->query($insert); 
  if($q){
      echo" Login Successfull";
}else{
    echo"invalid credentials";
}
}
?>
<!DOCTYPE html>
<head>
<meta char="UTF-8">
<html lang="en-US">
<title>LOGIN FORM</title>
<link rel="stylesheet"href="log.css">
</head>
<body>
    <div id="fixed_heading">
    <div class="heading">
    <h1>WELCOME USER!</h1>
    <h2>SIGN IN YOUR CREDENTIALS</h2>
<a href="register.html"><div id="REGISTER"><button class="social register">REGISTER</button></div></a>
</div>
</div>
    <center>
        <div class="login-box">
<form method="post"action="page1.html"onsubmit="ValidateForm();"><br><br>
<input type="text"id="userName"placeholder="Username"name="UserName"maxlength="8"minlenght="8"required/><br><br>
<input type="email"id="email"placeholder="Email"name="email"maxlenght="20"minlenght="20"required/><br><br>
<input type="password"id="Password"placeholder="Password"maxlenght="6"minlenght="6"required/><br><br>
<input type="submit"value="LOG-IN"onsubmit="ValidateForm();">
<input type="reset"value="RESET">
</form>
</div>
</center>
<script type="text/javascript">
function ValidateForm(){
var userName=document.getElementByld("userName").value;
var email=document.getElementByld("email").value;
var password=document.getElementByld("password").value;
  if(UserName.value==" "|| email.value==" "|| password.value==" "){
      alert("ALL FIELD REQUIRED")
      return false;
  }
      else{
          return true;
      }
  }
  
</script>
<center>
<div class="left-box">
    <span class="SIGN-IN-WITH">SIGN-IN-WITH</span><br><br><br><br>
    <button class="social facebook">LOG IN WITH FACEBOOK</button><br><br><br><br>
    <button class="social TWITTER">LOG IN WITH TWITTER</button><br><br><br><br>
    <button class="social google">LOG IN WITH GOOGLE++</button><br><br><br>
</div>
</center>
<div class="or_wrap">
    <div class="or">
        <p class="or_text">OR</p>
    </div>
</div>
</body>
<style>
    