const fs = require ('fs')
fs.writeFile('./archivoNodejs.txt','linea1\nLínea 2',error =>{
    if (error)
      console.log(error)//console log en como un cout en c++ o un document.write en java.
    else
      console.log('El archivo fue creado')
})