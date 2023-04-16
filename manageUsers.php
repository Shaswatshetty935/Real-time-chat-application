<?php
include("configuration.php");
session_start();
if(!isset($_SESSION['id']))
{
	header("location:adminLogin.php");
}
$sql=mysqli_query($al,"SELECT * FROM users");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="scripts/styleSheet.css" rel="stylesheet" type="text/css" />
<title>Manage Users</title>
<style>
	.z{
background:url("https://thumbs.dreamstime.com/b/beautiful-background-flowers-roses-congratulations-49844171.jpg")no-repeat center center/cover;
/* width:100%;
/* height:100%; */ */
/* background-image:no-repeat; */
width: 100%;
height:100%;

opacity:0.9;}
</style>
</head>

<body class="z">
<span class="heading">Manage Users</span><span style="float:right"><a href="logout.php">
<img src="logout.png" height="50" width="100"  /></a></span>
<!-- <hr style="border:6px dotted #63C;"/><br /> -->

<div align="center"><br><br><br><br><br><br><br>
<table class="table" cellpadding="4" cellspacing="4">
<tr class="tableHead" style="font-size:15px;"><th>Name</th><th>Nick Name</th><th>Date of Birth</th><th>Email</th><th>Contact</th><th>Date</th>
<th>Delete</th></tr>
<?php
while($b=mysqli_fetch_array($sql))
{
	?>
<tr class="msg"><td><?php echo $b['name'];?></td>
<td><?php echo $b['nick'];?></td>
<td><?php echo $b['dob'];?></td>
<td><?php echo $b['email'];?></td>
<td><?php echo $b['contact'];?></td>
<td><?php echo $b['date'];?></td>
<td><a href="deleteUser.php?del=<?php echo $b['id'];?>" onclick="return confirm('Are You Sure..?');">Delete</a></td></tr>
<?php } ?>
</table>	
<br />
<br />
<a href="adminHome.php">BACK</a>
</body>


</html>