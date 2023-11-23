<?php 

include 'connect.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $education = $_POST['education'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $address = $_POST['addresss'];
    $mail = $_POST['mail'];
    $coursename = $_POST['coursename'];
    $price = $_POST['price'];

    $sql = "INSERT INTO `apply`(`id`, `name`, `education`, `country`, `phone`, `addresss`, `mail`, `coursename`,`price`) 
    VALUES ('$id','$name','$education','$country','$phone','$address','$mail','$coursename','$price')";

    $result=$con->query($sql);
    if($result){
        echo "Data is inserted success";
        header("Location:course_show.php");
    }else{
        die(mysqli_error($con));
    
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="bg-black">
    <!--nav bar-->
    
   <div class="navbar bg-dark navbar-dark navbar-expand-md sticky-top">
      <div class="container">

          <a href="" class="navbar-brand"></a>
          <button data-bs-toggle="collapse" class="navbar-toggler"
          data-bs-target="#menu">
          <span class="navbar-toggler-icon"></span>
      </button>
      
      
      <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav">
              <li class="nav-item"> <a class="nav-link text-white" href="index.php">Home</a></li>                        
              <li class="nav-item"> <a class="nav-link text-white" href="course_apply.php">MyCourse</a></li>                        
              <li class="nav-item"> <a class="nav-link text-white" href="login_stud.php">freeCourse</a></li>                        
              <li class="nav-item"> <a class="nav-link text-white" href="about.php">AboutUs</a></li>                        
              
          </ul>
      </div>
      
  </div>
  
  
</div>
</div>
<!--navbar_khatam-->

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://img.freepik.com/premium-psd/e-learning-banner-template-design_23-2149118528.jpg?w=826" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/free-psd/e-learning-banner-template-design_23-2149120987.jpg?w=826&t=st=1680930742~exp=1680931342~hmac=da3f027f908ddb491cd22db5cfda3d94e791e7b3968bdf4ddb0d183c3ed1e4c1" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/free-psd/e-learning-horizontal-banner-template-with-geometric-shapes_23-2149433275.jpg?w=826&t=st=1680930790~exp=1680931390~hmac=e15b5d6839f382a3d14904a1d715aa926814770e70d280dbe14c42bcf612098a" class="d-block w-100" alt="...">
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
    
     <div class="container mt-5">
           <div class="row">
             <div class="col">
                 <img src="https://img.freepik.com/premium-vector/portrait-programmer-working-with-pc_23-2148217001.jpg?w=740"
                  height="600" width="600" alt="">
             </div>
             <div class="col">
                
            <h3 class="text-center m-2 bg-black text-light">Register for Class</h3>

            <form method="post">
        <div class="mb-3">
        <label  class="form-label text-white">Id</label>
        <input type="number" class="form-control" name="id" 
        placeholder="enter your id" autocomplete ="off">
        </div>
        <div class="mb-3">
        <label  class="form-label text-white">Name Of the Student</label>
        <input type="text" class="form-control" name="name" placeholder="enter your student"
        autocomplete ="off">
        </div>
        <div class="mb-3">
        <label  class="form-label text-white">Education</label>
        <input type="text" class="form-control" name="education" placeholder="enter your email"
        autocomplete ="off" >
        </div>
        <div class="mb-3">
        <label  class="form-label text-white">Country</label>
        <input type="text" class="form-control" name="country" placeholder="enter your email"
        autocomplete ="off" >
        </div>
        <div class="mb-3">
        <label  class="form-label text-white">Phone</label>
        <input type="number" class="form-control" name="phone" placeholder="enter your email"
        autocomplete ="off" >
        </div>
        <div class="mb-3">
        <label  class="form-label text-white">Address</label>
        <input type="text" class="form-control" name="addresss" placeholder="enter your email"
        autocomplete ="off" >
        </div>
        <div class="mb-3">
        <label  class="form-label text-white">Email</label>
        <input type="email" class="form-control" name="mail" placeholder="enter your email"
        autocomplete ="off" >
        </div>
        
        <div class="mb-3">
        <label  class="form-label text-white">Course Name</label>
        <input type="text" class="form-control" name="coursename" placeholder="enter your password"
        autocomplete ="off" >
        </div>
        <div class="mb-3">
        <label  class="form-label text-white">Price</label>
        <input type="text" class="form-control" name="price" placeholder="enter your password"
        autocomplete ="off" >
        </div>
        
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
            </div>
       </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>