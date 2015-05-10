var mongoose = require('mongoose'),
    User = require('../models/userModel');

module.exports.getAll = function(req, res) {
    
    User.find(function(err, users){
        if (err) {
            res.send(err);
        }
        res.json(users);
    });
};

module.exports.getUser = function(req, res) {
    User.findOne ({'_id': req.params.user_id}, function(err, users){
        if (err) {
            res.send(err);
        }
        res.json(users);
    });
};

module.exports.save = function(req, res) {
    User.create(req.body, function(err, users) {
        if (err)
        {
            res.send(err);
        }
        res.json(users);
    });
};
module.exports.update = function(req, res) {

    User.update({'_id': req.params.user_id}, req.body, function(err, users) {
        if (err)
        {
            res.send(err);
        }
        res.json(users);
    });
};

module.exports.delete = function(req, res) {
    User.remove({
        '_id' : req.params.user_id
    },
    function(err, user) {
        if (err) {
            res.send(err);
        }
        res.json(user)
    });
};


