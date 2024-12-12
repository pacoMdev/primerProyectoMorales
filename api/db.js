const mysql = require("mysql")

// Conecta con la base de datos DB
const pool = mysql.createPool({
    host: "127.0.0.1:3307",
    user: "root",
    password: "root",
    database: "Tres_Tacos_DB"
})

// Exporta conexion para otros archivos
module.exposrts = pool