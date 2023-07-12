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
    <!-- Navbar Begins -->
    <?php require "includes/navbar.php"?>
    <!-- Navbar Ends -->
    <div class="cart-wrap p-3">
        <h3 class="my-4">Shopping Basket</h3>
        <div class="row items">
            <div class="col-md-9 product-item-wrap p-2">
                <div class="product-item d-flex justify-content-between mb-3">
                    <img src="./images/women-clothes-img.png" width="100px" class="mr-4 cloth-item" alt="">
                    <div class="product-description p w-100 d-flex">
                        <div class="product-description-details d-flex flex-column justify-content-between">
                            <p class="text-black main-description">Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea Nonumy</p>
                            <div>
                                <p class="product-availability m-0 text-success">In stock</p>
                                <p class="product-color m-0 text-black"><b class="me-1 fw-bold">Colour:</b>Red</p>
                                <p class="product-size m-0 text-black"><b class="me-1 fw-bold">Size:</b>XL</p>
                                <div class="action-points d-flex">
                                    <select name="quantity" id="quantity" class="qty fs-6 me-2">
                                        <option value="">Select Qty</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <p><span class="me-2">|</span>Delete</p>
                                </div> 
                            </div>      
                        </div>
                        <p class="product-price fw-bold text-black">&pound;10</p>                       
                    </div>
                </div>
                <hr class="cart-line">
                <div class="product-item d-flex justify-content-between mb-3">
                    <img src="./images/women-clothes-img.png" width="100px" class="mr-4 cloth-item" alt="">
                    <div class="product-description p w-100 d-flex">
                        <div class="product-description-details d-flex flex-column justify-content-between">
                            <p class="text-black main-description">Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea Nonumy</p>
                            <div>
                                <p class="product-availability m-0 text-success">In stock</p>
                                <p class="product-color m-0 text-black"><b class="me-1 fw-bold">Colour:</b>Red</p>
                                <p class="product-size m-0 text-black"><b class="me-1 fw-bold">Size:</b>XL</p>
                                <div class="action-points d-flex">
                                    <select name="quantity" id="quantity" class="qty fs-6 me-2">
                                        <option value="">Select Qty</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <p><span class="me-2">|</span>Delete</p>
                                </div> 
                            </div>      
                        </div>
                        <p class="product-price fw-bold text-black">&pound;10</p>                       
                    </div>
                </div>
                <hr class="cart-line">
                <div class="product-item d-flex justify-content-between mb-3">
                    <img src="./images/women-clothes-img.png" width="100px" class="mr-4 cloth-item" alt="">
                    <div class="product-description p w-100 d-flex">
                        <div class="product-description-details d-flex flex-column justify-content-between">
                            <p class="text-black main-description">Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea Nonumy</p>
                            <div>
                                <p class="product-availability m-0 text-success">In stock</p>
                                <p class="product-color m-0 text-black"><b class="me-1 fw-bold">Colour:</b>Red</p>
                                <p class="product-size m-0 text-black"><b class="me-1 fw-bold">Size:</b>XL</p>
                                <div class="action-points d-flex">
                                    <select name="quantity" id="quantity" class="qty fs-6 me-2">
                                        <option value="">Select Qty</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <p><span class="me-2">|</span>Delete</p>
                                </div> 
                            </div>      
                        </div>
                        <p class="product-price fw-bold text-black">&pound;10</p>                       
                    </div>
                </div>
                <hr class="cart-line">
            </div>
            <div class="col-md-3">
                <div class="checkout-wrap d-flex flex-column align-items-center">
                    <h4>Order Summary</h4>
                    <p>Subtotal (3 items): <span class="fw-bold">&pound;10</span></p>
                    <button class="btn btn-custom px-3 checkout">Proceed to Checkout</button>
                </div>
                <div class="card-brand mt-5">
                    <p class="fs-5 fw-bold text-black">We Accept</p>
                    <img src="./images/master-card.jpg" alt="">
                    <img src="./images/google-pay.jpg" alt="">
                    <img src="./images/visa.jpg" alt="">
                    <img src="./images/American-Express.jpg" alt="">
                    <img src="./images/apple-files.jpg" alt="">
                    <img src="./images/clearpay.jpg" alt="">
                    <img src="./images/discover-network.jpg" alt="">
                    <img src="./images/maestro.jpg" alt="">
                    <img src="./images/paypal.jpg" alt="">
                    <img src="./images/Diners-club.jpg" alt="">
                    <img src="./images/klarna.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

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