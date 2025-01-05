<html lang="en">
    <body>
        <?php
        // var_dump($data3Promotion);
        foreach ($data3Promotion as $key) {
        ?>
            <a href="?controller=product&action=menu" class="col-12 col-sm-6 col-md-4 col-lg-3 card nav-link shadow border-0" style="min-width: 18rem; max-width: 25rem;">
            <div class="card-body">
                <h5 class="card-title fs-3 w-auto fw-bold"><?= $key->getName_discount() ?></h5>
                <p class="card-text border-bottom border-2 border-danger w-auto fw-bold d-inline-flex"><?= $key->getPromotion_code() ?></p>
            </div>
            <img src="<?= image.$key->getImageURL(); ?>" class="card-img w-100 h-90" alt="imagen promocion">
        </a>
        <?php
        }
        ?>
        
    </body>
</html>