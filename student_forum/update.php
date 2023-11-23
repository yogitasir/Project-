<?php
include 'connect.php';

if(isset($_POST['update'])){
    // die("Please");
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $note = $_POST['note'];
    $class = $_POST['class'];

    $query = "UPDATE `student` SET `name`='$name',`email`='$email',`mobile`='$mobile',`password`='$password',`note`='$note',`class`='$class' WHERE `id`='$id'";
    $run = $con->query($query);
    if($run){
        echo "Updated to Database";
        header("Location: display.php");
    }else{
        echo "someting went wrong please try again";
    }
}




$id = "";
$name = "";
$email = "";
$mobile = "";
$password = "";
$note = "";
$class = "";

if (isset($_GET['uid'])) {
    $uid = $_GET['uid'];
    $sql = "SELECT * FROM `student` WHERE `id` = '$uid'";
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
        $note = $row['note'];
        $class = $row['class'];
     
       
}
}
?>
<!---student update -->
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
       <form method="post">
        <div class="mb-3">
        <label  class="form-label">ID</label>
        <input type="number" class="form-control" name="id" value="<?php echo $id;?>"
        placeholder="enter your id" autocomplete ="off">
        </div>
        <div class="mb-3">
        <label  class="form-label">Name Of the Student</label>
        <input type="text" class="form-control" name="name" value="<?php echo $name;?>"
        placeholder="enter your student"
        autocomplete ="off">
        </div>
        <div class="mb-3">
        <label  class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email;?>"
        placeholder="enter your email"
        autocomplete ="off" >
        </div>
        <div class="mb-3">
        <label  class="form-label">Mobile No</label>
        <input type="number" class="form-control" name="mobile" value="<?php echo $mobile;?>"
        placeholder="enter your Mobile number"
        autocomplete ="off">
        </div>
        <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="text" class="form-control" name="password" value="<?php echo $password;?>"
        placeholder="enter your password"
        autocomplete ="off" >
        </div>
        <div class="mb-3">
        <label  class="form-label">Write your Message</label>
        <input type="text" class="form-control" name="note" value="<?php echo $note;?>"
         placeholder="enter your note"
        autocomplete ="off">
        </div>
        <div class="mb-3">
        <label  class="form-label">Class</label>
        <input type="text" class="form-control" name="class" value="<?php echo $class;?>"
        placeholder="enter your class"
        autocomplete ="off">
        </div>

  
  <button type="submit" class="btn btn-primary" name="update">update</button>
</form>
</body>
</html>