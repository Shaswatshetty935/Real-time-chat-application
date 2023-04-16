<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
*{box-sizing:border-box;}
body{
  background-image:url("9.jpg");
  opacity:0.9;
  
  
  
  
  font-family: 'Open Sans', sans-serif; color:#333; font-size:14px; background-color:#dadada; padding:100px;}
.form_box{width:400px; padding:10px; 
  margin:auto; background-color:white;border radius:70px;
}

input{padding:5px;  margin-bottom:5px;}
input[type="submit"]{border:none; outlin:none; background-color:#679f1b; color:white;}
.heading{background-color:#ac1219; color:white; height:40px; width:100%; line-height:40px; text-align:center;}
.shadow{
  -webkit-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
-moz-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);}
.pic{text-align:left; width:33%; float:left;}

</style>

<body>
 <div class="form_box shadow">
 <form method="post" action="practice_ac.php">
 <div class="heading">
   Feedback Form 
 </div>
 <br/>
 <p>Any feedback please let us know?</p>
 <label for="email_id">email</label>
 <input type="email" name="id" placeholder="enter your mail " required>
 <div class="suraj">
   <div class="pic">
     <img src="https://www.pngfind.com/pngs/m/682-6827526_thumbs-down-emoji-86-decal-bad-smiley-hd.png" style="width: 92px;"
      alt=""> <br/>
     <input type="radio" name="quality" value="0"> Bad
   </div>
   <div class="pic">
     <img src="https://img.freepik.com/premium-vector/neutral-emoji-expression-round-yellow-face-emoticon_53562-14276.jpg?w=360" style="width: 71px;"
     alt=""> <br/>
     <input type="radio" name="quality" value="1"> Okay
   </div>
   <div class="pic">
     <img src="https://t3.ftcdn.net/jpg/05/05/86/58/360_F_505865847_HAJ4BtMDxVYTKlveu5BDyljAym3ODnO8.jpg" style="width: 79px;"
     alt=""> <br/>
     <input type="radio" name="quality" value="2"> Good
   </div>

 </div>
 
 <p>Do you have any suggestion for us? </p>
 <textarea name=" suggestion" rows="8" cols="40"></textarea>
  <input type="submit" name="submit" value="Submit Form">
  <br>
  <div><a href="home.php">back</a></div>
</form>
 </div>
</body>
</html>