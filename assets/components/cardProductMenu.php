<!DOCTYPE html>
<html lang="en">
<body>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 container-sm card border-0 p-0" style="width: 300px;">
        <img src="<?= image."taco-de-queso.webp"; ?>" height="90%" width="100%" class="card-img-top" alt="imagen del producto">
        <div class="card-body">
            <h5 class="card-title fw-bold fs-4"><?= $product->getName_product() ?></h5>
            <p class="card-text fw-lighter fs-6">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="container d-flex gap-5 align-content-center">
                <p class="fw-3 fs-2">8.75€</p>
                <div class="container d-flex gap-2">
                    <svg class="icono-header-medium border border-circle border-2" type="button" width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12L18 12" class="icono-stroke-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p>0</p>
                    <svg class="icono-header-medium border border-circle border-2" type="button" width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 11h7a1 1 0 0 1 0 2h-7v7a1 1 0 0 1-2 0v-7H4a1 1 0 0 1 0-2h7V4a1 1 0 0 1 2 0v7z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</body>
</html>