const express = require('express');
const app = express();

app.get('/', (req, res) => {
  res.send('Hola, mundo!');
});

app.listen(3000, () => {
  console.log('Servidor ejecutándose en http://10.246.245.211:3000');
});
