const Product = require('../models/Product');

module.exports = {
	index: (req, res) => {
        //TODO: Implement me ...
        Product.find().then(entries => {
            res.render('product/index', {'entries': entries});
        });
	},
	createGet: (req, res) => {
        //TODO: Implement me ...
        res.render('product/create');
	},
	createPost: (req, res) => {
	//TODO: Implement me ...
        let product = req.body;

        Product.create(product).then(product => {
            res.redirect("/");
        }).catch(err => {
            product.error = 'Cannot create film.';
            res.render('product/create', product);
        });
	},
	editGet: (req, res) => {
        //TODO: Implement me ...
		let productId = req.params.id;

        Product.findById(productId).then(product => {
            if (product) {
                res.render('product/edit', product );
            }
            else {
                res.redirect('/');
            }
        }).catch(err => res.redirect('/'));

	},
	editPost: (req, res) => {
        //TODO: Implement me ...
        let productId = req.params.id;
        let product = req.body;

        Product.findByIdAndUpdate(productId, product, {runValidators: true}).then(product => {
            res.redirect("/");
        }).catch(err => {
            product.id = filmId;
            product.error = "Cannot edit film.";
            res.render("product/edit", product);
        });
	}
};