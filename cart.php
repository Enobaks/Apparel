<?php
session_start();



?>

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
        <h3 class="mb-4 shopping-basket">Shopping Basket</h3>
        <div class="row items">
            <div class="col-md-7 product-item-wrap p-2">
                <!-- start here --> 
                <?php require "config.php";?>

                <?php
                    $user_id = $_SESSION['user_id'];
                    // echo $user_id;
                    // echo '<br>';
                    // echo $product_id;
                    // SELECT products.*, cart.user_id FROM `products` INNER JOIN cart on products.id = cart.product_id INNER JOIN users on cart.user_id = users.id;
                    // SELECT products.* from products WHERE products.id in (SELECT cart.product_id from cart WHERE cart.user_id=$user_id )


                    $products = $conn->query("SELECT products.*, cart.user_id FROM `products` INNER JOIN cart on products.id = cart.product_id INNER JOIN users on cart.user_id = $user_id;");
                    $products->execute();
                    $data = $products->fetchAll(PDO::FETCH_ASSOC);
                    $subTotal = 0;

                    foreach($data as $product ) {  
                        // $prod_id = $product['product_id']; 
                        // $userId = $product['user_id'];
                        // if (isset($_SESSION['deleteItem'])) {
                        //     $deleteProduct = $conn->query("DELETE FROM cart WHERE cart.product_id=$prod_id AND cart.user_id=$userId");
                        // }        
                       
                ?>
                <div class="product-item d-flex justify-content-between mb-3">
                    <img src="<?= $product['image'];?>" width="100px" class="mr-4 cloth-item" alt="<?= $product['title'];?>">
                    <div class="product-description p w-100 d-flex">
                        <div class="product-description-details d-flex flex-column justify-content-between">
                            <p class="text-black main-description"><?= $product['description'];?></p>
                    
                            <div>
                                <p class="product-availability m-0 text-success">In stock</p>
                                <p class="product-color m-0 text-black"><b class="me-1 fw-bold">Colour:</b>Red</p>
                                <p class="product-size m-0 text-black"><b class="me-1 fw-bold">Size:</b>XL</p>
                                <div class="action-points d-flex">
                                    <select name="quantity" id="quantity" class="qty fs-6 me-2" onchange="qtyPrice(); calcTotal(); calcSubTotal()">
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
                                    <div class="d-flex">
                                        <span class="">|</span>
                                        <!-- deleteItem.php?id=<?=$product['id']?>&&u_id=<?=$product['user_id']?> -->
                                        <a href="#" class="delete text-black fw-bold" onclick="myFunction()"> Delete
                                        <!-- <input class="delete " type="button" value="Delete" onclick="myFunction()"> -->
                                        </a>
                                    </div>
                                    <?php
                                        // $prod_id = $product['id']; 
                                        // $userId = $product['user_id'];
                                        // if (isset($_SESSION['deleteItem'])) {
                                        //     $deleteProduct = $conn->query("DELETE FROM cart WHERE cart.product_id=$prod_id AND cart.user_id=$userId");
                                        // }   
                                    ?>
                                </div> 
                            </div>      
                        </div>
                        <p class='product-price fw-bold text-black'>&pound;<span class="qtyPrice"><?= $product['price'];?></span></p>
                        <input name="product_price" class="chest" value="<?= $product['price'];?>" readonly disabled hidden />
                    </div>
                </div>
                
                <hr class="cart-line">
                <?php
                $subTotal += $product['price'];
                ?>
                <?php } ?>
              
                <!-- <hr class="cart-line"> -->
                <div class="total-wrap d-flex flex-column justify-content-end align-items-end">
                    <div class="subtotal-wrap">
                        <p>
                            <span class="me-5 fw-semibold">Subtotal:</span><span class="fw-semibold text-dark">&pound;<span class="subtotal"><?= $subTotal?></span></span>
                        </p>
                        <p>
                            <span class="me-5 fw-semibold">Shipping:</span><span class="fw-semibold text-dark">free</span>
                        </p>
                        <hr class="cart-line">
                        <p>
                            <span class="me-5 fw-semibold text-dark">Total:</span><span class="fw-bold text-black ml-4">&pound;<span class="total"><?= $subTotal?></span></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 bg-light rounded">
                <div class="checkout-wrap d-flex flex-column align-items-start">
                    <h4 class="fw-bold pt-4">Payment Info.</h4>
                    <hr class="payment-line bg-secondary">
                    <p class="fw-semibold">Payment Method</p>
                    <div class="choice fw-semibold text-dark">
                        <input type="radio" name="card" class="me-3">
                        <label for="card" class="fw-semibold">
                            <i class="fa-regular fa-credit-card me-1"></i>
                            Credit/Debit Card
                        </label>
                    </div>
                    <div class="choice fw-semibold text-dark">
                        <input type="radio" name="card" class="me-3">
                        <label for="card" class="fw-semibold">
                        <i class="fa-brands fa-paypal me-1"></i>
                            Paypal
                        </label>
                    </div>
                    <hr class="payment-line bg-secondary mb-4">
                    <div class="card-name mb-4">
                        <p class="fw-semibold">Name on Card:</p>
                        <p class="fw-semibold text-dark">John Carter</p>
                    </div>
                    <div class="card-no mb-4">
                        <p class="fw-semibold">Card Number:</p>
                        <p class="fw-semibold text-dark">.... .... .... 2745</p>
                    </div>
                    <div class="ish d-flex mb-4">
                        <div class="card-expiry-date me-5">
                            <p class="fw-semibold">Expiration Date:</p>
                            <p class="fw-semibold text-dark">05/26</p>
                        </div>
                        <div class='cvv'>
                            <p class="fw-semibold">CVV:</p>
                            <p class="fw-semibold text-dark">215</p>
                        </div>
                    </div>
                    <div class="ten d-flex justify-content-center">
                        <button class="btn btn-custom px-3 checkout"> Checkout</button>
                    </div>
                    <!-- <a href="check-out.php" class="btn main-color px-3 checkout">Proceed to Checkout</a> -->
                </div>
                <!-- <div class="card-brand mt-5">
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
                </div> -->
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
    <script src="js/cart.js"></script>
    <script>
        function myFunction() {
            return "<?php $_SESSION['deleteItem'] = true; ?>"
            console.log('hello');
        }
    </script>
</body>
</html>
