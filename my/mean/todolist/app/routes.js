'use strict';

var Todo = require('./controllers/todo.controller');

module.exports = function(app) {

    app.route('/api/todos')
        .get(Todo.getAll)
        .post(Todo.save);

    app.route('/api/todos/:todo_id')
        .delete(Todo.delete);

    app.get('*', function(req, res) {
        res.sendfile('./public/views/index.html');
    });

};
