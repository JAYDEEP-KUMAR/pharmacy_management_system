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

$result = mysqli_query($conn,"SELECT * FROM supplier");

    ?>  <table class="nos"><?php
    
echo "
<tr>
<th>supid</th>
<th>supname</th>
<th>address</th>
<th>city</th>
<th>state</th>
<th>mobileno</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['supid'] . "</td>";
    echo "<td>" . $row['supname'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
      echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['mobileno'] . "</td>";

echo "</tr>";
}
?> </table> <?php

mysqli_close($conn);
?>
    
</body>
</html>