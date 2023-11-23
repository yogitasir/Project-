<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $note = $_POST['note'];
    $class = $_POST['class'];

    $sql = "INSERT INTO `student`(`id`, `name`, `email`, `mobile`, `password`, `note`, `class`) 
    VALUES ('$id','$name','$email','$mobile','$mobile','$password','$note','$class')";

    $result = $con->query($sql);
    if($result){
        echo "Data is inserted success";
        header("Location: staffquery.php");
    }else{
        die(mysqli_error($con));
    
} 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Forum</title>
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
            <a class="nav-link text-white" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Contact Us</a>
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

<!--navbar-->


       <div class="container my-5">
       <form method="post">
        <div class="mb-3">
        <label  class="form-label">ID</label>
        <input type="number" class="form-control" name="id" 
        placeholder="enter your id" autocomplete ="off">
        </div>
        <div class="mb-3">
        <label  class="form-label">Name Of the Student</label>
        <input type="text" class="form-control" name="name" placeholder="enter your student"
        autocomplete ="off">
        </div>
        <div class="mb-3">
        <label  class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="enter your email"
        autocomplete ="off" >
        </div>
        <div class="mb-3">
        <label  class="form-label">Mobile No</label>
        <input type="number" class="form-control" name="mobile" placeholder="enter your Mobile number"
        autocomplete ="off">
        </div>
        <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="text" class="form-control" name="password" placeholder="enter your password"
        autocomplete ="off" >
        </div>
        <div class="mb-3">
        <label  class="form-label">Write Your Message</label>
        <input type="text" class="form-control" name="note" placeholder="enter your note"
        autocomplete ="off">
        </div>
        <div class="mb-3">
        <label  class="form-label">Class</label>
        <input type="text" class="form-control" name="class" placeholder="enter your class"
        autocomplete ="off">
        </div>

  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
       </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>