var User = require('./controllers/userController');

module.exports = function(app, passport) {

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

    app.route('/signup')
        .get(function(req, res) {
            res.sendfile('./public/authenticate.html');
        })
        .post(function(req, res, next) {
            if (!req.body.email || !req.body.password) {
                return res.status(400).json({message: 'Please fill out all fields'});
            }

            passport.authenticate('local-signup', function(err, user, info) {
                if (err) {
                    return next(err);
                }

                if (user) {
                    return res.json({'status' : true});
                } else {
                    return res.status(401).json(info);
                }
            })(req, res, next);
        });


    app.route('*')
            .get(function(req, res) {
        res.sendfile('./public/index.html');
    });
};

function isLoggedIn(req, res, next) {
    if (req.isAuthenticated())
        return next();
    res.redirect('/');
}