<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $email = $_POST['mail'];
   
   
    

    $sql = "INSERT INTO student(`id`, `name`, `password`, `address`, `mail`) 
    VALUES ('$id','$name','$password','$address','$email')";

    $result =$con->query($sql);
    if($result){
        echo "Data is inserted success";
      header("Location:course_cards.php");
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
    <title>Login</title>
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
              <li class="nav-item"> <a class="nav-link text-white" href="index.php" >Home</a></li>                        
              <li class="nav-item"> <a class="nav-link text-white" href="course_apply.php">MyCourse</a></li>                        
              <li class="nav-item"> <a class="nav-link text-white" href="login_stud.php">freeCourse</a></li>                        
              <li class="nav-item"> <a class="nav-link text-white" href="about.php">AboutUs</a></li>                        
              
          </ul>
      </div>
      
  </div>
  
  
</div>
</div>
<!--slider--->
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://img.freepik.com/free-psd/e-learning-horizontal-banner-template-with-geometric-shapes_23-2149433273.jpg?w=826&t=st=1680930472~exp=1680931072~hmac=8addabcede5d9dbfd5cf84c3be98841cfe948cd7b5c75dd55ddf516885ad2c8d" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/free-psd/online-courses-banner-template_23-2149109788.jpg?w=826&t=st=1680930513~exp=1680931113~hmac=6d96d3e590253598800c37999887c9b70a03941ff223359736fd51834362635c" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/free-psd/free-online-language-learning-banner_23-2149116987.jpg?w=826&t=st=1680930548~exp=1680931148~hmac=2f377b8367fed0ce334fbabc0707c12603a5bbb3992f3700fcda67f387824a7f" class="d-block w-100" alt="...">
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
<!--navbar_khatam-->
    
     <div class="container mt-5">
           <div class="row">
             <div class="col">
                 <img src="https://img.freepik.com/premium-vector/start-up-business-concept_42694-51.jpg?w=740"
                  height="600" width="600" alt="">
             </div>
             <div class="col">
                <h3 class="text-center m-2 bg-black text-light">
                  Add Student</h3>
                  <form method="post">
        <div class="mb-3">
        <label  class="form-label text-white">ID</label>
        <input type="number" class="form-control" name="id" 
        placeholder="enter your id" autocomplete ="off">
        </div>
        <div class="mb-3">
        <label  class="form-label text-white">Name Of the Student</label>
        <input type="text" class="form-control" name="name" placeholder="enter your student"
        autocomplete ="off">
        </div>
        <div class="mb-3">
        <label  class="form-label text-white">Email</label>
        <input type="email" class="form-control" name="mail" placeholder="enter your email"
        autocomplete ="off" >
        </div>
        
        <div class="mb-3">
        <label  class="form-label text-white">Password</label>
        <input type="text" class="form-control" name="password" placeholder="enter your password"
        autocomplete ="off" >
        </div>
        
        <div class="mb-3">
        <label  class="form-label text-white">Address</label>
        <input type="text" class="form-control" name="address" placeholder="enter your current position"
        autocomplete ="off">
        
        </div>

  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
            </div>
       </div>
                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>
