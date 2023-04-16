<?php
include("configuration.php");
$name=$_POST['name'];
$nname=$_POST['nname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$dob=$_POST['dob'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$date=date('d-M-Y');

$c=mysqli_query($al,"SELECT * FROM users WHERE email='$email'");
if($name==NULL || $nname==NULL || $email==NULL || $contact==NULL || $p1==NULL || $p2==NULL || $dob==NULL)
{
	$info="register sucessful";
}
elseif(mysqli_num_rows($c)==1)
		{
			$info="Email ID or Nick Name Already Exists";
		}
		elseif($p1==$p2)
		{	
			$p3=sha1($p1);
			$sql=mysqli_query($al,"INSERT INTO users(name,nick,dob,email,contact,password,date) VALUES('$name','$nname','$dob','$email','$contact','$p3','$date')");
			if($sql) {
			$info="Successfully Registered User $name";
			} else { $info = "Error in Registration"; }
		}
		else
		{
			$info="Password Didn't Matched";
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Panel</title>
<link href="scripts/styleSheet.css" rel="stylesheet" type="text/css" />
<link href="scripts/styleSheet1.css" rel="stylesheet" type="text/css" />
<style>
  .k{
  background-image:url("m.jpg");
  /* opacity:0.9; */
}
</style>
</head>

<body class="k">
<!-- <div align="center">
<span class="heading">User Registration Panel</span><br />
<br />
<br />
<br />
<form method="post" action="">
<table class="table" cellpadding="4" cellspacing="4">
<tr><td colspan="2" align="center" class="text">All Fields are Mandatory</td></tr>
<tr><td colspan="2" align="center" class="info"><?php echo $info;?></td></tr>
<tr><td class="labels">Full Name : </td><td><input type="text" name="name" size="40" class="fields" placeholder="Enter Full Name" required="required" /></td></tr>
<tr><td class="labels">Nick Name : </td><td><input type="text" name="nname" size="40" class="fields" placeholder="Enter Nick Name" required="required" /></td></tr>
<tr><td class="labels">Date of Birth : </td><td><input type="text" name="dob" size="20" class="fields" placeholder="DD/MM/YYYY" maxlength="10" required="required" /></td></tr>
<tr><td class="labels">Email ID : </td><td><input type="email" name="email" size="40" class="fields" placeholder="Enter Email ID" required="required" /></td></tr>
<tr><td class="labels">Contact No. : </td><td><input type="text" name="contact" size="30" class="fields" placeholder="Enter Contact No." maxlength="10" required="required" /></td></tr>
<tr><td class="labels">Password : </td><td><input type="password" name="p1" size="40" class="fields" placeholder="Enter Password" required="required" /></td></tr>
<tr><td class="labels">Re-Type Password : </td><td><input type="password" name="p2" size="40" class="fields" placeholder="Re-Type Password" required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Register Me" class="commandButton" onclick="return confirm('Please check everything before submitting');" /></td></tr>
</table>
</form> -->




<div class="wrapper">
    <section class="form signup">
      <header>Shetty Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="name" placeholder="full name" required>
          </div>
          <div class="field input">
            <label>Nick name</label>
            <input type="text" name="nname" placeholder="nick name" required>
          </div>
        </div>
        <div class="field input">
          <label>Date of birth</label>
          <input type="text" name="dob" placeholder="Enter your date of birth" required>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>contact number</label>
          <input type="text" name="contact" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="p1" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>  <!--this is for that eye button -->
        </div>
        <div class="field input">
          <label> re type Password</label>
          <input type="password" name="p2" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>  <!--this is for that eye button -->
        </div>
		<div class="field button">
          <input type="submit" onclick="myFunction()" value="Register Me" value="Continue to Chat">
        </div>
       
      </form>
      <div class="link">Already signed up? <a href="index.php">Login now</a></div>
    </section>
  </div>





<br />
<!-- <a href="index.php">BACK</a>   -->
</div>
<script>
function myFunction() {
  alert("<?php echo $info ?>");
}
</script>
</body>

</html>