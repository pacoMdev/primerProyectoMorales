
<!DOCTYPE html>
<html lang="en">
<body>
    <?php 
        foreach ($listCategorys as $category) { 
    ?>
            <p class="fw-bold fs-3"><?= $category->getNameCategory() ?></p>
            <div class="row row-col-3 gap-4">
    <?php
            if (!empty($category->products)){
                foreach($category->products as $product){
                    $product_id=$product->getProduct_id();
    ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 container-sm card border-0 p-0 m-0" style="width:300px;">
                    <img src="<?= image.$product->getImageURL(); ?>" height="90%" width="100%" class="card-img-top" alt="imagen del producto">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-4"><?= $product->getName() ?></h5>
                        <p class="card-text fw-lighter fs-6"><?= $product->getDescription() ?></p>
                        <div class="container d-flex gap-5 align-content-center">
                            <p class="fw-3 fs-3 m-0"><?= $product->getPrice() ?>€</p>
                            <div class="container d-flex gap-2">
                                <svg class="icono-header-medium border border-circle border-2" type="button" onclick="location.href='?controller=product&action=del_product&product_id=<?= $product_id ?>'" width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 12L18 12" class="icono-stroke-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p class="m-0">0</p>
                                    <svg class="icono-header-medium border border-circle border-2" type="button" onclick="location.href='?controller=product&action=add_cart&product_id=<?= $product_id ?>'" width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 11h7a1 1 0 0 1 0 2h-7v7a1 1 0 0 1-2 0v-7H4a1 1 0 0 1 0-2h7V4a1 1 0 0 1 2 0v7z"/>
                                    </svg>
                            </div>
                        </div>
                    </div>
                </div>
    <?php
            }
        }else{
            echo "<p>No hay productos en esta categoría.</p>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>