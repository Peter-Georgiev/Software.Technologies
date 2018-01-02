const mongoose = require('mongoose');

let animeSchema = mongoose.Schema({
    //TODO: Implement me ...
    /*
        •	id – technology-dependent identifier (ObjectID for JavaScript, int for all other technologies)
        •	rating – non-null integer
        •	name – non-empty text
        •	description – non-empty text
        •	watched – non-empty text (will either be “watched” or “not watched”).
     */

    rating: {type: 'number', required: 'true'},
    name: {type: 'string', required: 'true'},
    description: {type: 'string', required: 'true'},
    watched: {type: 'string', required: 'true'},
});

let Anime = mongoose.model('Anime', animeSchema);

module.exports = Anime;