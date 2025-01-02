const express = require("express");
const app = express();

const cors = require('cors');

// Configura el middleware CORS
app.use(cors({
  origin: 'http://localhost', // Origen permitido (tu frontend)
  methods: ['GET', 'POST', 'DELETE', 'PUT'],   // Métodos permitidos (FULL CRUD)
}));

//nos ayuda a analizar el cuerpo de la solicitud POST
app.use(express.json());
app.use(express.urlencoded({extended: true}));

//cargamos el archivo de rutas
app.use(require('./routes/user.js'));
app.use(require('./routes/promotion.js'));
app.use(require('./routes/product.js'));
app.use(require('./routes/pedido.js'));
app.use(require('./routes/ingredient.js'));
app.use(require('./routes/category.js'));
app.use(require('./routes/history_log.js'));

app.listen(process.env.PORT||3300,() => {
    console.log("Servidor corriendo en el puerto 3300");
});

module.exports = app;