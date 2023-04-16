<?php
include("configuration.php");
session_start();
if(isset($_SESSION['email']))
{
	header("location:home.php");
}
$email=$_POST['email'];
$password=$_POST['password'];
if($email==NULL || $_POST['password']==NULL)
{
  $info="login success";
}
else
{
	$sql=mysqli_query($al,"SELECT * FROM users WHERE email='".mysqli_real_escape_string($al,$email)."' AND password='".mysqli_real_escape_string($al,sha1($password))."'");	
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['email']=$_POST['email'];
		header("location:home.php");
	}
	else
	{
		$info="Incorrect Email or Password";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Chatter Box</title>
<link href="scripts/styleSheet.css" rel="stylesheet" type="text/css" />
<link href="./scripts/styleSheet1.css" rel="stylesheet" type="text/css" />
<style>
.k{
  background-image:url("m.jpg");
}
</style>
</head>



<body class="k">


 
<div class="wrapper">
  
    <section class="form login">
      <header>Real time Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="email" name="email" placeholder="Enter your email" required>
        </div>
       
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" onclick="myFunction()"  name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="registration.php">Signup now</a></div>

	  <!-- <span class="text">New User..? </span><a href="registration.php">Register Here</a><br />  -->
<span class="suraj">Admin Login </span><a href="adminLogin.php">Click Here</a>
    </section>
  </div>
  
  <!-- <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script> -->
  <script src="s.js"></script>   
 
<br />

<br />

<br />
<br />
<!-- <span class="text">For More Updates </span><a href="https://www.youtube.com/channel/UCs_dbtq_OF-0HxkAQnBGapA?sub_confirmation=1">Subscribe Tech Vegan</a> -->

</div>
<script>
function myFunction() {
  alert("<?php echo $info ?>");
}
</script>
</body>

</html>

  
