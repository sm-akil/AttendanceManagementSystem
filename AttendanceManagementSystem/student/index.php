<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- head started -->
<head>
<title>AMS student profile</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<!-- head ended -->
<style type="text/css">
  body{
   background-image: url('../img/17.jpg');
  }
  .navbar{
  background-image: url('../img/blk.jpg');
}
.content{
  background-image: url('../img/17.jpg');
}
h1{
background-image: url('../img/bg8.jpg');
color : #FCFF1F;
margin-right: 10px;
margin-left: 10px;
border-style: 2px solid;
border-color: #F81414;
outline-style: outset;
outline-style: groove;
border-style: dashed;
padding: 10px;
}

h2{
background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.1)), url('../img/17.jpg');
box-shadow: 10px 10px 5px #413C3C;
margin-top: 20px;
padding: 10px;
text-align: center;
color : #0D0D0C;
margin-right: 400px;
margin-left: 400px;
border-style: 3px solid;
border-color: #FFEF41;
outline-style: outset;
border-style: dotted;
}
</style>
<!-- body started -->
<body>

<!-- Menus started-->
<header>

  <h1>●︎ 𝔸𝕋𝕋𝔼ℕ𝔻𝔸ℕℂ𝔼 ●︎ 𝕄𝔸ℕ𝔸𝔾𝔼𝕄𝔼ℕ𝕋 ●︎ 𝕊𝕐𝕊𝕋𝔼𝕄 ●︎</h1>
  <div class="navbar">
  <a href="index.php" style="text-decoration:none;">Home</a>
  <a href="students.php" style="text-decoration:none;">Students</a>
  <a href="report.php" style="text-decoration:none;">Report Section</a>
  <a href="account.php" style="text-decoration:none;">My Account</a>
  <a href="../logout.php" style="text-decoration:none;">Logout</a>

</div>

</header>
<!-- Menus ended -->
<h2>🌟 W͙e͙l͙c͙o͙m͙e͙ 🌟</h2>
<center>

<!-- Content, Tables, Forms, Texts, Images started -->
<div class="row">
    <div class="content">
    
    <img src="../img/hi.png" width="350px" height="400px" />
  <h3> 𝙔𝙤𝙪 𝙖𝙧𝙚 𝙨𝙪𝙘𝙘𝙚𝙨𝙨𝙛𝙪𝙡𝙡𝙮 𝙡𝙤𝙜𝙞𝙣 𝙝𝙚𝙧𝙚...💖💖</h5>
  </div>
</div>
<!-- Contents, Tables, Forms, Images ended -->

</center>
<h6 style="text-align:center; color: #06120E; font-size: 4px;"><p>ᶜᵒᵖʸʳⁱᵍʰᵗ©  𝓢𝓪𝔂𝓮𝓭  𝓜𝓓.  𝓢𝓪𝓭𝓲𝓴  𝓘𝓺𝓫𝓪𝓵  𝓐𝓴𝓲𝓵.
All rights reserved.</p></h6>

</body>
<!-- Body ended  -->

</html>
