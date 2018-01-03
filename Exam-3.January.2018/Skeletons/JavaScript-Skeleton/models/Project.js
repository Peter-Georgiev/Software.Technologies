const mongoose = require('mongoose');

let projectSchema = mongoose.Schema({
    //TODO: Implement me ...
    /*
    •	id – technology-dependent identifier (ObjectID for JavaScript, int for all other technologies)
    •	title – non-empty text
    •	description – non-empty text
    •	budget – a 64-bit integer
     */
    title: {type: 'string', required: 'true'},
    description: {type: 'string', required: 'true'},
    budget: {type: 'number', required: 'true'},
});

let Project = mongoose.model('Project', projectSchema);

module.exports = Project;