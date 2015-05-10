var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var UserSchema = new Schema({
    first_name: {
        type: String,
        required: 'First Name is required'
    },
    last_name: {
        type: String,
        required: 'Last Name is required'
    },
    email: String,
    password: String,
    type: Number,
    status: {
        type: Number,
        min: 1,
        max: 2
    },
    created: {
        type: Date,
        default: Date.now
    },
    updated: {
        type: Date,
        default: Date.now
    },
});

module.exports = mongoose.model('User', UserSchema);
