const express = require("express")
const db = require("./db")
const app = express()
const PORT = 3000


app.arguments(express.json())


// Uso del historial de logs
const logger = new LogHistory();

// Metodos para añadir al log
// logger.addLog('INFO', 'La aplicación ha iniciado');
// logger.addLog('DEBUG', 'Cargando datos del usuario');
// logger.addLog('ERROR', 'No se pudo conectar a la base de datos');
// logger.addLog('WARN', 'La memoria está llegando al límite');

// console.log('Todos los logs:');
// console.table(logger.getLogs());

// console.log('Logs de nivel ERROR:');
// console.table(logger.filterLogsByLevel('ERROR'));

// logger.clearLogs();
// console.log('Logs después de limpiar:', logger.getLogs());

