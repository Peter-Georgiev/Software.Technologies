using System.ComponentModel.DataAnnotations;
using System.Web.Mvc;

namespace IMDB.Models
{
    public class Film
    {
        /* The Film entity holds 5 properties:
            •	id – technology-dependent identifier (ObjectID for JavaScript, int for all other technologies)
            •	name – non-empty text
            •	genre – non-empty text
            •	director – non-empty text
            •	year – non-null integer 

         */

        [Key]
        public int Id { get; set; }

        [Required] //not null
        [MinLength(1)]  //non-empty string
        public string Name { get; set; }

        [Required]
        [MinLength(1)]
        public string Genre { get; set; }

        [Required]
        [MinLength(1)]
        public string Director { get; set; }

        [Range(1000, 3000)]
        public int Year { get; set; }
    }
}