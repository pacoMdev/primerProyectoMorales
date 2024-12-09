<!DOCTYPE html>
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
                    <th>CANTIDAD</th>
                    <th>PRECIO</th>
                    <th>TOTAL</th>
                </thead>
                <tbody class="border-top">
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?= image . $imageURL; ?>" alt="imagen del producto"
                                    class="img-fluid me-3 object-fit-cover" height="150px" width="150px">
                                <div class="">
                                    <h4 class="mb-1"><?= $name ?></h4>
                                    <p class="text-muted small mb-0"><?= $description ?></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-center gap-1">
                                <button type="button" class="d-flex align-items-center justify-content-center container-contador rounded-start-circle del_product_cart border-0" product-id="<?= $product_id ?>" id="del_cart_product">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 12L18 12" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <span class="d-flex align-items-center justify-content-center container-contador"
                                    id="cant_product"><?= $cantidad ?></span>
                                <button type="button"
                                    class="d-flex align-items-center justify-content-center container-contador rounded-end-circle add_product_cart border-0"
                                    product-id="<?= $product_id ?>" id="add_cart_product">
                                    <svg fill="#000000" width="20px" height="20px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13 11h7a1 1 0 0 1 0 2h-7v7a1 1 0 0 1-2 0v-7H4a1 1 0 0 1 0-2h7V4a1 1 0 0 1 2 0v7z" />
                                    </svg>
                                </button>
                                <div class="d-flex align-items-center justify-content-center container-contador rounded-circle del_full_product_cart"
                                    type="button" product-id="<?= $product_id ?>">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7 4C7 2.34315 8.34315 1 10 1H14C15.6569 1 17 2.34315 17 4V5H21C21.5523 5 22 5.44772 22 6C22 6.55228 21.5523 7 21 7H19.9394L19.1153 20.1871C19.0164 21.7682 17.7053 23 16.1211 23H7.8789C6.29471 23 4.98356 21.7682 4.88474 20.1871L4.06055 7H3C2.44772 7 2 6.55228 2 6C2 5.44772 2.44772 5 3 5H7V4ZM9 5H15V4C15 3.44772 14.5523 3 14 3H10C9.44772 3 9 3.44772 9 4V5ZM6.06445 7L6.88085 20.0624C6.91379 20.5894 7.35084 21 7.8789 21H16.1211C16.6492 21 17.0862 20.5894 17.1191 20.0624L17.9355 7H6.06445Z"
                                            fill="#000000" />
                                    </svg>
                                </div>
                            </div>

                        </td>
                        <td id="price_product"><?= $price ?>€</td>
                        <td id="total_price_product"><?= $total_price ?>€</td>
                    </tr>
                </tbody>
                </table>
                <?php
            }
            ?>
    </div>
</body>

</html>