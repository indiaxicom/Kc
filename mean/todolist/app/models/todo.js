var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var TodoSchema = new Schema ({
    'text' : String,
    'age' : String
});

module.exports = mongoose.model('Todo', TodoSchema);
