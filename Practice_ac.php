<?php
$id=$_POST['id'];
$q_score = $_POST['quality'];
$feedback_txt = $_POST['suggestion'];
$conn = mysqli_connect("localhost", "root","", "mini_project");
$query ="insert into feedback(quality_score, feedback,id)values($q_score, '$feedback_txt','$id')";
$result = mysqli_query($conn, $query);
if($result)
  echo 'Thank you for your feedback. We\'ll appreciate!';
else
die("Something terrible happened. Please try again. ");
?>
