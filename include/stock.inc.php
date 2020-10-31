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

$result = mysqli_query($conn,"SELECT * FROM item");

    ?>  <table class="nos"><?php
    
echo "
<tr>
<th>Itemno</th>
<th>Itemname</th>
<th>Price</th>
<th>Quantity</th>
<th>Mfgdate</th>
<th>Expdate</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['itemno'] . "</td>";
echo "<td>" . $row['itemname'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['mfgdate'] . "</td>";
echo "<td>" . $row['expdate'] . "</td>";
echo "</tr>";
}
?> </table> <?php

#mysqli_close($conn);
    #EVEN Without the close connection, it will work.
?>
</body>
</html>
