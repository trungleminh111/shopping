<?php require_once 'core/boot.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="./public/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="./public/img/favicon.ico">

    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/templatemo.css">
    <link rel="stylesheet" href="./public/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="./public/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--
    


-->
</head>

<body>
    <?php include 'inc/navbar.php'; ?>
    <?php include 'inc/header.php'; ?>
    <?php include 'inc/banner.php'; ?>
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p>
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="row">
            <?php $categories_list = get_all_categories() ?>
            <?php foreach ($categories_list as $categories) { ?>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="<?php echo $categories['img']; ?>" class="rounded-circle img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3"><?php echo $categories['name']; ?></h5>
                    <a href="category.php">Go Shop</a></a>

                </div>

            <?php } ?>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="row">
                <?php $product_list = get_all_products() ?>
                <?php foreach ($product_list as $product) { ?>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="product_detail.php?id=<?php echo $product['id']; ?>">
                                <img src="<?php echo $product['img']; ?>" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                    <li class="text-muted text-right">$<?php echo $product['price']; ?></li>
                                </ul>
                                <a href="product_detail.php?id=<?php echo $product['id']; ?>" class="h2 text-decoration-none text-dark"><?php echo $product['name']; ?></a>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.
                                </p>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        </div>
        </div>
    </section>
    <!-- End Featured Product -->


    <!-- Start Footer -->
    <?php include 'inc/footer.php'; ?>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="./public/js/jquery-1.11.0.min.js"></script>
    <script src="./public/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="./public/js/bootstrap.bundle.min.js"></script>
    <script src="./public/js/templatemo.js"></script>
    <script src="./public/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>