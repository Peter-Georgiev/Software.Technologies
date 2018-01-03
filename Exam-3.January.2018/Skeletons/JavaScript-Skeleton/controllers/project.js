const Project = require('../models/Project');

module.exports = {
    index: (req, res) => {
        //TODO: Implement me ...
        Project.find().then(projects => {
            return res.render('project/index', {'projects': projects});
        }).catch(err => {
            return res.send("error");
        });
    },
    createGet: (req, res) => {
        //TODO: Implement me ...
        res.render('project/create');
    },
    createPost: (req, res) => {
        //TODO: Implement me ...
        let project = req.body;
        Project.create(project).then(project => {
            res.redirect("/");
        }).catch(err => {
            res.render('project/create');
        });
    },
    editGet: (req, res) => {
        //TODO: Implement me ...
        let id = req.params.id;
        Project.findById(id).then(project => {
            if (project) {
                res.render('project/edit', project );
            }
            else {
                res.redirect('/');
            }
        }).catch(err => res.redirect('/'));
    },
    editPost: (req, res) => {
        //TODO: Implement me ...
        let id = req.params.id;
        let project = req.body;

        Project.findByIdAndUpdate(id, project, {runValidators: true}).then(project => {
            res.redirect("/");
        }).catch(err => {
            return res.render("project/edit");
        });
    },
    deleteGet: (req, res) => {
        //TODO: Implement me ...
        let id = req.params.id;
        Project.findById(id).then(project => {
            if (project) {
                return res.render('project/delete', project);
            }
            else {
                return res.redirect('/');
            }
        }).catch(err => res.redirect('/'));
    },
    deletePost: (req, res) => {
        //TODO: Implement me ...
        let id = req.params.id;
        Project.findByIdAndRemove(id).then(project => {
            res.redirect('/');
        }).catch(err => res.redirect('/'));
    }
};