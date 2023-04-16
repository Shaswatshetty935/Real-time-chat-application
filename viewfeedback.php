<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<?php 
include("configuration.php");

$con = $al;
$ds='select * from feedback';
$fd=$con->query($ds);
?>
<style>

    body{
          background-image:url("9.jpg");
          z-index: -1;
          opacity: 0.8;
    
  opacity:0.9;
    }
    td, th {
        color: white;
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.btn{
    margin: 17px 10px;
        background-color: black;
        color: aliceblue;
        cursor: pointer;
        padding: 6px 14px;
        border: 2px solid grey;
        border-radius: 10px;
        font-size: 20px;
        font-family: 'Baloo Bhai', cursive;
}


</style>
<div class="container mt-4">
    <table>
        <tr>
            <th>ID</th>
            <th>Quality</th>
            <th>Feedback</th>
            <th></th>
        </tr>
        <?php foreach($fd as $f){ ?>
            <tr> <form action="deleteview.php" method="post">
                <input type="text" name="id" value="<?php echo $f['id'] ?>" hidden>
                <input type="text" name="quality" value="<?php echo $f['quality_score'] ?>" hidden>
                <input type="text" name="feedback" value="<?php echo $f['feedback'] ?>" hidden>
                <td><?php echo $f['id'] ?></td>
                <td><?php if($f['quality_score']==0){
                        echo "Bad";
                    } 
                     elseif($f['quality_score']==1){
                        echo "Okay"; 
                    } else { 
                        echo "Good" ;
                    } ?></td>
                <td><?php echo $f['feedback'] ?></td>
                <td><button class="btn" type="submit">delete</button></td>
            </tr></form>
            <?php } ?>
    </table>
    <a href="adminHome.php" class="btn btn-danger">back</a>
</div>


  






