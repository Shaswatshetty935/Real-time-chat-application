<?php 
require_once("configuration.php");
$id= $_POST['id'];
$q= $_POST['quality'];
$f= $_POST['feedback'];
$gd='delete from feedback where id="' . $id .'" and quality_score="' . $q .'" and feedback="' . $f .'"';
if($al->query($gd)){
    header("location: viewfeedback.php");
}
else{
    echo "error";
}