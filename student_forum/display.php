<?php
include 'connect.php';

if(isset($_GET['delid'])){
    $delid=$_GET['delid'];
    $sql = "delete from  student where id='$delid'";
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

  <!--slider-->
  <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://img.freepik.com/free-photo/mentor-training-students-business-school_1262-15004.jpg?w=740&t=st=1680941408~exp=1680942008~hmac=231311f39753edbdbf35d8f4de8f06318ced6b4893402f50d2d018e5a711461f" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/premium-photo/paperwork-office_274689-7222.jpg?w=740" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/free-photo/focused-students-browsing-tablet-computer-talking_1262-14928.jpg?w=740&t=st=1680941469~exp=1680942069~hmac=40ff77b6a9222f4412a325e4dacf646b0c59f4e3f7bc43692c0d4cea27188fbc" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

   <div class="container my-5">
   <button class="btn btn-warning my-5"><a href="student.php" class="text-dark"> Add User</a></button>
   <table class="table table-dark table-striped table-hover">
     <thead>
       <tr>
         <th scope="col">Sr. No</th>
         <th scope="col">Name Of the Student</th>
         <th scope="col">Email</th>
         <th scope="col">Note</th>
         <th scope="col">Class</th>
         <th scope="col">Mobile</th>
         <th scope="col">Password</th>
         <th scope="col">Operations</th>
       </tr>
     </thead>
     <tbody>

     <?php
     $sql = "SELECT * FROM student";
     $result = $con->query($sql);
     if($result){
      $sr = 1;
        while($row = mysqli_fetch_assoc($result)){ ?>
          <tr>
          <td><?php echo $sr++; ?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['note'];?></td>
            <td><?php echo $row['class'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><a href="update.php?uid=<?php echo $row['id'];?>" class="btn btn-warning">update</a>
            <a href="?delid=<?php echo $row['id'];?>"class="btn btn-warning">delete</a></td>

            
          </tr>

       <?php } 
     }

     ?>
     </tbody>
   </table>

   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>