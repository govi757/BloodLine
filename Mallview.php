<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
 <link rel="stylesheet" href="page01.css">
<body>


<?php

   $shopname=array();
   $i=0;
include("sqlconfig.php");
   
   session_start();
    $name=$_SESSION['name'];
   echo $name;
   
   if(!$_SESSION['loggedin'])
   {
	echo "user not logged in";   
	header("location:homepage.php");
   }
  
   $sql="SELECT shopname FROM shop";
   $result=$conn->query($sql);
   
   while($row=mysqli_fetch_array($result))
   {
	   $shopname[$i]=$row["shopname"];
	   $i++;	   
   }
   
   ?>


<div class="bar">
<div class="profile">
<h2><a><?php echo $name;?></a></h2><br> <h2><a >Mycart</a></h2><br> <h2><a href="logout.php">Logout</a></h2></div><h2><a style="float:right">Mallname</a></h2>
</div>





<center><div class="viewshop"><br>
<a href="shopview.php"><h2><?php $i=0; echo $shopname[$i];$s=$_SESSION['sname']=$shopname[$i]; //here echo works properly.But only second variable is passing?></h2></a>
<a href="shopview.php"><h2><?php $i=1;echo $shopname[$i];$_SESSION['sname']=$shopname[$i]; ?></h2></a>
<a href="usersloginpage.php"></a>
<a href="usersloginpage.php"></a>
</div></center>


</body>
</html>