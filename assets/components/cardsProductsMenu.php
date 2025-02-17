<html lang="en">

<body>
    <?php
    foreach ($listCategorys as $category) {
        ?>
        <p class="fw-bold fs-3"><?= $category->getNameCategory() ?></p>
        <div class="row row-col-3 gap-4">
            <?php
            if (!empty($category->products)) {
                foreach ($category->products as $product) {
                    $product_id = $product->getProduct_id();
                    ?>
                    <div class="card col-12 col-sm-6 col-md-4 col-lg-3 container-sm border-0 p-0 m-0 shadow-sm" style="width:300px;" id="cart_product">
                        <img src="<?= image . $product->getImageURL(); ?>"  width="100%" max-height="200px" class="card-img-top"
                            alt="imagen del producto" id="image_product">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-4"><?= $product->getName() ?></h5>
                            <p class="card-text fw-lighter fs-6"><?= $product->getDescription() ?></p>
                            <div class="container d-flex gap-5 align-content-center">
                                <p class="fw-3 fs-3 m-0"><?= $product->getPrice() ?>€</p>
                                <div class="container d-flex gap-2">
                                    <button type="button" class="icono-header-medium border border-circle border-2 add_product_cart border-0 p-2" id="add_cart_product" product-id="<?= $product_id ?>">
                                        <svg class=""
                                            width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13 11h7a1 1 0 0 1 0 2h-7v7a1 1 0 0 1-2 0v-7H4a1 1 0 0 1 0-2h7V4a1 1 0 0 1 2 0v7z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No hay productos en esta categoría.</p>";
            }
            echo "</div>";
    }
    ?>
</body>

</html>