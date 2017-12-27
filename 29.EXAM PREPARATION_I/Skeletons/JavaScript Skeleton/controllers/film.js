const Film = require('../models/Film');

module.exports = {
	index: (req, res) => {
        //TODO: Implement me ...
		Film.find().then(films => {
			res.render('film/index', {'films': films});
		})
	},
	createGet: (req, res) => {
        //TODO: Implement me ...
		res.render('film/create');
	},
	createPost: (req, res) => {
        //TODO: Implement me ...
        let film = req.body;
        Film.create(film).then(film => {
            res.redirect("/");
        }).catch(err => {
            film.error = 'Cannot create film.';
            res.render('film/create', film);
        });
	},
	editGet: (req, res) => {
        //TODO: Implement me ...
        let filmId = req.params.id;
        Film.findById(filmId).then(film => {
            if (film) {
                res.render('film/edit', film );
            }
            else {
                res.redirect('/');
            }
        }).catch(err => res.redirect('/'));
	},
	editPost: (req, res) => {
        //TODO: Implement me ...
        let filmId = req.params.id;
        let film = req.body;

        Film.findByIdAndUpdate(filmId, film, {runValidators: true}).then(films => {
            res.redirect("/");
        }).catch(err => {
            film.id = filmId;
            film.error = "Cannot edit film.";
            return res.render("film/edit", film);
        });
    },
	deleteGet: (req, res) => {
        //TODO: Implement me ...
        let filmId = req.params.id;
        Film.findById(filmId).then(film => {
            if (film) {
                return res.render('film/delete', film);
            }
            else {
                return res.redirect('/');
            }
        }).catch(err => res.redirect('/'));
	},
	deletePost: (req, res) => {
        //TODO: Implement me ...
        let filmId = req.params.id;
        Film.findByIdAndRemove(filmId).then(film => {
            res.redirect('/');
        }).catch(err => res.redirect('/'));
	}
};