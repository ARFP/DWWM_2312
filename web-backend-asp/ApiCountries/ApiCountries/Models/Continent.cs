using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace ApiCountries.Models
{
    [Table("continent")]
    public class Continent
    {
        [Key]
        [Column("continent_id")]
        [DatabaseGenerated(DatabaseGeneratedOption.Identity)]
        public int Id { get; set; }

        [MaxLength(20, ErrorMessage = "Un continent doit contenir 20 caractères maximum")]
        [MinLength(2)]
        [Column("continent_name")]
        [Required]
        public string ContinentName { get; set; }

        public int ContinentArea { get; set; }

        // public ICollection<Country>? Countries { get; set; }

    }
}
