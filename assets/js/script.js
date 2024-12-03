
// añade de 1 en 1 al carrito
document.querySelectorAll('.add_product_cart').forEach(divgen => {
    divgen.addEventListener('click', async function () {
        const productId = this.getAttribute('product-id');
        console.log("Valor de product-id:")
        console.log(productId)
        try {
            // Realizar llamada al controlador
            const response = await fetch(`?controller=product&action=add_cart&product_id=${productId}`, {
                method: 'GET',
                headers: { 'Content-Type': 'application/json' }
            });
            console.log(response)
            // Verificar si la respuesta es exitosa
            console.log("verifica respuesta de llamada")
            if (!response.ok) throw new Error(`Error en la solicitud: ${response.status}`);

            const result = await response.json(); // Leer directamente como JSON
            // console.log(result)
            console.log('Producto añadido correctamente:', result);
            if (result.success) {
                // contador de carrito (header)
                document.getElementById("cart_product_count").textContent = result.cartCount;
                document.getElementById("cont_carrito_top").textContent = "Tu carrito (" + result.cartCount + ")"

                // contador de producto
                const cant_product = parseInt(document.getElementById("cant_product").textContent);
                document.getElementById("cant_product").textContent = cant_product + 1;

                // total del producto
                const price_product = parseFloat(document.getElementById("price_product").textContent);
                document.getElementById("total_price_product").textContent = (cant_product * price_product) + "€";

                // datos carrito
                document.getElementById("resume_subtotal").textContent = result.subtotal + "€";
                document.getElementById("resume_tax").textContent = result.tax + "€";
                document.getElementById("resume_total_tax").textContent = result.total_tax + "€";
            }
        } catch (error) {
            console.error('Error al añadir producto:', error);
        }
    });
});

// elimina de 1 en 1 el carrito
document.querySelectorAll('.del_product_cart').forEach(div => {
    div.addEventListener('click', async function () {
        const productId = this.getAttribute('product-id');
        console.log("Valor de product-id:")
        console.log(productId)
        try {
            // Realizar llamada al controlador
            const response = await fetch(`?controller=product&action=del_cart&product_id=${productId}`, {
                method: 'GET',
                headers: { 'Content-Type': 'application/json' }
            });
            console.log(response)
            // Verificar si la respuesta es exitosa
            if (!response.ok) throw new Error(`Error en la solicitud: ${response.status}`);

            const result = await response.json(); // Leer directamente como JSON
            // console.log(result)
            console.log('Producto eliminado correctamente:', result);

            if (result.success) {

                // contador de carrito (header)
                document.getElementById("cart_product_count").textContent = result.cartCount;
                document.getElementById("cont_carrito_top").textContent = "Tu carrito (" + result.cartCount + ")"

                // comprueva que este a 0, si lo esta elimina la tabla
                document.querySelectorAll("#table_product").forEach(tablegen => {
                    const cant_product = parseInt(tablegen.querySelector("#cant_product").textContent);

                    if (cant_product == 1){
                        // deshabilita el boton de restar (obliga a eliminar con trash)

                        // const producto_table = tablegen.getAttribute("product-id")
                        // if (producto_table == productId) {
                        //     tablegen.remove()
                        //     // comprovar si no hay productos
                        //     if (count(document.querySelectorAll("#table_product")) == 0) {
                        //         // cambia valor de listar productos a no hay productos compra alguno
                        //     }
                        // }

                    }else{
                        // total producto y cantidad del producto
                        const price_product = parseFloat(tablegen.querySelector("#price_product").textContent)
                        tablegen.querySelector("#cant_product").textContent = cant_product
                        tablegen.querySelector("#total_price_product").textContent = (cant_product * price_product) + "€";
                    }
                    
                })

                // datos carrito
                document.getElementById("resume_subtotal").textContent = result.subtotal + "€";
                document.getElementById("resume_tax").textContent = result.tax + "€";
                document.getElementById("resume_total_tax").textContent = result.total_tax + "€";
            }
        } catch (error) {
            console.error('Error al añadir producto:', error);
        }
    });
});


// elimina el producto completo del carrito
document.querySelectorAll('.del_full_product_cart').forEach(div => {
    div.addEventListener('click', async function () {
        const productId = this.getAttribute('product-id');
        console.log("Valor de product-id:")
        console.log(productId)
        try {
            // Realizar llamada al controlador
            const response = await fetch(`?controller=product&action=del_full_product_cart&product_id=${productId}`, {
                method: 'GET',
                headers: { 'Content-Type': 'application/json' }
            });
            console.log(response)
            // Verificar si la respuesta es exitosa
            if (!response.ok) throw new Error(`Error en la solicitud: ${response.status}`);

            const result = await response.json(); // Leer directamente como JSON
            // console.log(result)
            console.log('Producto eliminado del todo correctamente:', result);

            if (result.success) {

                document.querySelectorAll("#table_product").forEach(tablegen => {
                    const producto_table = tablegen.getAttribute("product-id")
                    if (producto_table == productId) {
                        tablegen.remove()
                        // comprovar si no hay productos
                        if (count(document.querySelectorAll("#table_product")) == 0) {
                                // cambia valor de listar productos a no hay productos compra alguno
                            }
                    }
                })
                // contador de carrito (header)
                document.getElementById("cart_product_count").textContent = result.cartCount;
                document.getElementById("cont_carrito_top").textContent = "Tu carrito (" + result.cartCount + ")"


                // datos carrito
                document.getElementById("resume_subtotal").textContent = result.subtotal + "€";
                document.getElementById("resume_tax").textContent = result.tax + "€";
                document.getElementById("resume_total_tax").textContent = result.total_tax + "€";
            }
        } catch (error) {
            console.error('Error al añadir producto:', error);
        }
    });
});