const express = require('express')
const app = express()
const path = require('path')

// Configurar la carpeta de archivos estáticos
app.use(express.static(path.join(__dirname)))

// Ruta principal
app.get('/', (req, res) => {
	res.sendFile(path.join(__dirname, 'index.html'))
})

// Iniciar el servidor
app.listen(3000, () => {
	console.log('Servidor iniciado en el puerto 3000')
})
