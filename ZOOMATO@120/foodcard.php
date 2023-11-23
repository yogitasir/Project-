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
    <!--navbar-->
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
    <!--cards_1-->
    <div class="row mt-5">
    <div class="col  m-lg-5">
        <div class="card" style="width: 19rem;">
         <div>
           
           <h6><span class="badge badge-secondary bg-warning">New</span></h1>
         </div>
         <img src="https://img.freepik.com/free-photo/tortilla-wrap-with-falafel-fresh-salad-vegan-tacos-vegetarian-healthy-food_2829-6193.jpg?w=740&t=st=1680028968~exp=1680029568~hmac=a48dca80459a1fb2713395d077d7234e5411697c1664f0d772057f162547e43f"
          class="card-img-top" style="height: 250px;" alt="...">
         <div class="card-body">
           <h5 class="card-title">Salad</h5>
           <p class="card-text">
                     <ul>
                      <li>Price : 200Rs</li>
                       <li>salad-vegan-tacos-vegetarian</li>
                       <li>30% Off</li>
                      </ul></p>
           <a href="orderform.php" class="btn btn-primary">Order</a>
         </div>
       </div>
    </div>
    <div class="col  m-lg-5">
        <div class="card" style="width: 19rem;">
         <div>
           
           <h6><span class="badge badge-secondary bg-warning">New</span></h1>
         </div>
         <img src="https://img.freepik.com/premium-photo/hamburger-with-chicken-burger-meat-cheese-tomato-cucumber-lettuce-wooden-background-tasty-burger-close-up_2829-21314.jpg?w=740"

          class="card-img-top" style="height: 250px;" alt="...">
         <div class="card-body">
           <h5 class="card-title">Chicken Burger</h5>
           <p class="card-text"><ul>
                      <li>Price : 200Rs</li>
                       <li>Non-vegetarian</li>
                       <li>30% Off</li>
                      </ul></p>
           <a href="orderform.php" class="btn btn-primary">Order</a>
         </div>
       </div>
    </div>
    <div class="col  m-lg-5">
        <div class="card" style="width: 19rem;">
         <div>
           
           <h6><span class="badge badge-secondary bg-warning">New</span></h1>
         </div>
         <img src="https://img.freepik.com/free-photo/club-sandwich-with-side-french-fries_140725-1744.jpg?w=740&t=st=1680030021~exp=1680030621~hmac=370f0be5adda5ec00bab3dd96a751918c3f678db860380b7d669e8a4f2a8d83d"
          class="card-img-top" style="height: 250px;" alt="...">
         <div class="card-body">
           <h5 class="card-title">Sandwich</h5>
           <p class="card-text"><ul>
                      <li>Price : 100Rs</li>
                       <li>vegan-tacos-vegetarian</li>
                       <li>30% Off</li>
                      </ul></p>
           <a href="orderform.php" class="btn btn-primary">order</a>
         </div>
       </div>
    </div>

    
    </div>
    <!--card_2-->
    <div class="row mt-5">
        <div class="col  m-lg-5">
            <div class="card" style="width: 19rem;">
             <div>
               
               <h6><span class="badge badge-secondary bg-warning">New</span></h1>
             </div>
             <img src="https://img.freepik.com/free-photo/red-lentil-soup-with-slice-lemon-breadcrumbs_140725-1001.jpg?w=740&t=st=1680030278~exp=1680030878~hmac=84cb9dc9e583997309e014dfea18a4d4e41d7236876c79556c14acd740a870e9"
              class="card-img-top" style="height: 300px;" alt="...">
             <div class="card-body">
               <h5 class="card-title">Soup-with-slice</h5>
               <p class="card-text"><ul>
                      <li>Price : 100Rs</li>
                       <li>vegan-tacos-vegetarian</li>
                       <li>30% Off</li>
                      </ul></p>
               <a href="orderform.php" class="btn btn-primary">order</a>
             </div>
           </div>
        </div>
        <div class="col  m-lg-5">
            <div class="card" style="width: 19rem;">
             <div>
               
               <h6><span class="badge badge-secondary bg-warning">New</span></h1>
             </div>
             <img src="https://img.freepik.com/free-photo/crispy-chicken-nuggets-barbecue-with-sauces-herbs-wooden-platter-with-blue-plates-around_114579-3775.jpg?w=360&t=st=1680030462~exp=1680031062~hmac=d53094c8552f259e32da7c136b092b41f357d5db85c3e3f877a4f386ab827434"
    
              class="card-img-top" style="height: 300px;" alt="...">
             <div class="card-body">
               <h5 class="card-title">Crispy-chicken-nuggets-barbecue</h5>
               <p class="card-text"><ul>
                      <li>Price : 500Rs</li>
                       <li>Non-vegetarian</li>
                       <li>30% Off</li>
                      </ul></p>
               <a href="orderform.php" class="btn btn-primary">order</a>
             </div>
           </div>
        </div>
        <div class="col  m-lg-5">
            <div class="card" style="width: 19rem;">
             <div>
               
               <h6><span class="badge badge-secondary bg-warning">New</span></h1>
             </div>
             <img src="https://img.freepik.com/premium-photo/group-indian-food-like-palak-paneer-butter-masala-choley-chola-black-eyed-kidney-beans-curry-with-naan-rice_466689-52505.jpg?w=360"
              class="card-img-top" style="height: 300px;" alt="...">
             <div class="card-body">
               <h5 class="card-title">Palak panir butter</h5>
               <p class="card-text"><ul>
                      <li>Price : 100Rs</li>
                       <li>indian-vegan-tacos-vegetarian</li>
                       <li>30% Off</li>
                      </ul></p>
               <a href="orderform.php" class="btn btn-primary">order</a>
             </div>
           </div>
        </div>
    </div>

   <!--card_3-->
   <div class="row mt-5">
    <div class="col  m-lg-5">
        <div class="card" style="width: 19rem;">
         <div>
           
           <h6><span class="badge badge-secondary bg-warning">New</span></h1>
         </div>
         <img src="https://img.freepik.com/premium-photo/pasta-with-minced-meat-tomato-sauce-sprinkled-with-basil-black-concrete-background-top-view-vertical_166116-2131.jpg"
          class="card-img-top" style="height: 360px;" alt="...">
         <div class="card-body">
           <h5 class="card-title">Pasta With minced meat</h5>
           <p class="card-text"><ul>
                      <li>Price : 200Rs</li>
                       <li>vegan-tacos-vegetarian</li>
                       <li>30% Off</li>
                      </ul></p>
           <a href="orderform.php" class="btn btn-primary">order</a>
         </div>
       </div>
    </div>
    <div class="col  m-lg-5">
        <div class="card" style="width: 19rem;">
         <div>
           
           <h6><span class="badge badge-secondary bg-warning">New</span></h1>
         </div>
         <img src="https://img.freepik.com/free-photo/noodles-with-beef-vegetables-black-table_141793-1730.jpg?w=360&t=st=1680030751~exp=1680031351~hmac=01d104dfdf9faab8d9b82c0c7e5c34787e896680ecc2e2dcf8cfd79905e67d02"

          class="card-img-top" style="height: 360px;" alt="...">
         <div class="card-body">
           <h5 class="card-title">Noodles with beef</h5>
           <p class="card-text"><ul>
                      <li>Price : 400Rs</li>
                       <li>vegan-tacos-vegetarian</li>
                       <li>30% Off</li>
                      </ul></p>
           <a href="orderform.php" class="btn btn-primary">order</a>
         </div>
       </div>
    </div>
    <div class="col  m-lg-5">
        <div class="card" style="width: 19rem;">
         <div>
           
           <h6><span class="badge badge-secondary bg-warning">New</span></h1>
         </div>
         <img src="https://img.freepik.com/premium-photo/falafel-hummus-shakshuka-israeli-salad-traditional-dishes-israeli-cuisine-top-view_266870-10504.jpg?w=360"
          class="card-img-top" style="height: 360px;" alt="...">
         <div class="card-body">
           <h5 class="card-title">falafel-hummus-shakshuka</h5>
           <p class="card-text"><li>Price : 400Rs</li>
                       <li>vegan-tacos-vegetarian</li>
                       <li>30% Off</li>
                      </ul></p>
           <a href="orderform.php" class="btn btn-primary">order</a>
         </div>
       </div>
    </div>
</div>
   <section class="container">
    <div>
      <img src="https://t4.ftcdn.net/jpg/03/31/90/31/240_F_331903120_5Y9aKkt3d4v1pA05xpbc7dPA6YwW8TT4.jpg"
          class="card-img-top" style="height: 360px;" alt="...">
    </div>

   </section>
   
 <center><div class="mt-5">
<a href="drinks.php" class="btn btn-primary">Explore More</a>
</div><center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>