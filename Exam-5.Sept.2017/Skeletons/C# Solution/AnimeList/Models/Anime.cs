using System.ComponentModel.DataAnnotations;
using System.Web.Mvc;

namespace AnimeList.Models
{
    public class Anime
    {
        //TODO: Implement me ...
        /*
        •	id – technology-dependent identifier (ObjectID for JavaScript, int for all other technologies)
        •	rating – non-null integer
        •	name – non-empty text
        •	description – non-empty text
        •	watched – non-empty text (will either be “watched” or “not watched”).
        */
        [Key]
        public int Id { get; set; }

        public int Rating { get; set; }

        [Required]
        [MinLength(1)]
        public string Name { get; set; }

        [Required]
        [MinLength(1)]
        public string Description { get; set; }

        [Required]
        [MinLength(1)]
        public string Watched { get; set; }
                
    }
}