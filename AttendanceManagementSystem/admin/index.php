<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{

  header('location: ../index.php');
}
?>

<?php

include('connect.php');

//data insertion
  try{

    //checking if the data comes from students form
    if(isset($_POST['std'])){

      //students data insertion to database table "students"
        $result = mysql_query("insert into students(st_id,st_name,st_dept,st_batch,st_sem,st_email) values('$_POST[st_id]','$_POST[st_name]','$_POST[st_dept]','$_POST[st_batch]','$_POST[st_sem]','$_POST[st_email]')");
        $success_msg = "Student added successfully.";

    }

        //checking if the data comes from teachers form
        if(isset($_POST['tcr'])){

          //teachers data insertion to the database table "teachers"
          $res = mysql_query("insert into teachers(tc_id,tc_name,tc_dept,tc_email,tc_course) values('$_POST[tc_id]','$_POST[tc_name]','$_POST[tc_dept]','$_POST[tc_email]','$_POST[tc_course]')");
          $success_msg = "Teacher added successfully.";
    }

  }
  catch(Execption $e){
    $error_msg =$e->getMessage();
  }

 ?>



<!DOCTYPE html>
<html lang="en">
<!-- head started -->
<head>
<title>Insert data in student and teachers form.</title>
<meta charset="UTF-8">
  <link rel="icon" href="../img/man.png" sizes="32x32" type="image/png">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

  body{
    background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url('../img/content.jpg');
  }
  header{
    
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
h4{
background-image: url('../img/bg10.jpg');
color : #160101;
margin-right: 10px;
margin-left: 10px;
margin-bottom: 32px;
border-style: 2px solid;
border-color: #F81414;
outline-style: outset;
outline-style: groove;
border-style: dashed;
padding: 10px;
}
.navbar{
  background-image: url('../img/blk.jpg');
}
body{
  background-color: #D5FCF2;
}
form{
  background-image: url('../img/bg15.jpg');
  box-shadow: 10px 10px 5px #413C3C;
  padding: 17px;
  margin-bottom: 30px;
  margin-top: 0px;
}
  .message{
    padding: 10px;
    font-size: 15px;
    font: bold;
    color: black;
  }
  .towrow{
    margin-top: 0px;
    padding-bottom: 150px;
  }

.btn{
  background-image: url('../img/bg11.jpg');
  border-radius: 5px;
  border: 1px solid #02060F;
  transition: all 0.2s ease;
  padding-right: 17px;
}
.content{
  background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url('../img/content.jpg');
}
</style>
</head>
<!-- head ended -->

<!-- body started -->
<body>
   <center>

      <div class="copy">
  <p style="text-align: right; color:#0C0000; font-size: 18px;">ᶜᵒᵖʸʳⁱᵍʰᵗ©  𝓢𝓪𝔂𝓮𝓭  𝓜𝓓.  𝓢𝓪𝓭𝓲𝓴  𝓘𝓺𝓫𝓪𝓵  𝓐𝓴𝓲𝓵.
           All rights reserved.</p>
</div>
    <!-- Menus started-->
    <header>

      <h1><marquee>●︎ 𝔸𝕋𝕋𝔼ℕ𝔻𝔸ℕℂ𝔼 ●︎ 𝕄𝔸ℕ𝔸𝔾𝔼𝕄𝔼ℕ𝕋 ●︎ 𝕊𝕐𝕊𝕋𝔼𝕄 ●︎</marquee></h1>
      <div class="navbar">
      <a href="../main-page01.php" style="text-decoration:none;">Home</a>
      <a href="../clock.php" style="text-decoration:none;">Time</a>
      <a href="signup.php" style="text-decoration:none;">Create Users</a>
      <a href="index.php" style="text-decoration:none;">Add Student/Teacher</a>
      <a href="v-students.php" style="text-decoration:none;">View Students</a>
      <a href="v-teachers.php" style="text-decoration:none;">View Teachers</a>
      <a href="../logout.php" style="text-decoration:none;">Logout</a>


    </div>

    </header>
    <!-- Menus ended -->


<!-- Error or Success Message printint started -->
<div class="message">
        <?php if(isset($success_msg)) echo $success_msg; if(isset($error_msg)) echo $error_msg; ?>
</div>
<!-- Error or Success Message printint ended -->

<!-- Content, Tables, Forms, Texts, Images started -->
<div class="content">

 <strong> <center style="font-size:25px;"> 𝐒𝐞𝐥𝐞𝐜𝐭 : <a href="#teacher">●𝐓𝐞𝐚𝐜𝐡𝐞𝐫●</a> | <a href="">●𝐒𝐭𝐮𝐝𝐞𝐧𝐭●</a> <br></center>  </strong>

  
      <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
      <h4>Add Student's Information</h4>
      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Reg. No.</label>
          <div class="col-sm-7">
            <input type="text" name="st_id"  class="form-control" id="input1" placeholder="student reg. no." />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-7">
            <input type="text" name="st_name"  class="form-control" id="input1" placeholder="student full name" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Department</label>
          <div class="col-sm-7">
            <input type="text" name="st_dept"  class="form-control" id="input1" placeholder="department ex. CSE" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Batch</label>
          <div class="col-sm-7">
            <input type="text" name="st_batch"  class="form-control" id="input1" placeholder="batch e.x 2020" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Semester</label>
          <div class="col-sm-7">
            <input type="text" name="st_sem"  class="form-control" id="input1" placeholder="semester ex. Fall-15" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-7">
            <input type="email" name="st_email"  class="form-control" id="input1" placeholder="valid email" />
          </div>
      </div>


      <input type="submit" style="color:#0C0101;" class="btn btn-primary col-md-2 col-md-offset-8" value="Add Student" name="std" />
    </form>

  <!--</div> <div class="row" id="student"> -->
<br><br>
  <!-- <div class="rowtwo" id="teacher"> -->
  
       <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
        <h4>Add Teacher's Information</h4>
      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Teacher ID</label>
          <div class="col-sm-7">
            <input type="text" name="tc_id"  class="form-control" id="input1" placeholder="teacher's id" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-7">
            <input type="text" name="tc_name"  class="form-control" id="input1" placeholder="teacher full name" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Department</label>
          <div class="col-sm-7">
            <input type="text" name="tc_dept"  class="form-control" id="input1" placeholder="department ex. CSE" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-7">
            <input type="email" name="tc_email"  class="form-control" id="input1" placeholder="valid email" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Subject Name</label>
          <div class="col-sm-7">
            <input type="text" name="tc_course"  class="form-control" id="input1" placeholder="subject ex. Software Engineering" />
          </div>
      </div>

      <input type="submit" style="color:#0C0101;"class="btn btn-primary col-md-2 col-md-offset-8" value="Add Teacher" name="tcr" />


    </form>
    
  </div>

<br>

</center>
</body>
</html>
