var express = require('express');
let expressLess   = require('express-less');
let minifyHTML    = require('express-minify-html');
let favicon       = require('serve-favicon');
var app = express();


app.set('views', __dirname+'/views');

//Activation de EJS
app.set('view engine', 'ejs');

//Activation de less
app.use('/less-css', expressLess(__dirname + '/less', { compress: false, cache: false }));

//Compression HTML
app.use(minifyHTML({
  override:      true,
  exception_url: false,
  htmlMinifier: {
    removeComments:            true,
    collapseWhitespace:        true,
    collapseBooleanAttributes: true,
    removeAttributeQuotes:     true,
    removeEmptyAttributes:     true,
    minifyJS:                  true
  }
}));

//Dossier statique
app.use('/static', express.static('public'));

//favicon
app.use(favicon(__dirname + '/public/images/favicon.png'));

// routes
require('./app/routes.js')(app);

// Traitement Erreur 404
require('./app/404.js')(app);

//Ecoute le port 8080
app.listen(8080);
console.log('TPE_IA');
