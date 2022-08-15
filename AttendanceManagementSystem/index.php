<?php

if(isset($_POST['login']))
{
	//start of try block

	try{

		//checking empty fields
		if(empty($_POST['username'])){
			throw new Exception("Username is required!");
			
		}
		if(empty($_POST['password'])){
			throw new Exception("Password is required!");
			
		}
		//establishing connection with db and things
		include ('connect.php');
		
		//checking login info into database
		$row=0;
		$result=mysql_query("select * from admininfo where username='$_POST[username]' and password='$_POST[password]' and type='$_POST[type]'");

		$row=mysql_num_rows($result);

		if($row>0 && $_POST["type"] == 'teacher'){
			session_start();
			$_SESSION['name']="oasis";
			header('location: teacher/index.php');
		}

		else if($row>0 &&  $_POST["type"] == 'student'){
			session_start();
			$_SESSION['name']="oasis";
			header('location: student/index.php');
		}

		else if($row>0 && $_POST["type"] == 'admin'){
			session_start();
			$_SESSION['name']="oasis";
			header('location: admin/index.php');
		}

		else{
			throw new Exception("Username,Password or Role is wrong, try again!");
			
			header('location: login.php');
		}
	}

	//end of try block
	catch(Exception $e){
		$error_msg=$e->getMessage();
	}
	//end of try-catch
}

?>

<!DOCTYPE html>
<html>
<head>

	<title>User login panel</title>
	<link rel="icon" href="img/man.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
	 
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
	 
	<link rel="stylesheet" href="styles.css" >
	 
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
	<center>

<header>

<h1><marquee>●︎ 𝔸𝕋𝕋𝔼ℕ𝔻𝔸ℕℂ𝔼 ●︎ 𝕄𝔸ℕ𝔸𝔾𝔼𝕄𝔼ℕ𝕋 ●︎ 𝕊𝕐𝕊𝕋𝔼𝕄 ●︎</h1>
<style type="text/css">
	h1{
		background-image: url('img/content.jpg');
      display: block;
	}
	body{
		background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.2)),url('img/bg4.jpg');
		margin: 0px;
		padding: 0px;
	}
</style>

 </marquee>

</header>



<?php
//printing error message
if(isset($error_msg))
{
	echo $error_msg;
}
?>

<div class="content" style="background-image: url('img/bg4.jpg');">
   <h3 > 𝐋𝐨𝐠𝐢𝐧 𝐏𝐚𝐧𝐞𝐥

    	<style type="text/css">
		h3{
			color : #250606;
			margin-right: 470px;
			margin-left: 470px;
			border-style: solid;
         border-color: #E3C344;
         outline-style: outset;
         outline-style: groove;
			border-style: dashed;
			padding: 10px;
			margin-top: 0px;
		}
		.content{
			margin-top: 25px;
			padding-top: 15px;
		}

</style>

   </h3>
	<div class="row">
    	<form method="post" class="form-horizontal col-md-4 col-md-offset-4" >
	 <style>
     	form{
     		background-image: url('img/bg5.jpg');
     		padding-top: 40px;
     		padding-bottom: 20px;
     		margin : 19px;
     		margin-right: 25px;
     		padding: 33px;
     		padding-left:20px ;
     		padding-right: 20px;

     	}   
     </style>

			<div class="form-group">
			    <label for="input1" class="col-sm-4 control-label">𝗨𝘀𝗲𝗿 𝗻𝗮𝗺𝗲</label>
			    <div class="col-sm-7">
			      <input type="text" name="username"  class="form-control" id="input1" placeholder="Your Username" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-4 control-label">𝗣𝗮𝘀𝘀𝘄𝗼𝗿𝗱</label>
			    <div class="col-sm-7">
			      <input type="password" name="password"  class="form-control" id="input1" placeholder="Your Password" />
			    </div>
			</div>


			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-4 control-label">𝗟𝗼𝗴𝗶𝗻 𝗔𝘀</label>
			<div class="col-sm-7">
			  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="student" checked>𝐬𝐭𝐮𝐝𝐞𝐧𝐭
			  </label>
			  	  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="teacher">𝐭𝐞𝐚𝐜𝐡𝐞𝐫
			  </label>
			  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="admin">𝐚𝐝𝐦𝐢𝐧
			  </label>
			</div>
			</div>


			<input style="border: 2px solid #390315; border-style:solid;" type="submit" class="btn btn-success col-md-7 col-md-offset-3" style="border-radius:0%" value="Login" name="login" />
		</form>
	
</div>

<div class="bx">
	<style type="text/css">
		.bx{
			color : #FB1697;
			margin-right: 360px;
			margin-left: 360px;
			border-style: solid;
         border-color: #A0FF25;
         outline-style: outset;
         outline-style: groove;
		  	border-style: dashed;
			margin-top: 5px;
			padding-top: 7px;
		}

</style>

<p><strong><a href="reset.php" style="color:#0ADFF2;">Reset Password</a></strong></p>
<p><strong><a href="signup.php" style="color:#03D612;">Create a New Account</a></strong></p>
<p><strong><a href="http://localhost/AttendanceManagementSystem/main-page01.php" style="color:#1914F4">Back to Home</a></strong></p>
</div>


</center>
<h6 style="text-align:center; color: #D3DF69;font-size: 2px;"><p>ᶜᵒᵖʸʳⁱᵍʰᵗ©  𝓢𝓪𝔂𝓮𝓭  𝓜𝓓.  𝓢𝓪𝓭𝓲𝓴  𝓘𝓺𝓫𝓪𝓵  𝓐𝓴𝓲𝓵.
All rights reserved.</p></h6>
</body>
</html>