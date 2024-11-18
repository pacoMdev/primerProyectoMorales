<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>PRODUCTO</th>
            <th>CANTIDAD</th>
            <th>PRECIO</th>
            <th>TOTAL</th>
        </tr>
        <tr>
            <td>
                <div class="container d-flex">
                    <img src="<?= image."taco-de-queso.webp"; ?>" alt="imagen del producto" height="100" width="100">
                    <div class="conteiner">
                        <h4>Tacos de queso</h4>
                        <p class="tx-bs-color-3">tortillas rellenas de queso derretido, doradas a la perfección, irresistibles y perfectas</p>
                    </div>
                </div>
            </td>
            <td class="d-flex">
                <div class="container">
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12L18 12" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p class="">0</p>
                <div class="container">
                    <svg fill="#000000" width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 11h7a1 1 0 0 1 0 2h-7v7a1 1 0 0 1-2 0v-7H4a1 1 0 0 1 0-2h7V4a1 1 0 0 1 2 0v7z"/>
                    </svg>
                </div>
            </td>
            <td>8.75€</td>
            <td>8.75</td>
        </tr>
    </table>
</body>
</html>