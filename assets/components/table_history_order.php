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
            foreach ($data_history as $order => $value) {
                $pedido_id = $value->get_pedido_id();
                $name = $value->getName();
                $surname = $value->getSurname();
                $subtotal = $value->getSubtotal();
                $tax = $value->getTax();
                $price_total = $value->getPrice_total();
                ?>
                <table id="table_product" product-id="<?= $product_id ?>">
                <thead class="table-light">
                    <th>PRODUCTO</th>
                    <th>PRECIO</th>
                    <th>TOTAL</th>
                </thead>
                <tbody class="border-top">
                    <tr>
                        <td class="py-3">
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
</body>

</html>