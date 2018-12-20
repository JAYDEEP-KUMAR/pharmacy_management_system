<html>
    <head>
 <style>
     table{
         border-collapse: collapse;
         border: 1px solid black;
         
     } 
     th,tr,td{
         width: 1000px;
         border: 1px solid black;
         border-collapse: collapse;
         text-align: center;
     }
     body{
         background-color: white;
         
     }
     .nos{
         
         width: 1000px;
     }
</style>
    
    </head>
<body>
    
    
    
<?php
 include "connection.inc.php";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($conn,"SELECT userid,name,username,who_are_you,email,mobileno FROM login");

    ?>  <table class="nos"><?php
    
echo "
<tr>
<th>userid</th>
<th>name</th>
<th>username</th>
<th>who_are_you</th>
<th>email</th>
<th>mobileno</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['userid'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['who_are_you'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['mobileno'] . "</td>";
echo "</tr>";
}
?> </table> <?php

mysqli_close($conn);
?>
</body>
</html>