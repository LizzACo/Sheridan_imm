const express = require('express'); //de facto node framework
const bodyParser= require('body-parser'); //handles reading data from forms
const hbs = require('hbs'); //templating engine
const MongoClient = require('mongodb').MongoClient; //database


const app = express();
var db;

//connect to the MongoDB
MongoClient.connect('mongodb://localhost:27017', (err, client) => {
  if (err) return console.log(err);


  db = client.db('NotesApp'); //Sets the database to work with

  //starts a server
  app.listen(3000, () => {
    console.log('listening on port 3000')
  })
})

app.use(bodyParser.urlencoded({extended: true}))
app.set('viewEngine', 'hbs' );

//Route incoming urls to functionality
//req and res stand for request and response
app.get('/', (req, res) => {

  //read all notes from the Notes collection
  db.collection('Notes').find().toArray((err, result) => {
    if (err) return console.log(err)

    //To pass variables to a view, include an object as a second parameter. Here we pass "result" data. 
    //The view will reference it as "notes"
    res.render('index.hbs', {notes: result}) //by default, hbs views are placed in a "views" folder. 
  })
})

//display the "Add note" form
app.get('/add-note', (req, res) => {

   res.render('add-note.hbs'); //by default, hbs views are placed in a "views" folder
})

//Saves form data and redirects back to home page.
app.post('/notes', (req, res) => {
   db.collection('Notes').insertOne(req.body, (err, result) => {
    if (err) return console.log(err)

    console.log('saved to database') //debug console message
    res.redirect('/')
  })
})