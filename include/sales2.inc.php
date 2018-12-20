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
$mobile = $_POST['mobileno'];
$itemname=$_POST['itemname'];
//$sdate = $_POST['sdate'];
$quantity = $_POST['quantity'];
    
    
     
    $name = $_POST['cname'];
    $age = (int)$_POST['age'];
  

 
    //insert query for customer
$sql="INSERT INTO customer (cname,age,mobileno) VALUES ('$name',$age,'$mobile')";
    $result = $conn->query($sql);

    
        
$sql4=$conn->query("select itemno from item where itemname='$itemname'");
       $row2 = mysqli_fetch_row($sql4); 
       $itemno = $row2[0];
    
    
  $sql5=$conn->query("SELECT SYSDATE() from dual");
    
    $row5 = mysqli_fetch_row($sql5); 
       $sdate = $row5[0];
    
    
    
    
    //insert query for sale
$sql1="INSERT INTO sales (mobileno,itemno,sdate,quantity) VALUES ($mobile,$itemno,'$sdate',$quantity)";

if(!$result = $conn->query($sql1)){
    
    
die('There was an error running the query [' . $conn->error . ']');
    
    
}
else
{
    
    
    
//selecting 
    $result2 = $conn->query("select quantity from item where itemno=$itemno");
   
  if(!$result2 ){
      
//die('There was an error running the query  [' . $conn->error . ']');
}  
    
   else{
       $row = mysqli_fetch_row($result2); 
       $b = $row[0];
     //  echo "your request is processed";
       //echo "$b";
       $conn->query("update item set quantity=$b-$quantity");
       //if(!update2){
        //   echo "wrong";
           // die('There was an error running the query [' . $conn->error . ']');
       //}
           echo "your data is updated";
       
       header("Refresh: 0,url=pdf.php");
   
       
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