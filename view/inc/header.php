<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
            Zay
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.php">Shop</a>
                    </li>

                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <form action="search.php" method="get" class="d-flex">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                    <button class="btn btn-outline-dark">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <div class="navbar align-self-center d-flex">
                <a class="nav-icon position-relative text-decoration-none" href="cart.php">
                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"><?php echo number_cart_product() ?></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                </a>
            </div>
            <?php if (isset($_SESSION['user'])) { ?>
                <a href="logout.php" class="text-gray-200 hover:text-white transition">Logout</a>
            <?php } else { ?>
                <a href="login.php" class="text-gray-200 hover:text-white transition">Login</a>
                <span class="text-white">/</span>
                <a href="register.php" class="text-gray-200 hover:text-white transition">Register</a>
            <?php } ?>

        </div>
    </div>

    </div>
</nav>
<!-- Close Header -->