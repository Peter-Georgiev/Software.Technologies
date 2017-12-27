const Task = require('../models/Task');

module.exports = {
	index: (req, res) => {
        // TODO: Implement me...
        Task.find().then(tasks => {
            let openTasks = [];
            let inProgressTasks =[];
            let finishedTasks = [];

            for (let i = 0; i < tasks.length; i++) {
            	let currentTask = tasks[i];

            	if (currentTask.status === 'Open') {
            		openTasks.push(currentTask);
				} else if (currentTask.status === 'In Progress') {
                    inProgressTasks.push(currentTask);
				} else if (currentTask.status === 'Finished') {
                    finishedTasks.push(currentTask);
				}
			}

            return res.render('task/index', {
                'openTasks': openTasks,
                'inProgressTasks': inProgressTasks,
				'finishedTasks': finishedTasks,
            });
        });
	},
	createGet: (req, res) => {
		// TODO: Implement me...
        res.render('task/create');

	},
	createPost: (req, res) => {
		// TODO: Implement me...
        let task = req.body;
        Task.create(task).then(task => {
            res.redirect("/");
        });
	},
	editGet: (req, res) => {
		// TODO: Implement me...
		let taskId = req.params.id;
		Task.findById(taskId).then(task => {
			return res.render('task/edit', task)
		});
	},
	editPost: (req, res) => {
		// TODO: Implement me...
		let taskId = req.params.id;
		let task = req.body;

		Task.findByIdAndUpdate(taskId, task).then(task => {
			return res.redirect('/');
		});
	}
};