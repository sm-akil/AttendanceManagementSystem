<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: login.php');
}
?>
<?php include('connect.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>AttendanceManagementSystem student list</title>
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
<style type="text/css">
  body{
    background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url('../img/bg15.jpg');
  }
  .navbar{
  background-image: url('../img/bg.jpg');
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

h3{
background-color: #E8472C;
box-shadow: 7px 7px 3px #413C3C;
color : #010310;
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
  background-image: url('../img/bg15.jpg');
  box-shadow: 10px 10px 5px #413C3C;
}
</style>

<body>

<header>

 <h1><marquee>●︎ 𝔸𝕋𝕋𝔼ℕ𝔻𝔸ℕℂ𝔼 ●︎ 𝕄𝔸ℕ𝔸𝔾𝔼𝕄𝔼ℕ𝕋 ●︎ 𝕊𝕐𝕊𝕋𝔼𝕄 ●︎</marquee></h1>
  <div class="navbar">
  <a href="index.php" style="text-decoration:none;">Home</a>
  <a href="../clock.php" style="text-decoration:none;">Time</a>
  <a href="students.php" style="text-decoration:none;">Students</a>
  <a href="report.php" style="text-decoration:none;">Report Section</a>
  <a href="account.php" style="text-decoration:none;">My Account</a>
  <a href="../logout.php" style="text-decoration:none;">Logout</a>

</div>

</header>

<center>

<div class="row">

  <div class="content">
    <h3>≋≋𝐒𝐭𝐮𝐝𝐞𝐧𝐭 𝐋𝐢𝐬𝐭≋≋</h3>
    <br>

   <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Batch</label>
            <div class="col-sm-7">
                <input type="text" name="sr_batch"  class="form-control" id="input1" placeholder="only batch" />
                
            </div>

      </div>
      <input type="submit" class="btn btn-danger col-md-3 col-md-offset-7" style="border-radius:0%" value="Search" name="sr_btn" />
      
   </form>

   <div class="content"></div>
    <table class="table table-striped">
      
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

    if(isset($_POST['sr_btn'])){
     
     $srbatch = $_POST['sr_batch'];
     $i=0;
     
     $all_query = mysql_query("select * from students where students.st_batch = '$srbatch' order by st_id asc");
     
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
              }
      ?>
    </table>

  </div>

</div>

</center>
<h6 style="text-align:center; color: #010B08; font-size: 4px;"><p>ᶜᵒᵖʸʳⁱᵍʰᵗ©  𝓢𝓪𝔂𝓮𝓭  𝓜𝓓.  𝓢𝓪𝓭𝓲𝓴  𝓘𝓺𝓫𝓪𝓵  𝓐𝓴𝓲𝓵.
All rights reserved.</p></h6>

</body>
</html>
