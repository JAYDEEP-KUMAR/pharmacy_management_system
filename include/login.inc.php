<html>
    <head>
    <style type="text/css">
        html{
            background-color: aqua;
            color: white;
            text-align: center;
            font-size: 30px;
            
        }
        
        
    </style>
    
    
    
    </head>
    
    <body>
    
    <!----main php function----------->
<?php


    include_once 'connection.inc.php';
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $who_are_you = $_POST['who_are_you'];
    //insert query for mongodb
$result = $conn->query("select password from login where username='$username'");
    $row = mysqli_fetch_row($result); 
       $b = $row[0];

if($b==$password){
    echo "hi";
    session_start();
    $_SESSION['who_are_you']=$who_are_you;
    header("location:../main/$who_are_you.php");
    die('There was an error running the query  [' . $conn->error . ']');
}
        
        ///error handel if $result is not satisfied.......
        
else{
    
  ////  echo "please try again your data is not matched";
    
    // error handel with html.....
   // die('There was an error running the query  [' . $conn->error . ']');
    
   ?>
        <P>your data hi not matched sorry</P><br>
        <p>please enter your correct data like  userid and password</p>
   <?php
    
    
    //end html error handeler......
    
    
    
    header("Refresh: 5 ; url=../main/index.php");
}

?>
    
    <!--------end php function--------->
    
    
    
 </body>   
</html>