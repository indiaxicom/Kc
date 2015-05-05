var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var TodoSchema = new Schema ({
    text : {
        type : String,
        //required : 'Text is required'
    },
    'age' : String
});

module.exports = mongoose.model('Todo', TodoSchema);
