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

$result = mysqli_query($conn,"SELECT * FROM customer");

    ?>  <table class="nos"><?php
    
echo "
<tr>
<th>cname</th>
<th>age</th>
<th>mobileno</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['cname'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['mobileno'] . "</td>";
echo "</tr>";
}
?> </table> <?php

mysqli_close($conn);
?>
</body>
</html>