<?php 
  
  include('connect.php');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Recover your account</title>
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
<body style="background-image: url('img/content.jpg');">

<header>

  <h1>●︎ 𝔸𝕋𝕋𝔼ℕ𝔻𝔸ℕℂ𝔼 ●︎ 𝕄𝔸ℕ𝔸𝔾𝔼𝕄𝔼ℕ𝕋 ●︎ 𝕊𝕐𝕊𝕋𝔼𝕄 ●︎</h1>
  <div class="navbar">
    <a href="main-page01.php">Home</a>
    <a href="clock.php">Time</a>
    <a href="index.php">Login</a>
    </div>

  <style type="text/css">
    .navbar{
      background-image:url('img/blk.jpg');
    }
    a:hover{
      color: blue;
    }
     content{
      background-image: url('img/reset.jpg');
      position: relative;
    }
    h3{
      color : #010000;
      margin-right: 50px;
      margin-left: 50px;
      border-style: solid;
      border-color: #FF610B;
      outline-style: outset;
      border-style: double;
      border-style: dotted  ;
      padding: 8px;
    }
    .form-group{
      margin-top: 35px;
      padding: 20px;
      background-image: url('img/bg2.jpg');
      border-style: 2px solid;
      outline-style: groove;
    }
    .row{
      background-image: url('img/bg10.jpg');
    }


  </style>



</header>

<center>

<div class="content">
    <div class="row">

    <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
    <h3>Recover your password</h3>

      <div class="form-group">
           
          <label for="input1" class="col-sm-2 control-label"><strong>𝗘𝗺𝗮𝗶𝗹 :</strong></label>
          <div class="col-sm-10">
            <input type="email" name="email"  class="form-control" id="input1" placeholder="Type your email" />
          </div>
      </div>

      <input style="border: 2px solid #000000; border-style:solid;" type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Go" name="reset" />
    </form>

      <br>

      <?php

          if(isset($_POST['reset'])){

          $test = $_POST['email'];
          $row = 0;
          $query = mysql_query("select password from admininfo where email = '$test'");
          $row = mysql_num_rows($query);

          if($row == 0){
?>
      <div  class="content"><p style="color:red;">Email is not associated with any account !!!<br> Try again with correct email..</p></div>

<?php
          }

          else{

            $query = mysql_query("select password from admininfo where email = '$test'");
            $i =0;
            while($dat = mysql_fetch_array($query)){
                $i++;
?>
  <strong>
  <p style="text-align: left;">Hi there!<br>You requested for a password recovery. You may <a href="index.php">Login here</a> and enter this key as your password to login. Recovery key: <mark><?php echo $dat['password']; ?></mark><br>Regards,<br>From Admin_panel</p></strong>
<?php
      }
          }
  }


       ?>

  </div>

</div>
<h6 style="text-align:right; font-size: 2px;"><p>ᶜᵒᵖʸʳⁱᵍʰᵗ©  𝓢𝓪𝔂𝓮𝓭  𝓜𝓓.  𝓢𝓪𝓭𝓲𝓴  𝓘𝓺𝓫𝓪𝓵  𝓐𝓴𝓲𝓵.
All rights reserved.</p></h6>

</center>

</body>
</html>
