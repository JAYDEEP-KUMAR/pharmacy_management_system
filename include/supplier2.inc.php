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
 //includeing the connection file for database connection 
    $host = "localhost";
    $userName = "root";
   $password = "";
   $db = "pharmacy";

// Create database connection
$conn = new mysqli($host, $userName, $password, $db);
    //include_once 'connection.inc.php';
    // defining variables for inserting
    $name = $_POST['supname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $m = ($_POST['m']);   
$sql="INSERT INTO supplier (supname,address,city,state,mobileno) VALUES ('$name','$address','$city','$state','$m')";
    
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "your data is updated in our database...now redirecting to final map";
    header("Refresh: 20,url=supplier.inc.php");
}
    
    
}
else{
   
   // echo "hi sending your ip address to my developer to take legal action";
    ?>
   <!---- <div>Wrong URL please visit </div>   ----->
    <?php
     header("Refresh: 15,url=index.php");
  
}
?>
</body>    
</html>