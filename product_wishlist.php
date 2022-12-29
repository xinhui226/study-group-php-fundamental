<?php
session_start();

    // Only change code below this line

       // Instruction: require all the files you need here. Tips: (includes/functions.php, includes/class-products.php)
        require "includes/class-products.php";
        require "includes/functions.php";


    // Only change code above this line
    if ( class_exists( 'Products' ) ) 
        $products = new Products();

    // Only change code below this line 

        // instructions: get all products from the database and store them in the $products variable
        $allproduct= $products->getProducts();

        // instructions: if the form was submitted, add the product to the wishlist or remove it from the wishlist (if it's already in the wishlist)
       if($_SERVER['REQUEST_METHOD']=='POST'){

            $products->toggleWishlist($_POST['id']);

       }


    // Only change code above this line

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products Wishlist</title>
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous"
        />
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        />
        <style type="text/css">
        body {
            background: #f1f1f1;
        }
        </style>
    </head>
    <body>
        <div class="container mt-5 mb-2 mx-auto" style="max-width: 900px;">
            <!-- Only change code below this line -->
            <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php foreach($allproduct as $product) : ?>
                <div class="col">
                    <div class="card h-100">
                        <form 
                            action="<?php echo $_SERVER['REQUEST_URI']; ?>" 
                            method="post">
                            <input type="hidden" name="id" value="<?= $product['id']?>">
                            <input type="hidden" name="liked" value="<?= $product['liked'];?>">
                            <button type="submit" class="btn btn-link p-0 m-0">
                                <?php if($product['liked']==0) : ?>
                                <i class="bi bi-heart" style="position: absolute; top: 10px; right: 10px; font-size: 1.5rem; color: #f00;"></i>
                                <?php else : ?>
                                <i class="bi bi-heart-fill" style="position: absolute; top: 10px; right: 10px; font-size: 1.5rem; color: #f00;"></i>
                                <?php endif ;?>

                            </button>
                        </form>
                        <img
                            src="<?= $product['img']; ?>"
                            class="card-img-top"
                            alt="Product 1"
                        />
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $product['name'];?></h5>
                            <p class="card-text">
                                <?= '$'.$product['price']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div><!-- .row -->
            <!-- Only change code above this line -->

        </div><!-- .container -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"
        ></script>
    </body>
    </html>