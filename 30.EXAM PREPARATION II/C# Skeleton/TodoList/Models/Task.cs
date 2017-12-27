using System.ComponentModel.DataAnnotations;

namespace TodoList.Models
{
    public class Task
    {
        //TODO: Implement me...
        /*
         * The Task entity holds 3 properties:
            •	id – technology-dependent identifier (ObjectID for JavaScript, int for all other technologies)
            •	title – non-empty text
            •	comments – non-empty text
         */
        [Key]
        public int Id { get; set; }

        [Required]
        [MinLength(1)]
        public string Title { get; set; }

        [Required]
        [MinLength(1)]
        public string Comments { get; set; }
    }
}