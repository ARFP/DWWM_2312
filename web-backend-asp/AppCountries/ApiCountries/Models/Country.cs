using System.ComponentModel.DataAnnotations;

namespace ApiCountries.Models
{
    public class Country
    {
        public int Id { get; set; }

        [Required]
        public string CountryCode { get; set; }

        [Required]
        public string CountryName { get; set; }

    }
}
