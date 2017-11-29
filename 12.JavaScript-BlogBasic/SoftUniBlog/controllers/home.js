const Article = require('mongoose').model('Article');

module.exports = {
  index: (req, res) => {
      Article.find({}).sort('-data').limit(6).populate('author').then(articles => {
          res.render('home/index', {articles: articles})
      });
  }
};