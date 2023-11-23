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
                  <a class="nav-link text-white" href="contact.php">Select Hotel For Order</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Order
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item text-white" href="foodorder.php">Food Order</a></li>
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
    <!--icecream cards-->
   <div class="row mt-5">
    <div class="col  m-lg-5">
        <div class="card" style="width: 19rem;">
         <div>
           
           <h6><span class="badge badge-secondary bg-warning">New</span></h1>
         </div>
         <img src="https://img.freepik.com/premium-photo/ice-cream-with-mint-sprinkling-paper-cup-table-cafe_245726-1510.jpg?w=740"
          class="card-img-top" style="height: 360px;" alt="...">
         <div class="card-body">
           <h5 class="card-title">ice-cream-with-mint-sprinkling-paper-cup</h5>
           <p class="card-text"><li>Price : 400Rs</li>
                       <li>icecream</li>
                       <li>30% Off</li>
                      </ul></p>
           <a href="#" class="btn btn-primary">Order</a>
         </div>
       </div>
    </div>
    <div class="col  m-lg-5">
        <div class="card" style="width: 19rem;">
         <div>
           
           <h6><span class="badge badge-secondary bg-warning">New</span></h1>
         </div>
         <img src="https://img.freepik.com/free-photo/front-view-delicious-milkshake-plate_23-2148296086.jpg?w=360&t=st=1680194122~exp=1680194722~hmac=9e8d98275d70ff321e80a58b36ae7801b5701b5aa57ac085a68e940187d32f44"

          class="card-img-top" style="height: 360px;" alt="...">
         <div class="card-body">
           <h5 class="card-title">delicious-milkshake</h5>
           <p class="card-text"><li>Price : 150Rs</li>
                       <li>drink</li>
                       <li>30% Off</li>
                      </ul></p>
           <a href="" class="btn btn-primary">Order</a>
         </div>
       </div>
    </div>
    <div class="col  m-lg-5">
        <div class="card" style="width: 19rem;">
         <div>
           
           <h6><span class="badge badge-secondary bg-warning">New</span></h1>
         </div>
         <img src="https://as2.ftcdn.net/v2/jpg/01/23/20/83/1000_F_123208337_qQsd45lxcRAuno6MpzDhn6FAWqFcKUY0.jpg"
          class="card-img-top" style="height: 360px;" alt="...">
         <div class="card-body">
           <h5 class="card-title">Icecream</h5>
           <p class="card-text"><li>Price : 400Rs</li>
                       <li>icecream</li>
                       <li>30% Off</li>
                      </ul></p>
           <a href="" class="btn btn-primary">order</a>
         </div>
       </div>
    </div>
</div>
<!---2nd icecream-->
<div class="row mt-5">
    <div class="col  m-lg-5">
        <div class="card" style="width: 19rem;">
         <div>
           
           <h6><span class="badge badge-secondary bg-warning">New</span></h1>
         </div>
         <img src="https://img.freepik.com/free-photo/cocktail-topped-with-orange-slice_141793-643.jpg?w=360&t=st=1680817613~exp=1680818213~hmac=0b2f071676a9911fddb9687104c346cb3f13f7d0d0b5d19fb67755620fc55440"
          class="card-img-top" style="height: 360px;" alt="...">
         <div class="card-body">
           <h5 class="card-title">cocktail-topped-with-orange-slice-drink</h5>
           <p class="card-text"><li>Price : 400Rs</li>
                       <li>Drink</li>
                       <li>30% Off</li>
                      </ul></p>
           <a href="#" class="btn btn-primary">Order</a>
         </div>
       </div>
    </div>
    <div class="col  m-lg-5">
        <div class="card" style="width: 19rem;">
         <div>
           
           <h6><span class="badge badge-secondary bg-warning">New</span></h1>
         </div>
         <img src="https://img.freepik.com/free-photo/alcoholic-beverage-cocktail-with-lemon_23-2148722504.jpg?t=st=1680817655~exp=1680818255~hmac=5a9b08d973f5eb1dc584a32c80a503a912d6163b856aeb39712c618f87327475"

          class="card-img-top" style="height: 360px;" alt="...">
         <div class="card-body">
           <h5 class="card-title">alcoholic-beverage-cocktail-with-lemon</h5>
           <p class="card-text"><li>Price : 400Rs</li>
                       <li>Drink</li>
                       <li>30% Off</li>
                      </ul></p>
           <a href="" class="btn btn-primary">Order</a>
         </div>
       </div>
    </div>
    <div class="col  m-lg-5">
        <div class="card" style="width: 19rem;">
         <div>
           
           <h6><span class="badge badge-secondary bg-warning">New</span></h1>
         </div>
         <img src="https://img.freepik.com/premium-photo/refreshing-detox-drink-with-mint-ginger-lemon-cold-mojito-cocktail-mint-soft-drink-soda_411614-399.jpg"
          class="card-img-top" style="height: 360px;" alt="...">
         <div class="card-body">
           <h5 class="card-title">drink-with-mint-ginger-lemon-cold</h5>
           <p class="card-text"><li>Price : 400Rs</li>
                       <li>Drink</li>
                       <li>30% Off</li>
                      </ul></p>
           <a href="" class="btn btn-primary">Order</a>
         </div>
       </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>