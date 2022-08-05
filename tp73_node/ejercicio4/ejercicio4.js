const os = require('os')
console.log('memoria libre'+os.freemem()+'bytes')
const vect = []
for(let i = 0; i <= 1000000; i++){
    vect.push(i)
}
console.log('memoria libre'+os.freemem()+'bytes')