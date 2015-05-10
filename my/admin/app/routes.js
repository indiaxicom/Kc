var User = require('./controllers/userController');

module.exports = function(app) {

    app.route('/users')
        .post(User.save);

    app.route('/users/index')
        .get(User.getAll);

    app.route('/users/add')
        .post(User.save);

    app.route('/users/edit/:user_id')
        .post(User.update)
        .get(User.getUser);

    app.route('/users/:user_id')
        .delete(User.delete);

    app.get('*', function(req, res) {
        res.sendfile('./public/index.html');
    });

};
