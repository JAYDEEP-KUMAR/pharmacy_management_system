<html>
<head>
    <style>
        html{
            
            background-color: aqua;
            text-align: center;
            font-size: 20px;
        }
    
    </style>
    
</head>
    
<body>
<?php
if(isset($_POST['submit'])){ 
    include_once 'connection.inc.php';
$name=$_POST['name'];
$userid = (int)$_POST['userid'];
$username=$_POST['username'];
    //insert query for mongodb
$sql="DELETE FROM login WHERE userid=$userid and username='$username' and name='$name' ";

if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "your data is updated in our database...now redirecting to final map";
    header("Refresh: 10,url=deletemedicine.inc.php");
}
}
else{
    ?>
    <?php
     header("Refresh: 0,url=../main/index.php");
  
}
?>
</body>    
</html>