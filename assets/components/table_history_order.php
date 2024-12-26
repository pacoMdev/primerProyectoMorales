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
        <table id="table_product" >
                <thead class="table-light">
                    <th>PEDIDO ID</th>
                    <th>NAME</th>
                    <th>SURNAME</th>
                    <th>METODO_ENVIO</th>
                    <th>FECHA</th>
                    <th>SUBTOTAL</th>
                    <th>TAX</th>
                    <th>TOTAL_TAX</th>
                </thead>
        <?php
        foreach ($data_history as $order => $value) {
            $pedido_id = $value->getPedido_id();
            $name = $value->getName();
            $surname = $value->getSurname();
            $met_envio = $value->getMetodo_envio();
            $date_order = $value->getDate_creation();
            $subtotal = $value->getSubtotal();
            $tax = $value->getTax();
            $price_total = $value->getPrice_total();
        ?>
            
                <tbody class="border-top">
                    <tr>
                        <td id="pedido_id"><?= $pedido_id ?></td>
                        <td id="name"><?= $name ?></td>
                        <td id="surname"><?= $surname ?></td>
                        <td id="met_envio"><?= $met_envio ?></td>
                        <td id="date_order"><?= $date_order ?></td>
                        <td id="subtotal"><?= $subtotal ?>€</td>
                        <td id="tax"><?= $tax ?>€</td>
                        <td id="total_price_product"><?= $price_total ?>€</td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
    </div>
</body>

</html>