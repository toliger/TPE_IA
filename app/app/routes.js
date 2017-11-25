// app/routes.js
module.exports = function(app, passport) {

	// =====================================
	// HOME PAGE                    ========
	// =====================================
  app.get('/', (req, res) => {
      res.render('accueil/accueil.ejs');
  }).get('/partie1', (req, res) => {
      res.render('Parties/partie1.ejs');
  }).get('/partie2', (req, res) => {
      res.render('Parties/partie2.ejs');
  }).get('/partie3', (req, res) => {
      res.render('Parties/partie3.ejs');
  }).get('/Jeu', (req, res) => {
      res.render('Jeu/jeu.ejs');
  }).get('/Synthese', (req, res) => {
      res.render('Synthese/synthese.ejs');
  }).get('/Bibliographie', (req, res) => {
      res.render('Bibliographie/bibliographie.ejs');
  }).get('/googlec0b1a061dd34c66c.html ', (req, res) => {
      res.render('google/index.ejs');
  });

};
