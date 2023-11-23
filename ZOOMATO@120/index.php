<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<body class="bg-black">
    <!---navbar-->
    <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Zomato</a>
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
              <li><a class="dropdown-item text-white" href="foodcard.html">Food Order</a></li>
              <li><a class="dropdown-item text-white" href="tableorder">Table Order</a></li>
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
<section class="container mt-5">
    <div class="bg-danger mt-3">
        
        <p class="text-center text-white" style="font-size: 50px;">Zoomato</p>
    </div>
</section>
<!--slider-->
<section class="container mt-3">
<div id="carouselExampleDark" class="carousel carousel-dark slide ">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="https://as1.ftcdn.net/v2/jpg/03/14/99/68/1000_F_314996803_zGSAPzz4a1aXRGETQU4rPEqmgizeOz5D.jpg"
         class="d-block w-100" alt="..." style="height: 570px;">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-center text-white">Zoomato</h5>
          <p></p>
        </div>
      </div>
      
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<section class="container mt-5">
    <div class="row">
     <div class="card w-50 col">
       
       <div class="card-body">
         <img src="https://as1.ftcdn.net/v2/jpg/03/15/28/46/1000_F_315284656_7Mi6Ee8nZTjOpzUGS1HFxFiFGZ6A9Vz7.jpg"
          class="d-block w-100" alt=""style="height: 270px; width: 50px;">
       </div>
      
     </div>
     <div class="col">
       <center><p class="text-center text-white">Food is not just fuel for our bodies, it is also a source of pleasure, comfort, 
        and social connection. Enjoying food in a healthy and balanced
         way can enhance our overall well-being.

        Eating a diverse range of whole foods, such as fruits, vegetables, 
        whole grains, lean proteins, and healthy fats, can provide us with the nutrients 
        and energy we need to thrive.</p></center>
     </div>
     </div>
   </section>
   <section class="container mt-5">
    <div class="row">
     
     <div class="col">
    <center><p class="text-center text-white">Food is not just fuel for our bodies, it is also a source of pleasure, comfort, 
        and social connection. Enjoying food in a healthy and balanced
         way can enhance our overall well-being.

        Eating a diverse range of whole foods, such as fruits, vegetables, 
        whole grains, lean proteins, and healthy fats, can provide us with the nutrients 
        and energy we need to thrive.</p></center>
     </div>
     <div class="card w-50 col">
       
      <div class="card-body">
        <img src="https://img.freepik.com/free-photo/colorful-vegetables-frame-surrounded-with-red-chili-pepper-cherry-tomato-onion-sea-salt-sweet-yellow-pepper-blue-surface_176474-162.jpg?w=740&t=st=1679991222~exp=1679991822~hmac=e0f64b89fc4af9ff3a5e4abd2e1bfbcafd8894a5e4962779022c47a5916ff0f6"
         class="d-block w-100" alt=""style="height: 290px; width: 50px;">
      </div>
     
    </div>
     </div>
   </section>
   <center>
   <div class="mt-5 w-75">
   <div class="card text-center">
  
  <div class="card-body">
    <h3 class="card-title">Speciality & Features</h3>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="features.php" class="btn btn-primary">See Features</a>
  </div>
  <div class="card-footer text-body-secondary">
    Click Here
  </div>
</div>
</div>
</center>



       
    <!--script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>