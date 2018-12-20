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
$price = (int)$_POST['price'];
$mfg = $_POST['mfgdate'];
$exp = $_POST['expdate'];
$name=$_POST['itemname'];
$quantity = $_POST['quantity'];
$supid=$_POST['supid'];
$sql="INSERT INTO item (itemname,mfgdate,expdate,price,quantity,supid) VALUES ('$name','$mfg','$exp','$price','$quantity','$supid')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "your data is updated in our database...now redirecting to final map";
    header("Refresh: 1,url=welcome.inc.php");
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