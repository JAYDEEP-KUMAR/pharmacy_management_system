s
<?php 
// if session already started, this loads $_SESSION with existing values:

session_start();

if(isset($_SESSION['user'])) { 
    echo "please logout and login again thank you... please when you are laeving the system please ensure rhat you logout succefully thank you so much...";
    
    ///logout button if any one already login
    ?>
    <a href="../include/logout.php"><button class="logout">Logout</button></a>
    <?php
    
    if ($_SESSION['who_are_you'] === "Admin") {
        
        // Code to show for admin user
?>

*/
<!doctype html>
<html>
<head>
    <meta name="description" content="A store from where you can buy every medicine on less amount,on offer all medicine,">
    
    <meta name="keywords" content="buy medicine,purchase medicine,offer medicine"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
       <meta name="theme-color" content="#002244"/>
      <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
       <link rel="stylesheet" href="style/bootstrap.min.css">
   
    <title>PHRAMACY STORE</title>
    <style type="text/css">
        body { 
  background: url("Medicine-Wallpapers-HD.jpg") no-repeat center center fixed; 
 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
        .bg_img{
            box-sizing: border-box;
            border: none;
            outline: none;
            margin: none;
            
    
        }
        .left{
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgba(0,0,0,0.5);
            overflow-x: hidden;
            outline: none;
            border: none;
            box-sizing: border-box;
            
        }
        .right{
            height: 100%;
            width: calc(100% - 200px);
            position: fixed;
            margin-left: 200px;
            background-color: transparent;
            text-align: center;
            vertical-align:center;
        }
        .container_title{
            color: indianred;
            font-size: 30px;
            background-color: orangered;
            height: 50px;
            width: calc(100% + 30px);
            margin-left: -15px;
            color: white;
        }
        .bu{
            border-radius: 10px;
            outline: none !important;
            border: none;
            outline: none;
            border: none;
            color: white;
            background-color: chartreuse;
            width: 100px;
            margin: 10px;
            height: 70px;
            margin-left: 25px;
        }
        .bu:hover{
            background-color: fuchsia;
            transition-duration: 0.2s;
            margin: 10px 10px 10px 10px;
            cursor: pointer;
        }
        .bu:focus{
          /*  box-shadow: 10px 10px 5px white; */
            background-color: red;

            transition-duration: 0.4s; 
        }
        .action{
            text-align: center;
            background-color: orangered;
            width: 200px;
            margin-left: -20px;
            height: 50px;
        }
        .table{
            border: none !important;
            width: 100%;
            background-color: aliceblue;
            color: dimgrey;
            border-radius: 20px;
            outline: none !important;
            border-collapse: collapse;
        }
        .logout{
             border-radius: 10px;
            outline: none !important;
            border: none;
            outline: none;
            border: none;
            color: white;
            background-color: chartreuse;
            margin-left: 25px;
        }
        .logout:focus{
                      /*  box-shadow: 10px 10px 5px white; */
            background-color: red;

            transition-duration: 0.4s; 
        }
        .logout:hover{
            background-color: fuchsia;
            transition-duration: 0.2s;
            cursor: pointer;
        }
    </style>
  </head>
    
<body>
<div class="bg_img">
        <div class="container-fluid left">
        <div class="action">Action</div>
        <a href="report.php" target="if"><button id="report" class="bu">Report</button></a>
        <a href="../include/stock.inc.php" target="if"><button class="bu">Stock</button></a>
        <a href="../include/addmedicine.inc.php" target="if"><button class="bu">Add Medicine</button></a>
        <a href="removemedicine.php" target="if"><button class="bu">Remove Medicine</button></a>
        <a href="modifymedicine.php" target="if"><button class="bu">Modify Medicine</button></a>
        <a href="../include/addstaff.inc.php" target="if"><button class="bu">Add Staff</button></a>
        <a href="removestaff.php" target="if"><button class="bu">Remove staff</button></a>
        <a href="promotion.php" target="if"><button class="bu">Promotion</button></a>
        <a href="controlmanager.php" target="if"><button class="bu">Control Manager</button></a>
    </div>
    <div class="container-fluid right">
        <div class="container_title"><p>Your Results <a href="../include/logout.php"><button class="logout">Logout</button></a></p></div>
        <iframe src="../include/addmedicine.inc.php" name="if" width="1200px" style="margin-left:-17px;" height="700px" scrolling="no"></iframe>
    </div>
</div>        
</body>    
</html>








<?php
    
  /// else for if who_are is different   .......      
        
    }
    else {
       echo "sorry you are not admin tahnk you login agin again don't try this otherwise may be i'll take lehgal action thank you so much     dhanyabaad...";
    }
}


//// else for if login login...
else { 
    echo "you are not logined please login properely tahnk you....";
    header("Refresh:5 ;url=../main/index.php");
    echo "wait until we redirect you automatically.......... ";
} 
?> 


