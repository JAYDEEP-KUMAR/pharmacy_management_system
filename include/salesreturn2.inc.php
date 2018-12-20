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
include_once 'connection.inc.php';
// defining variables for inserting
$sid = $_POST['sid'];
$mobileno = $_POST['mobileno'];
$itemname=$_POST['itemname'];
$quantity = $_POST['quantity'];

    $sql5=$conn->query("SELECT SYSDATE() from dual");
    $row5 = mysqli_fetch_row($sql5); 
    $srdate = $row5[0];

$sql="INSERT INTO salesreturn (sid,mobileno,itemname,srdate,quantity) VALUES ($sid,$mobileno,$itemname,'$srdate',$quantity)";

if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
    
    
    
  // $sqlitem ="select quantity from item where itemno=$itemno";
    $result2 = $conn->query("select quantity from item where itemname=$itemname");
   
  if(!$result2 ){
      
//die('There was an error running the query  [' . $conn->error . ']');
}  
    
   else{
       $row = mysqli_fetch_row($result2); 
       $b = $row[0];
 
       $conn->query("update item set quantity=$b+$quantity");

           echo "your data is updated";
   } 
}
}
else{
   
   // echo "hi sending your ip address to my developer to take legal action";
    ?>
   <!---- <div>Wrong URL please visit </div>   ----->
    <?php
     header("Refresh: 0,url=purchase.inc.php");
  
}
?>
</body>    
</html>