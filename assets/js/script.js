// suma de 1 en 1 el carrito menu
document.querySelectorAll('#cart_product').forEach(tablegen => {
    tablegen.querySelector("#add_cart_product").addEventListener('click', async function () {
        const productId = tablegen.querySelector("#add_cart_product").getAttribute('product-id');
        
        try {
            // Realizar llamada al controlador
            const response = await fetch(`?controller=product&action=add_cart&product_id=${productId}`, {
                method: 'GET',
                headers: { 'Content-Type': 'application/json' }
            });
            console.log(response)
            // Verificar si la respuesta es exitosa
            if (!response.ok) throw new Error(`Error en la solicitud: ${response.status}`);

            const result = await response.json(); // Leer directamente como JSON
            // console.log(result)
            console.log('Producto añadido correctamente:', result);

            if (result.success) {
                console.log ("result: ok")
                console.log("añade producto")
                // contador de carrito (header)
                document.getElementById("cart_product_count").textContent = result.cartCount;
            }

        } catch (error) {
            console.error('Error al añadir producto:', error);
        }
    });
});
document.querySelectorAll('#table_product').forEach(tablegen => {
    tablegen.querySelector("#add_cart_product").addEventListener('click', async function () {
        const productId = tablegen.querySelector("#add_cart_product").getAttribute('product-id');
        
        try {
            const cant_product = parseInt(tablegen.querySelector("#cant_product").textContent);
            console.log(cant_product)

            // Realizar llamada al controlador
            const response = await fetch(`?controller=product&action=add_cart&product_id=${productId}`, {
                method: 'GET',
                headers: { 'Content-Type': 'application/json' }
            });
            console.log(response)
            // Verificar si la respuesta es exitosa
            if (!response.ok) throw new Error(`Error en la solicitud: ${response.status}`);

            const result = await response.json(); // Leer directamente como JSON
            // console.log(result)
            console.log('Producto añadido correctamente:', result);

            if (result.success) {
                console.log ("result: ok")
                console.log("añade producto")
                // contador de carrito (header)
                document.getElementById("cart_product_count").textContent = result.cartCount;
                document.getElementById("cont_carrito_top").textContent = "Tu carrito (" + result.cartCount + ")"

                // datos carrito
                document.getElementById("resume_subtotal").textContent = result.subtotal + "€";
                document.getElementById("resume_tax").textContent = result.tax + "€";
                document.getElementById("resume_total_tax").textContent = result.total_tax + "€";

                // total producto y cantidad del producto
                console.log("cant product:" + tablegen.querySelector("#cant_product").textContent)
                const price_product = parseFloat(tablegen.querySelector("#price_product").textContent)
                tablegen.querySelector("#cant_product").textContent = cant_product + 1
                tablegen.querySelector("#total_price_product").textContent = (cant_product * price_product) + "€";
            }

        } catch (error) {
            console.error('Error al añadir producto:', error);
        }
    });
});
// elimina de 1 en 1 el carrito
document.querySelectorAll('#table_product').forEach(tablegen => {
    tablegen.querySelector("#del_cart_product").addEventListener('click', async function () {
        const productId = tablegen.querySelector("#del_cart_product").getAttribute('product-id');
        
        try {
            const cant_product = parseInt(tablegen.querySelector("#cant_product").textContent);

                if (cant_product == 1){
                    // deshabilita el boton de restar (obliga a eliminar con trash)
                    tablegen.querySelector("#del_cart_product").disabled = true

                }else{
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
                        console.log ("result: ok")
                        console.log("elimina producto")
                        // contador de carrito (header)
                        document.getElementById("cart_product_count").textContent = result.cartCount;
                        document.getElementById("cont_carrito_top").textContent = "Tu carrito (" + result.cartCount + ")"

                        // datos carrito
                        document.getElementById("resume_subtotal").textContent = result.subtotal + "€";
                        document.getElementById("resume_tax").textContent = result.tax + "€";
                        document.getElementById("resume_total_tax").textContent = result.total_tax + "€";

                        // total producto y cantidad del producto
                        console.log("cant product:" + tablegen.querySelector("#cant_product").textContent)
                        const price_product = parseFloat(tablegen.querySelector("#price_product").textContent)
                        tablegen.querySelector("#cant_product").textContent = cant_product - 1
                        tablegen.querySelector("#total_price_product").textContent = (cant_product * price_product) + "€";
                    }

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
document.querySelectorAll("#input_check_promotion").forEach(genDiv =>{
    genDiv.querySelector("#check_promotion").addEventListener("click", async function(){
        const promotion_code = genDiv.querySelector("#promotion_full_code").value
        if (promotion_code!=""){
            try {
                // Realizar llamada al controlador
                console.log("antes")
                const response = await fetch(`?controller=cart&action=apply_discount&promotion_code=${promotion_code}`, {
                    method: 'GET',
                    headers: { 'Content-Type': 'application/json' }
                });
                console.log("despues")
                console.log(response)
                // Verificar si la respuesta es exitosa
                if (!response.ok) throw new Error(`Error en la solicitud: ${response.status}`);

                const result = await response.json(); // Leer directamente como JSON
                // console.log(result)
                console.log('Promocion validada correctamente:', result);

                if (result.success) {
                    // datos carrito
                    console.log ("Aplicando promocion: " + promotion_code)
                    // Añade la promocion y deshabilita el input y boton
                    genDiv.querySelector("#cod_discount").innerText = result.name_promotion
                    genDiv.querySelector("#percent_discount").innerText = result.porcentaje
                    genDiv.querySelector("#promotion_full_code").disabled;
                    genDiv.querySelector("#check_promotion").disabled;


                    document.getElementById("resume_subtotal").textContent = result.subtotal + "€";
                    document.getElementById("resume_tax").textContent = result.tax + "€";
                    document.getElementById("resume_total_tax").textContent = result.total_tax_discount + "€";
                    console.log("Promocion aplicada correctamente")
                }
            } catch (error) {
                console.log("Ocurrio un error" + error)
            }
        }else{
            console.log("no hay promocion escrita")
            console.log (promotion_code)
            console.log(promotion_code.lenght)
        }
    })

});