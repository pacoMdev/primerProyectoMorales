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
        <h1 class="fs-4 mb-4">Tu carrito (<?= $contadorProductos; ?>)</h1>
        <table>
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
                                <div type="button" class="d-flex align-items-center justify-content-center container-contador rounded-start-circle" onclick="location.href='?controller=product&action=del_cart&product_id=<?= $product_id ?>'">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 12L18 12" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="d-flex align-items-center justify-content-center container-contador"><?= $cantidad ?></span>
                                <div type="button" class="d-flex align-items-center justify-content-center container-contador rounded-end-circle" onclick="location.href='?controller=product&action=add_cart&product_id=<?= $product_id ?>'">
                                    <svg fill="#000000" width="20px" height="20px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13 11h7a1 1 0 0 1 0 2h-7v7a1 1 0 0 1-2 0v-7H4a1 1 0 0 1 0-2h7V4a1 1 0 0 1 2 0v7z" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td><?= $price ?>€</td>
                        <td><?= $total_price ?>€</td>
                    </tr>
                </tbody>
                <?php
            }
            ?>

        </table>
    </div>
</body>

</html>