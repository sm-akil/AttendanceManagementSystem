


<?php

include('connect.php');

  try{
    
      if(isset($_POST['signup'])){

        if(empty($_POST['email'])){
          throw new Exception("Email cann't be empty.");
        }

        if(empty($_POST['uname'])){
           throw new Exception("Username cann't be empty.");
        }

        if(empty($_POST['pass'])){
           throw new Exception("Password cann't be empty.");
        }
        
        if(empty($_POST['fname'])){
           throw new Exception("Username cann't be empty.");
        }
        if(empty($_POST['phone'])){
           throw new Exception("Username cann't be empty.");
        }
        if(empty($_POST['type'])){
           throw new Exception("Username cann't be empty.");
        }

        $result = mysql_query("insert into admininfo(username,password,email,fname,phone,type) values('$_POST[uname]','$_POST[pass]','$_POST[email]','$_POST[fname]','$_POST[phone]','$_POST[type]')");
        $success_msg="Signup Successfully!";

  
  }
}
  catch(Exception $e){
    $error_msg =$e->getMessage();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>sign up your information</title>
<link rel="icon" href="img/man.png" type="image/icon type">
<meta charset="UTF-8">
  
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

<header>

  <h1><marquee>●︎ 𝔸𝕋𝕋𝔼ℕ𝔻𝔸ℕℂ𝔼 ●︎ 𝕄𝔸ℕ𝔸𝔾𝔼𝕄𝔼ℕ𝕋 ●︎ 𝕊𝕐𝕊𝕋𝔼𝕄 ●︎</marquee></h1>
  <style type="text/css" media="screen">
    body{
      position: relative;
      background-image: url('img/bg5.jpg');
    }
    h1{
      color: #060228;
      padding: 8px;
      background-image: url('img/bg11.jpg');
    }
    h2{
       color:#060228;
       background-image: url('img/bg11.jpg');
       padding: 8px;
    }

    .content{
      background-image: url('img/reset.jpg');
       padding-bottom: 10px;
    }
    form{
      padding-top: 20px;

    }
  </style>

</header>
<center>
<h2>✎ 𝗦𝗶𝗴𝗻𝘂𝗽:</h1>
<div class="content">

  <div class="row">
    <?php
    if(isset($success_msg)) echo $success_msg;
    if(isset($error_msg)) echo $error_msg;
     ?>


    <form method="post" class="form-horizontal col-md-6 col-md-offset-3">

    <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">𝗙𝘂𝗹𝗹 𝗡𝗮𝗺𝗲 :</label>
          <div class="col-sm-7">
            <input type="text" name="fname"  class="form-control" id="input1" placeholder="Full name" required/>
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">𝗣𝗵𝗼𝗻𝗲 𝗡𝘂𝗺𝗯𝗲𝗿 :</label>
          <div class="col-sm-7">
            <input type="number" name="phone"  class="form-control" id="input1" placeholder="Phone Number" required/>
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">𝗘𝗺𝗮𝗶𝗹 :</label>
          <div class="col-sm-7">
            <input type="email" name="email"  class="form-control" id="input1" placeholder="Your Email" required/>
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">𝗨𝘀𝗲𝗿 𝗻𝗮𝗺𝗲 :</label>
          <div class="col-sm-7">
            <input type="text" name="uname"  class="form-control" id="input1" placeholder="Choose Username" required/>
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">𝗣𝗮𝘀𝘀𝘄𝗼𝗿𝗱 :</label>
          <div class="col-sm-7">
            <input type="password" name="pass"  class="form-control" id="input1" placeholder="Enter Password" required/>
          </div>
      </div>


      <div class="form-group" class="radio">
      <label for="input1" class="col-sm-3 control-label">𝗨𝘀𝗲𝗿 𝗥𝗼𝗹𝗲 :</label>
      <div class="col-sm-7">
        <label>
          <input type="radio" name="type" id="optionsRadios1" value="student" checked> 𝗦𝘁𝘂𝗱𝗲𝗻𝘁 •
        </label>
            <label>
          <input type="radio" name="type" id="optionsRadios1" value="teacher"> 𝗧𝗲𝗮𝗰𝗵𝗲𝗿 •
        </label>
        <!-- <label>
          <input type="radio" name="type" id="optionsRadios1" value="admin"> Admin
        </label> -->
      </div>
      </div>

      <input style="background-image: url('img/bg11.jpg'); color:#110101; border: 2px solid #1FC809; border-style:solid;" type="submit" style="border-radius:0%" class="btn btn-primary col-md-3 col-md-offset-8" value="Signup" name="signup" />
    </form>
  </div>
    <br>
    <p><strong>Already have an account? <a href="index.php">Login</a> here.</strong></p>
<p><strong><a style="color: #35A106;border-style: ridge;"href="http://localhost/AttendanceManagementSystem/main-page01.php" style="background-color: #B1B1B1; color:#1914F4">Back to Home</a></strong></p>
</div>


</center>
<h6 style="text-align:center;font-size: 2px;"><p>ᶜᵒᵖʸʳⁱᵍʰᵗ©  𝓢𝓪𝔂𝓮𝓭  𝓜𝓓.  𝓢𝓪𝓭𝓲𝓴  𝓘𝓺𝓫𝓪𝓵  𝓐𝓴𝓲𝓵.
All rights reserved.</p></h6>

</body>
</html>
