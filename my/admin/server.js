/*Core FIles*/
var express = require('express');
var app = express();
var mongoose = require('mongoose');
var morgan = require('morgan');
var bodyParser = require('body-parser');
var cookieParser = require('cookie-parser');
var methodOverride = require('method-override');

/*Authentication and session*/

var passport = require('passport');
var flash = require('connect-flash');
var session = require('express-session');


/*Config Files*/
var port = process.env.PORT || 8080;
var db = require('./config/db'); /* Database */

require('./config/passport')(passport); // pass passport for configuration


/* Functions */
mongoose.connect(db.url); /* Connect database */
app.use(express.static(__dirname + '/public')); /* Creating webroot */
app.use(morgan('dev'));
app.use(cookieParser());
app.use(bodyParser.urlencoded({extended:true}));
app.use(bodyParser.json());
app.use(bodyParser.json({ type: 'application/vnd.api+json' }));
app.use(methodOverride());

// required for passport
app.use(session({ secret: 'ilovescotchscotchyscotchscotch' })); // session secret
app.use(passport.initialize());
app.use(passport.session()); // persistent login sessions
app.use(flash()); // use connect-flash for flash messages stored in session



require('./app/routes')(app, passport);
app.listen(port);
console.log('Sumit You are genious');
exports = module.exports = app;
