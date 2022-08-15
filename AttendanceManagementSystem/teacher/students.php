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
<title>AMS students info</title>
<meta charset="UTF-8">
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
   background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.2)),url('../img/17.jpg');
  }
.navbar{
  background-image: url('../img/blk.jpg');
}
.content{
  background-image: url('../img/bg15.jpg');
  box-shadow: 10px 10px 5px #413C3C;

}
h1{
background-image:linear-gradient(rgba(0,0,0,0.99),rgba(0,0,0,0.2)), url('../img/bg8.jpg');
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

h3{
background-image: linear-gradient(rgba(0,0,0,0.99),rgba(0,0,0,0.22)), ,url('../img/content.jpg'); 
box-shadow: 5px 5px 2px #413C3C;
margin-top: 20px;
padding: 10px;
text-align: center;
color : #0D0D0C;
margin-right: 400px;
margin-left: 400px;
border-style: 3px solid;
border-color: #FD87F6;
outline-style: outset;
border-style: dotted;
}

</style>
  
</head>
<body>

<header>

  <h1>●︎ 𝔸𝕋𝕋𝔼ℕ𝔻𝔸ℕℂ𝔼 ●︎ 𝕄𝔸ℕ𝔸𝔾𝔼𝕄𝔼ℕ𝕋 ●︎ 𝕊𝕐𝕊𝕋𝔼𝕄 ●︎</h1>
  <div class="navbar">
  <a href="index.php" style="text-decoration:none;">Home</a>
  <a href="../clock.php" style="text-decoration:none;">Time</a>
  <a href="students.php" style="text-decoration:none;">Students</a>
  <a href="teachers.php" style="text-decoration:none;">Faculties</a>
  <a href="attendance.php" style="text-decoration:none;">Attendance</a>
  <a href="report.php" style="text-decoration:none;">Report</a>
  <a href="../logout.php" style="text-decoration:none;">Logout</a>


</div>

</header>

<center>

<div class="row">

  <div class="content">
    <h3>≋≋𝐒𝐭𝐮𝐝𝐞𝐧𝐭 𝐋𝐢𝐬𝐭≋≋</h3>
    <br>
    <form method="post" action="">
      <label>Batch</label>
      <input type="text" name="sr_batch">
      <input type="submit" name="sr_btn" class="btn btn-danger" style="border-radius:0%" value="Search" >
    </form>
    <br>
    <table class="table table-stripped table-hover">
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
     
     $all_query = mysql_query("select * from students where students.st_batch = '$srbatch' order by st_id asc ");
     
     while ($data = mysql_fetch_array($all_query)) {
       $i++;
     
     ?>
  <tbody>
     <tr>
       <td><?php echo $data['st_id']; ?></td>
       <td><?php echo $data['st_name']; ?></td>
       <td><?php echo $data['st_dept']; ?></td>
       <td><?php echo $data['st_batch']; ?></td>
       <td><?php echo $data['st_sem']; ?></td>
       <td><?php echo $data['st_email']; ?></td>
     </tr>
  </tbody>

     <?php 
          } 
              }
      ?>
      
    </table>

  </div>

</div>

</center>
<h6 style="text-align:center; color: #160306; font-size: 4px;"><p>ᶜᵒᵖʸʳⁱᵍʰᵗ©  𝓢𝓪𝔂𝓮𝓭  𝓜𝓓.  𝓢𝓪𝓭𝓲𝓴  𝓘𝓺𝓫𝓪𝓵  𝓐𝓴𝓲𝓵.
All rights reserved.</p></h6>

</body>
</html>
