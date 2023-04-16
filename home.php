<?php
include("configuration.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$email=$_SESSION['email'];
$sql=mysqli_query($al,"SELECT * FROM users WHERE email='$email'");
$b=mysqli_fetch_array($sql);
$name=$b['name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chatter Box | HOME</title>
<link href="./scripts/styleSheet.css" rel="stylesheet" type="text/css" />
<!-- <link href="./scripts/styleSheet1.css" rel="stylesheet" type="text/css" /> -->
<style>
    .a{
        background-image:url("bbb.jpg");
    }
</style>
</head>

<body class="a">

<span class="heading">Welcome <?php echo $name;?></span><span style="float:right"><a href="logout.php">
<img src="logout.png" height="50" width="100"  /></a></span>
<hr style="border:6px  #63C;"/><br />
<br /><div align="center">
<table class="table" cellpadding="6" cellspacing="6">
<tr><td align="center">

<td align="center"  style="
    height: 435px;
    width: 683px;
    padding: 40px 25px;
    
">

<span class="tableHead" style="text-decoration:underline;">User Commands</span><br /><br />

<a href="conversation.php"><img  class="hehe" src="22.jpg" height="65" width="95" style="    border-radius: 300px;
    display: grid;
    width: 253px;
    padding: 23px 33px;
    height: 150px" /></a><br />
<a href="box.php"><img class="hehe" src="groupchat.jpg" height="65" width="95" style="    border-radius: 300px;
    display: grid;
    width: 253px;
    padding: 23px 33px;
    height: 150px" /></a>

<a href="changePassword.php"><img class="hehe" src="reset.png" height="65" width="95" style="    border-radius: 300px;
    display: grid;
    width: 253px;
    font-size:25px;
    padding: 23px 33px;
    height: 150px" /></a>
    <!-- <div class="abc"><p >change password</p></div> -->
    <a href="feed.php"><img class="hehe" src="feedback.jpg" height="65" width="95" style="    border-radius: 300px;
    display: grid;
    width: 253px;
    padding: 23px 33px;
    height: 150px" /></a></a>  


</td></tr></table></div>
</body>

</html>