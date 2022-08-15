<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{

  header('location: ../index.php');
}
?>


<?php

//establishing connection
include('connect.php');

  try{

    //validation of empty fields
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

        //insertion of data to database table admininfo
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

<!-- head started -->
<head>
<title>show student information</title>
<meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<!-- head ended -->
<style type="text/css">
  body{
    background-image: url('../img/bg.jpg');
  }
  .navbar{
  background-image: url('../img/bg10.jpg');
}
 h1{
background-image: url('../img/blk.jpg');
color : #FCFF1F;
margin-right: 2px;
margin-left: 2px;
border-style: 2px solid;
border-color: #F81414;
outline-style: inset;
outline-style: groove;
border-style: dashed;
padding: 10px;
}

h2{
background-color: #630E28;
color : #FCFF1F;
margin-right: 400px;
margin-left: 400px;
border-style: 3px solid;
border-color: #F81414;
outline-style: outset;
outline-style: outset;
border-style: dotted;
padding: 10px;
}
.content{
  position : relative ;
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 15px;
  background-image:url('../img/content.jpg');
}

</style>
<!-- body started -->
<body>

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

<center>
<h2>😎𝐀𝐥𝐥 𝐒𝐭𝐮𝐝𝐞𝐧𝐭𝐬😎</h2>

<div class="content">

  <div class="row">
   
    <table class="table table-striped table-hover">
      
        <thead>
        <tr>
          <th scope="col">Registration No.</th>
          <th scope="col">Name</th>
          <th scope="col">Department</th>
          <th scope="col">Batch</th>
          <th scope="col">Semester</th>
          <th scope="col">Email</th>
        </tr>
        </thead>
     <?php
       
       $i=0;
       
       $all_query = mysql_query("SELECT * from students ORDER BY st_id asc");
       
       while ($data = mysql_fetch_array($all_query)) {
         $i++;
       
       ?>
  
       <tr>
         <td><?php echo $data['st_id']; ?></td>
         <td><?php echo $data['st_name']; ?></td>
         <td><?php echo $data['st_dept']; ?></td>
         <td><?php echo $data['st_batch']; ?></td>
         <td><?php echo $data['st_sem']; ?></td>
         <td><?php echo $data['st_email']; ?></td>
       </tr>
  
       <?php 
            } 
              
        ?>
      </table>
    
  </div>
    

</div>

</center>
<h6 style="text-align:center; color: #B2FFE3; font-size: 4px;"><p>ᶜᵒᵖʸʳⁱᵍʰᵗ©  𝓢𝓪𝔂𝓮𝓭  𝓜𝓓.  𝓢𝓪𝓭𝓲𝓴  𝓘𝓺𝓫𝓪𝓵  𝓐𝓴𝓲𝓵.
All rights reserved.</p></h6>
</body>
<!-- Body ended  -->

</html>
