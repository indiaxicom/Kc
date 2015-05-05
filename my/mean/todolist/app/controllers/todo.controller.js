var mongoose = require('mongoose'),
    Todo = require('../models/todo');

module.exports.getAll = function(req, res) {
    Todo.find(function(err, todos){
        if (err) {
            res.send(err);
        }
        res.json(todos);
    });
};

module.exports.save = function(req, res) {
    Todo.create({
            text : req.body.text,
            age : req.body.age,
            done : false
    }, function(err, todos) {
        if (err)
        {
            res.send(err);
        }

        Todo.find(function(err, todos) {
            if (err) {
                res.send(err);
            }
            res.json(todos);
        });
    });
};

module.exports.delete = function(req, res) {
    Todo.remove({
        '_id' : req.params.todo_id
    },
    function(err, todo) {
        if (err) {
            res.send(err);
        }

        Todo.find(function(err, todos) {
            if (err) {
                res.send(err);
            }
            res.json(todos);
        });
    })
};


