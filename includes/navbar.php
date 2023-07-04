<nav class="navbar navbar-expand-lg bg-body-tertiary py-3 navigation-bar">
    <div class="container-fluid">
        <a class="navbar-brand fs-2 fw-bold" href="../cloth-store/index.php"><span class="text-danger">A</span>pparel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-left me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../cloth-store/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../cloth-store/about.php">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Product
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../cloth-store/male_products.php">Male Clothes</a></li>
                        <li><a class="dropdown-item" href="../cloth-store/female_products.php">Female Clothes</a></li>
                        <!-- <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../cloth-store/login.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-user me-2"></i>Account
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../cloth-store/login.php">Login</a></li>
                    <li><a class="dropdown-item" href="../cloth-store/registration.php">Register</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../cloth-store/cart.php">
                        <i class="fa-solid fa-cart-shopping me-2" style="color: #000000;"></i>Cart
                    </a>
                </li>
            </ul>
            <form class="d-flex search" role="search">
                <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
                <button class="btn main-color" type="submit">
                    <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                </button>
            </form>
        </div>
    </div>
</nav>