using System.ComponentModel.DataAnnotations;

namespace LogNoziroh.Models
{
    public class Report
    {
        //TODO: Implement me ...
        /*
            •	id – technology-dependent identifier (ObjectID for JavaScript, int for all other technologies)
            •	status – non-empty text (will either be “Normal”, “Warning” or “Critical”).
            •	message – non-empty text
            •	origin – non-empty text
         */

        [Key]
        public int Id { get; set; }

        [Required]
        [MinLength(1)]
        public string Status { get; set; }

        [Required]
        [MinLength(1)]
        public string Message { get; set; }

        [Required]
        [MinLength(1)]
        public string Origin { get; set; }
    }
}