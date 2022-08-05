const fs = require('fs')
fs.readFile('./archivoNodejs.txt', leer)
console.log('última línea del programa')
function leer(error, datos) {
  if (error)
    console.log(error)
  else
    console.log(datos.toString())
}