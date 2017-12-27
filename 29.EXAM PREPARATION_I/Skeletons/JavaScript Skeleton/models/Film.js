const mongoose = require('mongoose');

let filmSchema = mongoose.Schema({
    //TODO: Implement me ...
    /*
    The Film entity holds 5 properties:
•	id – technology-dependent identifier (ObjectID for JavaScript, int for all other technologies)
•	name – non-empty text
•	genre – non-empty text
•	director – non-empty text
•	year – non-null integer


    * title: {type: 'string', required: 'true'},
    comments: {type: 'string', required: 'true'},
     */
    name: {type: 'string', required: 'true'},
    genre: {type: 'string', required: 'true'},
    director: {type: 'string', required: 'true'},
    year: {type: 'number', required: 'true'}

});

let Film = mongoose.model('Film', filmSchema);

module.exports = Film;