using System.ComponentModel.DataAnnotations;

namespace ProjectRider.Models
{
    public class Project
    {
        //TODO: Implement me ...
        /*
        •	id – technology-dependent identifier (ObjectID for JavaScript, int for all other technologies)
        •	title – non-empty text
        •	description – non-empty text
        •	budget – a 64-bit integer
        */

        [Key]
        public int Id { get; set; }

        [Required]
        [MinLength(1)]
        public string Title { get; set; }

        [Required]
        [MinLength(1)]
        public string Description { get; set; }   
   
        public long Budget { get; set; }

    }
}