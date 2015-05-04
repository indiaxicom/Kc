/*Core FIles*/
var express = require('express');
var app = express();
var mongoose = require('mongoose');
var morgan = require('morgan');
var bodyParser = require('body-parser');
var methodOverride = require('method-override');


/*Config Files*/
var port = process.env.PORT || 8080;
var db = require('./config/db'); /* Database */


/* Functions */
mongoose.connect(db.url); /* Connect database */
app.use(express.static(__dirname + '/public')); /* Creating webroot */
app.use(morgan('dev'));
app.use(bodyParser.urlencoded({extended:true}));
app.use(bodyParser.json());
app.use(bodyParser.json({ type: 'application/vnd.api+json' }));
app.use(methodOverride());


require('./app/routes')(app);
app.listen(port);
console.log('Sumit You are genious');
