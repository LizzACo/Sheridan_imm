const express = require('express'); //de facto node framework
const bodyParser= require('body-parser'); //handles reading data from forms
const hbs = require('hbs'); //templating engine

const app = express();

app.use(bodyParser.urlencoded({extended: true}))
app.set('viewEngine', 'hbs' ); 


//starts a server
app.listen(3000, function() {
  console.log('listening on port 3000')
})

//Route incoming urls to functionality
//req and res stand for request and response
app.get('/', (req, res) => {
  res.render('index.hbs'); //by default, hbs views are placed in a "views" folder
})

app.get('/add-note', (req, res) => {
   res.render('add-note.hbs'); //by default, hbs views are placed in a "views" folder
})