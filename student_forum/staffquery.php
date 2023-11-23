<?php
include 'connect.php';
if(isset($_GET['delid'])){
  $delid=$_GET['delid'];
  $sql = "delete from  staff where id='$delid'";
 $result=$con->query($sql);
 if($result){
      echo "<script type='text/javascript'>alert('student deleted successfully')</script>";
  }else{
      echo "<script type='text/javascript'>alert('student is not deleted some thing is wrong')</script>";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<nav class="navbar bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
      <a class="navbar-brand text-white" href="#"><i class="material-symbols-outlined"></i>ACADAMY FORUM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="display.php">See Notes Of Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="staffquery.php">See Notes Of Staff</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav> 



   <div class="container my-5">
   <button class="btn btn-warning my-5"><a href="staff.php" class="text-dark"> Add Staff User</a></button>
   <table class="table table-dark table-striped table-hover">
     <thead>
       <tr>
       <th scope="col">sr.no</th>
         <th scope="col">Name Of the Staff</th>
         <th scope="col">Email</th>
         <th scope="col">Write your Messege</th>
         <th scope="col">Department</th>
         <th scope="col">Mobile</th>
         <th scope="col">Password</th>
         <th scope="col">Position</th>
         <th scope="col">Operations</th>
       </tr>
     </thead>
     <tbody>

     <?php
     $sql = "SELECT * FROM staff";
     $result = $con->query($sql);
     if($result){
      $sr = 1;
        while($row = mysqli_fetch_assoc($result)){ ?>
          <tr>
          <td><?php echo $sr++; ?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['note'];?></td>
            <td><?php echo $row['department'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td><?php echo $row['password'];?></td>
            
            <td><?php echo $row['position'];?></td>
            <td><a href="staffupdate.php?uid=<?php echo $row['id'];?>" class="btn btn-warning">update</a>
            <a class="btn btn-warning" href="?delid=<?php echo $row['id'];?>">delete</a></td>


          </tr>

       <?php } 
     }

     ?>
      <!-- <tr>
         <th scope="row">1</th>
         <td>Mark</td>
         <td>Otto</td>
         <td>@mdo</td>
       </tr>
       <tr>
         <th scope="row">2</th>
         <td>Jacob</td>
         <td>Thornton</td>
         <td>@fat</td>
       </tr>-->
      
     </tbody>
   </table>

   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>