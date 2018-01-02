const mongoose = require('mongoose');

let reportSchema = mongoose.Schema({
    //TODO: Implement me ...
    /*
    •	id – technology-dependent identifier (ObjectID for JavaScript, int for all other technologies)
    •	status – non-empty text (will either be “Normal”, “Warning” or “Critical”).
    •	message – non-empty text
    •	origin – non-empty text
     */
    status: {type: 'string', required: 'true'},
    message: {type: 'string', required: 'true'},
    origin: {type: 'string', required: 'true'},
});

let Report = mongoose.model('Report', reportSchema);

module.exports = Report;