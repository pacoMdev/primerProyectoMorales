<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                $name = $product[0]->getName();
                $description = $product[0]->getDescription();
                $imageURL = $product[0]->getImageURL();
                $price = $product[0]->getPrice();
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
                            <div class="d-flex align-items-center justify-content-center gap-2">
                                <div type="button" class="btn btn-outline-secondary btn-sm rounded-circle">
                                    <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 12L18 12" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span>1</span>
                                <div class="btn btn-outline-secondary btn-sm rounded-circle">
                                    <svg fill="#000000" width="15px" height="15px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13 11h7a1 1 0 0 1 0 2h-7v7a1 1 0 0 1-2 0v-7H4a1 1 0 0 1 0-2h7V4a1 1 0 0 1 2 0v7z" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                        <td><?= $price ?>€</td>
                        <td><?= $price ?>€</td>
                    </tr>
                </tbody>
                <?php
            }
            ?>

        </table>
    </div>
</body>

</html>