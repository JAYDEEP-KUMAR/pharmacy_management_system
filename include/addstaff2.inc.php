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
    $host = "localhost";
    $userName = "root";
   $password = "";
   $db = "pharmacy";
$conn = new mysqli($host, $userName, $password, $db);
    $name = $_POST['name'];
    $uname = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $m = ($_POST['m']);
    $gender = $_POST['gender'];
    $who_are_you = $_POST['who_are_you'];
   $address = $_POST['address'];
$sql="INSERT INTO login (name,username,password,who_are_you,email,mobileno,gender,address) VALUES ('$name','$uname','$password','$who_are_you','$email','$m','$gender','$address')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "your data is updated in our database...now redirecting to final map";
    header("Refresh: 20,url=addstaff.inc.php");
}}
else{
   
     header("Refresh: 15,url=../main/index.php");
} ?>
</body>    
</html>