<?php
include("configuration.php");
session_start();
if(isset($_SESSION['id']))
{
	header("location:adminHome.php");
}
$id=$_POST['id'];
$password=$_POST['password'];
if($id==NULL || $_POST['password']==NULL)
{

}
else
{
	$sql=mysqli_query($al,"SELECT * FROM admin WHERE id='".mysqli_real_escape_string($al,$id)."' AND password='".mysqli_real_escape_string($al,sha1($password))."'");	
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['id']=$_POST['id'];
		header("location:adminHome.php");
	}
	else
	{
		$info="Incorrect ID or Password";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Chatter Box</title>
<link href="scripts/styleSheet.css" rel="stylesheet" type="text/css" />
<link href="scripts/styleSheet1.css" rel="stylesheet" type="text/css" />
<!-- <link href="scripts/styleSheet2.css" rel="stylesheet" type="text/css" />  -->
<style>
.k{
  background-image:url("m.jpg");
}

</style>

</head>

<body class="k">
	<!-- <div class="container">  -->

		<!-- <div align="center"><br />
		<span class="heading">Welcome to Chatter Box Admin Panel | Tech Vegan</span><br />
		<br /><br />
		<br /> -->
		<!-- <form method="post" action="">
			<table class="table" cellpadding="4" cellspacing="4">
				<tr><td align="center" colspan="2" class="tableHead">Admin Login</td></tr>
				<tr><td align="center" class="info" colspan="2"><?php echo $info;?></td></tr>
				<tr><td class="labels">ID : </td><td><input type="text" name="id" class="fields" size="30" required="required" /></td></tr>
				<tr><td class="labels">Password : </td><td><input type="password" name="password" class="fields" size="30" required="required" /></td></tr>
				<tr><td colspan="2" align="center"><input type="submit" value="Login" class="commandButton" /></td></tr>
			</table>
		</form> -->




		<div class="wrapper">
    <section class="form login">
      <header>Shetty Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="id"   placeholder="Enter your email" required="required">
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password"  placeholder="Enter your password" required="required">
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
	  <span class="suraj">Main Page </span><a href="index.php">Click Here</a> 
    </section>
  </div>


  <script src="s.js"></script>


		<br />
		
		<br />
		
		
	<!-- </div>  -->
</div>
</body>

</html>