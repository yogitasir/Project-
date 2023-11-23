<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body class="bg-black">
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
            <a class="nav-link text-white" href="contact.php">Hotels Under zoomato</a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Order
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item text-white" href="orderform.php">Food Order</a></li>
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
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://img.freepik.com/free-vector/hand-drawn-indian-food-restaurant-facebook-cover_23-2149420721.jpg?w=996&t=st=1680899095~exp=1680899695~hmac=551955b49349c818dd2ea219c579af8606ed4eca83b87abf4eb27d1ea6fa4645" 
      class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://as2.ftcdn.net/v2/jpg/02/84/46/89/1000_F_284468930_li1i8APKJuZsHmKMNsjScGeTpS0x1vPd.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://as1.ftcdn.net/v2/jpg/02/52/38/80/1000_F_252388016_KjPnB9vglSCuUJAumCDNbmMzGdzPAucK.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <div class="container mt-5">
        <div>
     <center>   <p class="text-white"style="font-size: 20px;">Some of the special features of Zomato include:<br>

1.Comprehensive restaurant listings: <br>Zomato has a vast database of restaurants across multiple cities, making it easy to search for specific types of cuisine or restaurants in a particular location.<br>

2.User-generated reviews: <br>Zomato allows users to leave reviews and ratings for restaurants, helping other users make informed decisions about where to dine.<br>

3.Online ordering:<br>Zomato offers users the ability to order food from participating restaurants online, either for delivery or pickup.<br>

4.Table reservation: <br>Zomato allows users to book tables at restaurants in advance, helping to avoid long wait times.<br>

5.Personalized recommendations:<br>Zomato uses user data to offer personalized recommendations based on previous dining experiences and preferences.<br>

</p></center>
</div>
    </div>

    <div class="row mt-5">
<div class="card col" style="width: 15rem;">
  <img src="https://img.freepik.com/free-photo/high-angle-valentine-s-day-table-set-with-candles-pasta_23-2148752641.jpg?w=360&t=st=1680923088~exp=1680923688~hmac=b0f792a375cebd564f16fa5086c1b86903b3d44b92ba5f685845ddeb953f4933" class="card-img-top" alt="...">
 
</div>
<div class="card col" style="width: 15rem;">
  <img src="https://img.freepik.com/premium-photo/raw-pizza-ingredients_152625-4703.jpg?w=360" alt="...">
 
</div>

<div class="card col" style="width: 15rem;">
  <img src="https://img.freepik.com/premium-photo/delicious-meat-cannelloni-pasta-rustic-wooden-table_123827-15089.jpg?w=360" class="card-img-top" alt="...">
  
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>