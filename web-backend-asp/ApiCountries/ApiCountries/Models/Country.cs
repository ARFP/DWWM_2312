using System.ComponentModel.DataAnnotations.Schema;
using System.Text.Json.Serialization;

namespace ApiCountries.Models
{
    public class Country
    {

        public int CountryId { get; set; }

        public string CountryName { get; set; }

        [ForeignKey("Continent")]
        public int ContinentId { get; set; }

        [JsonIgnore]
        public Continent? Continent { get; set; }
    }
}
