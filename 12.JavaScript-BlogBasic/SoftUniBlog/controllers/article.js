const Article = require('mongoose').model('Article');

module.exports = {
    createGet : (req, res) => {
        //console.log(res);
        res.render('article/create');
    },

    createPost: (req, res) => {
        console.log(req.body);

        let atrticleArgs = req.body;
        let errorMag = '';

        if (!req.isAuthenticated()){
            errorMag = 'You should be logged in to make articles!';
        } else if (!atrticleArgs.title){
            errorMag = 'Invalid title';
        } else if (!atrticleArgs.content) {
            errorMag = 'Invalid content';
        }

        if (errorMag){
            res.render('article/create', {error: errorMag});
            return;
        }

        atrticleArgs.author = req.user.id;
        Article.create(atrticleArgs).then(article => {
            req.user.articles.push(article.id);
            req.user.save(err => {
                if (err){
                    res.redirect('/', {error: err.message});
                } else {
                    res.redirect('/');
                }
            });
        });
    },

    details: (req, res) => {
        let id = req.params.id;
        //console.log(id);

        Article.findById(id).populate('author').then(article => {
            res.render('article/details', article)
        });
    }
};