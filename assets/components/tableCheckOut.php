<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        th {
            width: 100px;
        }
    </style>
</head>

<body>
    <div class="p-4 bg-bs-color-white rounded">
        <h1 class="fs-4 mb-4" id="cont_carrito_top">Tu carrito (<?= $contadorProductos; ?>)</h1>
            <?php
            foreach ($cart_products as $product) {
                $product_id = $product["product"][0]->getProduct_id();
                $name = $product["product"][0]->getName();
                $description = $product["product"][0]->getDescription();
                $imageURL = $product["product"][0]->getImageURL();
                $price = $product["product"][0]->getPrice();
                $cantidad = $product["cont"];
                $total_price = $price * $cantidad;
                ?>
                <table id="table_product" product-id="<?= $product_id ?>">
                <thead class="table-light">
                    <th>PRODUCTO</th>
                    <th>PRECIO</th>
                    <th>TOTAL</th>
                </thead>
                <tbody class="border-top">
                    <tr>
                        <td class="py-3 w-75">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <img src="<?= image . $imageURL; ?>" alt="imagen del producto" class="img-fluid me-3 object-fit-cover bg-bs-color-8 rounded" height="150px" width="150px">
                                    <!-- falta ajustar la posicion del contador en responsive -->
                                    <p class="bg-bs-color-5 border-cicle contador-cart-checkout" id="cart_product_count"><?= $cantidad; ?></p>
                                </div>
                                <div class="px-2">
                                    <h4 class="mb-1"><?= $name ?></h4>
                                    <p class="text-muted small mb-0"><?= $description ?></p>
                                </div>
                            </div>
                        </td>
                        <td id="price_product"><?= $price ?>€</td>
                        <td id="total_price_product"><?= $total_price ?>€</td>
                    </tr>
                </tbody>
                </table>
            <?php } ?>
    </div>
    <div class="container w-100 bg-bs-color-white rounded p-3 my-3">
            <table class="w-100 mx-auto">
                <tr>
                    <td>Subtotal</td>
                    <td class="text-end" id="resume_subtotal"><?= $price_cart["subtotal"] ?>€</td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td class="text-end">
                        <p class="m-0"><?= $percent_discount ?></p>
                        <p class="m-0"><?= $cod_discount ?></p>
                    </td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td class="text-end">FREE</td>
                </tr>
                <tr>
                    <td>Tax (21%) included</td>
                    <td class="text-end" id="resume_tax"><?= $price_cart["tax"] ?>€</td>
                </tr>
                <tr>
                    <td class="d-flex">
                        <p class="fw-bold">TOTAL</p>(inc. IMP)
                    </td>
                    <td class="text-end fw-bold" id="resume_total_tax"><?= $price_cart["total_imp"] ?>€</td>
                </tr>
            </table>
        </div>
</body>

</html>