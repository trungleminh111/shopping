<?php require_once 'core/boot.php'; ?>

<!doctype html>

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

</head>

<body>
    <?php include './view/inc/header.php'; ?>
    <?php include './view/inc/banner.php'; ?>

    <div class="my-5 container" id="new">
        <div class="row">
            <?php $product_list = get_products_by_name($_GET['search']) ?>
            <?php foreach ($product_list as $product) { ?>
                <div class="col-md-4 mt-3 product-item col-sm-12 col-lg-3">
                    <div class="card">
                        <a href="product_detail.php?id=<?php echo $product['id']; ?>">
                            <img class="card-img-top" height="300px" src="<?php echo $product['img']; ?>" alt="Product">
                        </a>
                        <div class="card-body">
                            <p class="card-text fw-bold product-title"><?php echo $product['name']; ?></p>
                            <strong class="text-secondary">
                                $<?php echo $product['price']; ?>
                               
                            </strong>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
    <?php include './view/inc/footer.php'; ?>
    <!-- Bootstrap JavaScript Libraries -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>