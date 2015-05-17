var mongoose = require('mongoose');
var Schema = mongoose.Schema;
var bcrypt   = require('bcrypt-nodejs');

var userSchema = new Schema({
    first_name: {
        type: String,
        //required: 'First Name is required'
    },
    last_name: {
        type: String,
        //required: 'Last Name is required'
    },
    email: String,
    password: String,
    type: {type: Number, default: 1},
    status: {type: Number, min: 1, max: 2, default: 1 },
    created: {type: Date, default: Date.now },
    updated: {type: Date, default: Date.now },
});

userSchema.methods.generateHash = function(password) {
    return bcrypt.hashSync(password, bcrypt.genSaltSync(8), null);
};

userSchema.methods.validPassword = function(password) {
    return bcrypt.compareSync(password, this.password);
};

module.exports = mongoose.model('User', userSchema);
