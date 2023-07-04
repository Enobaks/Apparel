<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloth-store</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="./css/index.css">
    <!-- <link rel="stylesheet" href="./css/footer-style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
    <div class="body-wrap">
        <!-- Navbar Begins -->
        <?php require "includes/navbar.php"?>
        <!-- Navbar Ends -->
        <!-- Carousel Begins -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade hero-section">
            <div class="carousel-inner">
                <div class="carousel-item kal active position-relative">
                    <img src="./images/slide-111.jpg" class="d-block img-fluid w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block caption-text1">
                        <h1 class="fs-1 fw-bold text-white">Summer Sales</h1>
                        <p class="fs-6 text-white"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias velit repellat ut, distinctio explicabo mollitia ullam veniam inventore totam officia aliquid error eveniet a consectetur</p>
                    </div>
                </div>
                <div class="carousel-item kal position-relative">
                    <img src="./images/slide-2.jpg" class="d-block img-fluid w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block caption-text2">
                        <h1 class="fs-1 fw-bold">Summer Sales</h1>
                        <p class="fs-6 text-white">Enter the Summer with Style. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias velit repellat ut, distinctio explicabo mollitia ullam veniam inventore totam officia aliquid error eveniet a consectetur</p>
                        
                    </div>
                </div>
                <div class="carousel-item kal position-relative">
                    <img src="./images/slide-33.jpg" class="d-block img-fluid w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block caption-text3">
                        <h1 class="fs-1 fw-bold text-white">Summer Sales</h1>
                        <p class="fs-6 text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias velit repellat ut, distinctio explicabo mollitia ullam veniam inventore totam officia aliquid error eveniet a consectetur</p>
                    </div>
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
        <!-- Carousel Ends -->
    </div>
    <div class="items-wrap">
        <h2 class="text-center my-5">Fashion for Men and Women</h2>
        <div class="row items">
            <div class="col-md-12 d-flex justify-content-around flex-column flex-sm-row">
                <div class="col-md-3 merchant-item mt-5">
                    <a href="product_detail.php">
                        <div class="card card-wrap ">
                            <img src="./images/tshirt-img.png" class="card-img-top size-img" alt="...">
                            <div class="card-body d-flex justify-content-between card-txt">
                                <div class="product-content">
                                    <p class="card-text mb-0 fw-bold">T-Shirt</p>
                                    <p class="card-text">&pound;10</p>
                                </div>
                                <div class="product-action d-flex align-items-center justify-content-between">
                                    <i class="fa-regular fa-heart fs-4" style="color: #000000; "></i>
                                    <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 merchant-item mt-5">
                    <a href="product_detail.php">
                        <div class="card card-wrap">
                            <img src="./images/women-clothes-img.png" class="card-img-top size-img" alt="...">
                            <div class="card-body d-flex justify-content-between card-txt">
                                <div class="product-content">
                                    <p class="card-text mb-0 fw-bold">T-Shirt</p>
                                    <p class="card-text">&pound;10</p>
                                </div>
                                <div class="product-action d-flex align-items-center justify-content-between">
                                    <i class="fa-regular fa-heart fs-4" style="color: #000000; "></i>
                                    <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 merchant-item mt-5">
                    <a href="product_detail.php">
                        <div class="card card-wrap">
                            <img src="./images/jogger1.jpg" class="card-img-top size-img" alt="...">
                            <div class="card-body d-flex justify-content-between card-txt">
                                <div class="product-content">
                                    <p class="card-text mb-0 fw-bold">T-Shirt</p>
                                    <p class="card-text">&pound;10</p>
                                </div>
                                <div class="product-action d-flex align-items-center justify-content-between">
                                    <i class="fa-regular fa-heart fs-4" style="color: #000000; "></i>
                                    <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-100 d-none d-md-block"></div>
                <div class="col-md-3 merchant-item mt-5">
                    <a href="product_detail.php">
                        <div class="card card-wrap">
                            <img src="./images/women-blouse1.jpg" class="card-img-top size-img" alt="...">
                            <div class="card-body d-flex justify-content-between card-txt">
                                <div class="product-content">
                                    <p class="card-text mb-0 fw-bold">T-Shirt</p>
                                    <p class="card-text">&pound;10</p>
                                </div>
                                <div class="product-action d-flex align-items-center justify-content-between">
                                    <i class="fa-regular fa-heart fs-4" style="color: #000000; "></i>
                                    <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row items next-line">
            <div class="col-md-12 d-flex justify-content-around flex-column flex-sm-row">
                <div class="col-md-3 merchant-item mt-5">
                    <a href="product_detail.php">
                        <div class="card card-wrap">
                            <img src="./images/summer-shirt1.jpg" class="card-img-top size-img" alt="...">
                            <div class="card-body d-flex justify-content-between card-txt">
                                <div class="product-content">
                                    <p class="card-text mb-0 fw-bold">T-Shirt</p>
                                    <p class="card-text">&pound;10</p>
                                </div>
                                <div class="product-action d-flex align-items-center justify-content-between">
                                    <i class="fa-regular fa-heart fs-4" style="color: #000000; "></i>
                                    <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 merchant-item mt-5">
                    <a href="product_detail.php">
                        <div class="card card-wrap">
                            <img src="./images/women-summer-dress.jpg" class="card-img-top size-img" alt="...">
                            <div class="card-body d-flex justify-content-between card-txt">
                                <div class="product-content">
                                    <p class="card-text mb-0 fw-bold">T-Shirt</p>
                                    <p class="card-text">&pound;10</p>
                                </div>
                                <div class="product-action d-flex align-items-center justify-content-between">
                                    <i class="fa-regular fa-heart fs-4" style="color: #000000; "></i>
                                    <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 merchant-item mt-5">
                    <a href="product_detail.php">
                        <div class="card card-wrap">
                            <img src="./images/summer-shirt2.jpg" class="card-img-top size-img" alt="...">
                            <div class="card-body d-flex justify-content-between card-txt">
                                <div class="product-content">
                                    <p class="card-text mb-0 fw-bold">T-Shirt</p>
                                    <p class="card-text">&pound;10</p>
                                </div>
                                <div class="product-action d-flex align-items-center justify-content-between">
                                    <i class="fa-regular fa-heart fs-4" style="color: #000000; "></i>
                                    <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 merchant-item mt-5">
                    <a href="product_detail.php">
                        <div class="card card-wrap">
                            <img src="./images/women-summer-dress2.jpg" class="card-img-top size-img" alt="...">
                            <div class="card-body d-flex justify-content-between card-txt">
                                <div class="product-content">
                                    <p class="card-text mb-0 fw-bold">T-Shirt</p>
                                    <p class="card-text">&pound;10</p>
                                </div>
                                <div class="product-action d-flex align-items-center justify-content-between">
                                    <i class="fa-regular fa-heart fs-4" style="color: #000000; "></i>
                                    <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Items End -->

     <!-- Offer Start -->
     <div class="row pt-5 pb-3 items mt-5">
        <div class="col-md-12 px-xl-5 d-flex product-offer-wrap">
            <div class="col-md-6 mb-5">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="images/offer-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-danger">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="images/offer-2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-danger">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

    <!-- customer Review Begins -->
    <div class="content mb-5">
        <div class="container ">
          <div class="row mb-5 ">
            <div class="col-12 text-center">
              <h2 class="my-5">Customer Reviews</h2>
            </div>
          </div>
        </div>
        <div class="site-section bg-left-half mb-5">
          <div class="container owl-2-style">      
    
            <div class="owl-carousel owl-2">
    
              <div class="media-29101 out">
                <img src="images/person_1_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Alex Fought</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem iusto officia! Quis tenetur maxime, laboriosam saepe, voluptate necessitatibus tempora!</p>
              </div>
    
              <div class="media-29101 out">
                <img src="images/person_2_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Ben Stafford</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem iusto officia! Quis tenetur maxime, laboriosam saepe, voluptate necessitatibus tempora!</p>
              </div>
    
              <div class="media-29101 out">
                <img src="images/person_3_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Devin Bridges</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem iusto officia! Quis tenetur maxime, laboriosam saepe, voluptate necessitatibus tempora!</p>
              </div>
    
              <div class="media-29101 out">
                <img src="images/person_1_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Joshua Jones</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem iusto officia! Quis tenetur maxime, laboriosam saepe, voluptate necessitatibus tempora!</p>
              </div>
    
              <div class="media-29101 out">
                <img src="images/person_2_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Kellie Kenney</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem iusto officia! Quis tenetur maxime, laboriosam saepe, voluptate necessitatibus tempora!</p>
              </div>
    
              <div class="media-29101 out">
                <img src="images/person_3_sm.jpg" alt="Image" class="img-fluid">
                <h3><a href="#">Will Reagan</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem iusto officia! Quis tenetur maxime, laboriosam saepe, voluptate necessitatibus tempora!</p>
              </div>
    
            </div>
    
          </div>
        </div>
    
      </div>
    <!-- Customer Review Ends -->
    <!-- Footer Begins -->
    <?php require "includes/footer.php"?>
    <!-- Footer Ends -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>