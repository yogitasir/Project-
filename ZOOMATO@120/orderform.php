<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $customer = $_POST['customer'];
    $item = $_POST['item'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
   

    $sql = "INSERT INTO `foodorder`(`id`, `customer`, `item`, `phone`, `address`, `quantity`,`price`)  
    VALUES ('$id','$customer','$item','$phone','$address','$quantity','$price')";

    $result =$con->query($sql);
    if($result){
        echo "Order is places successfully it will be delivered soon.";
        header("Location: foodcard.php");
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Zoomato</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Our Facility</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="about.php">About US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="foodcard.php">See Menu Option</a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Order
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item text-white" href="foodcard.php">Food Order</a></li>
              <li><a class="dropdown-item text-white" href="tableorder.php">Table Order</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>

             
            </ul>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
</nav>
<!--slider-->




   <div class="container mt-5">
        <div class="row">
          <div class="col">
              <img src="https://img.freepik.com/premium-vector/qr-code-vector-illustration_110233-1208.jpg?w=740" height="600" width="600" alt="">
          </div>
          <div class="col">
             <h3 class="text-center m-2 bg-black text-light">
               Order Food</h3>
               <form method="post">
                <div class="mb-3">
                <label  class="form-label">Your Info</label>
                <label  class="form-label">ID</label>
                <input type="number" class="form-control" name="id" 
                placeholder="enter your id" autocomplete ="off">
                </div>
                <div class="mb-3">
                <label  class="form-label">Name Of Customer</label>
                <input type="text" class="form-control" name="customer" placeholder="enter your name"
                autocomplete ="off">
                </div>
                <div class="mb-3">
                  <label  class="form-label">Name Of Item</label>
                  <input type="text" class="form-control" name="item" placeholder="enter your item"
                  autocomplete ="off">
                  </div>
                <div class="mb-3">
                <label  class="form-label">Phone no</label>
                <input type="number" class="form-control" name="phone" placeholder="enter your phone no"
                autocomplete ="off" >
                </div>
                <div class="mb-3">
                <label  class="form-label">Address</label>
                <input type="text" class="form-control" name="address" placeholder="enter your address"
                autocomplete ="off">
                </div>
                <div class="mb-3">
                <label  class="form-label">Quantity</label>
                <input type="text" class="form-control" name="quantity" placeholder="enter your quality"
                autocomplete ="off" >
                </div>
                <div class="mb-3">
                <label  class="form-label">Price</label>
                <input type="text" class="form-control" name="price" placeholder="enter your price"
                autocomplete ="off" >
                </div>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
               </div>
               <div>
                <img src="" alt="">
               </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>