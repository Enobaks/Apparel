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
        <div class="cat-hero-section position-relative">
            <img src="./images/h1_hero15.jpg" class='male-banner' alt="">
            <div class="hero-txt-wrap position-absolute male-punch text-center m-0">
                <p class="danger fw-normal text-center">Fashion Sale</p>
                <h2 class="fs-1 text-center">Minimal Menz Style</h2>
                <p class="text-center fw-medium">"Consectetur adipisicing elit. Laborum fuga incidunt laboriosam voluptas iure, delectus dignissimos facilis neque nulla earum."</p>
                <button class="btn main-color">Shop Now</button>
            </div>
        </div>
        <div class="items-wrap">
            <h2 class="text-center my-5 fw-bold">Fashion for Men</h2>
            <div class="row items">
                <div class="col-md-12 d-flex justify-content-around flex-column flex-sm-row">
                    <div class="col-md-3 merchant-item testing mt-5">
                        <a href="product_detail.php">
                            <div class="card card-wrap ">
                                <img src="./images/jogger1.jpg" class="card-img-top size-img" alt="Brown Cargo Pants">
                                <div class="card-body d-flex justify-content-between card-txt">
                                    <div class="product-content">
                                        <p class="card-text mb-0 fw-bold">Brown Cargo Pants</p>
                                        <p class="card-text fw-semibold">&pound;12</p>
                                    </div>
                                    <div class="product-action d-flex align-items-center justify-content-between">
                                        <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 merchant-item mt-5">
                        <a href="product_detail.php">
                            <div class="card card-wrap">
                                <img src="./images/tshirt-img.png" class="card-img-top size-img" alt="Yellow T-Shirt">
                                <div class="card-body d-flex justify-content-between card-txt">
                                    <div class="product-content">
                                        <p class="card-text mb-0 fw-bold">Yellow T-Shirt</p>
                                        <p class="card-text fw-semibold">&pound;10</p>
                                    </div>
                                    <div class="product-action d-flex align-items-center justify-content-between">
                                        <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 merchant-item testing mt-5">
                        <a href="product_detail.php">
                            <div class="card card-wrap">
                                <img src="./images/jogger2.jpg" class="card-img-top size-img" alt="Men's Cargo Fleece Joggers">
                                <div class="card-body d-flex justify-content-between card-txt">
                                    <div class="product-content">
                                        <p class="card-text mb-0 fw-bold">Men's Cargo Joggers</p>
                                        <p class="card-text fw-semibold">&pound;19</p>
                                    </div>
                                    <div class="product-action d-flex align-items-center justify-content-between">
                                        <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 merchant-item mt-5">
                        <a href="product_detail.php">
                            <div class="card card-wrap">
                                <img src="./images/man's-shirt.jpg" class="card-img-top size-img" alt="Men's Henley T-Shirts">
                                <div class="card-body d-flex justify-content-between card-txt">
                                    <div class="product-content">
                                        <p class="card-text mb-0 fw-bold">Men's Henley T-Shirts </p>
                                        <p class="card-text fw-semibold">&pound;17</p>
                                    </div>
                                    <div class="product-action d-flex align-items-center justify-content-between">
                                        <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w-100 d-none d-md-block"></div>
                </div>
            </div>
            <div class="row items next-line">
                <div class="col-md-12 d-flex justify-content-around flex-column flex-sm-row">
                    <div class="col-md-3 merchant-item mt-5">
                        <a href="product_detail.php">
                            <div class="card card-wrap">
                                <img src="./images/summer-short.jpg" class="card-img-top size-img" alt="Men's Brown Rope Short">
                                <div class="card-body d-flex justify-content-between card-txt">
                                    <div class="product-content">
                                        <p class="card-text mb-0 fw-bold">Men's Brown Rope Short</p>
                                        <p class="card-text fw-semibold">&pound;15</p>
                                    </div>
                                    <div class="product-action d-flex align-items-center justify-content-between">
                                        <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 merchant-item mt-5">
                        <a href="product_detail.php">
                            <div class="card card-wrap">
                                <img src="./images/summer-short2.jpg" class="card-img-top size-img" alt="Men's Summer Casual Short">
                                <div class="card-body d-flex justify-content-between card-txt">
                                    <div class="product-content">
                                        <p class="card-text mb-0 fw-bold">Men's Summer Casual Short</p>
                                        <p class="card-text fw-semibold">&pound;17</p>
                                    </div>
                                    <div class="product-action d-flex align-items-center justify-content-between">
                                        <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 merchant-item mt-5">
                        <a href="product_detail.php">
                            <div class="card card-wrap">
                                <img src="./images/joggers3.jpg" class="card-img-top size-img" alt="Boy's Y Challenger Training Pant">
                                <div class="card-body d-flex justify-content-between card-txt">
                                    <div class="product-content">
                                        <p class="card-text mb-0 fw-bold">Boy's Y Challenger Training Pant</p>
                                        <p class="card-text fw-semibold">&pound;16</p>
                                    </div>
                                    <div class="product-action d-flex align-items-center justify-content-between">
                                        <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 merchant-item testing mt-5">
                        <a href="product_detail.php">
                            <div class="card card-wrap">
                                <img src="./images/summer-shirt1.jpg" class="card-img-top size-img" alt="Blue Striped Casual Shirt Long Sleeve">
                                <div class="card-body d-flex justify-content-between card-txt">
                                    <div class="product-content">
                                        <p class="card-text mb-0 fw-bold">Blue Striped Casual Shirt Long Sleeve</p>
                                        <p class="card-text fw-semibold">&pound;20</p>
                                    </div>
                                    <div class="product-action d-flex align-items-center justify-content-between">
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
                <div class="col-md-3 merchant-item testing mt-5">
                        <a href="product_detail.php">
                            <div class="card card-wrap">
                                <img src="./images/summer-shirt2.jpg" class="card-img-top size-img" alt="Men's Hawaiian Floral Shirt Button Down">
                                <div class="card-body d-flex justify-content-between card-txt">
                                    <div class="product-content">
                                        <p class="card-text mb-0 fw-bold">Men's Hawaiian Floral Shirt Button Down</p>
                                        <p class="card-text fw-semibold">&pound;22</p>
                                    </div>
                                    <div class="product-action d-flex align-items-center justify-content-between">
                                        <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 merchant-item mt-5">
                        <a href="product_detail.php">
                            <div class="card card-wrap">
                                <img src="./images/green-short.jpg" class="card-img-top size-img" alt="Men's Summer Green Short">
                                <div class="card-body d-flex justify-content-between card-txt">
                                    <div class="product-content">
                                        <p class="card-text mb-0 fw-bold">Men's Summer Green Short</p>
                                        <p class="card-text fw-semibold">&pound;8</p>
                                    </div>
                                    <div class="product-action d-flex align-items-center justify-content-between">
                                        <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 merchant-item mt-5">
                        <a href="product_detail.php">
                            <div class="card card-wrap">
                                <img src="./images/summer-shorts3.jpg" class="card-img-top size-img" alt="Men's Summer Dark Grey Short">
                                <div class="card-body d-flex justify-content-between card-txt">
                                    <div class="product-content">
                                        <p class="card-text mb-0 fw-bold">Men's Summer Dark Grey Short</p>
                                        <p class="card-text fw-semibold">&pound;11</p>
                                    </div>
                                    <div class="product-action d-flex align-items-center justify-content-between">
                                        <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 merchant-item mt-5">
                        <a href="product_detail.php">
                            <div class="card card-wrap">
                                <img src="./images/joggers6.jpg" class="card-img-top size-img" alt="Plain Tracksuit Bottoms for Men">
                                <div class="card-body d-flex justify-content-between card-txt">
                                    <div class="product-content">
                                        <p class="card-text mb-0 fw-bold">Plain Tracksuit Bottoms for Men</p>
                                        <p class="card-text fw-semibold">&pound;9</p>
                                    </div>
                                    <div class="product-action d-flex align-items-center justify-content-between">
                                        <i class="fa-solid fa-bag-shopping fs-4" style="color: #000000;"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Footer Begins -->
        <?php require "includes/footer.php"?>
        <!-- Footer Ends -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>