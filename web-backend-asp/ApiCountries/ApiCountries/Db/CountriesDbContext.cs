using ApiCountries.Models;
using Microsoft.EntityFrameworkCore;

namespace ApiCountries.Db
{
    public class CountriesDbContext : DbContext
    {
        public DbSet<Continent> Continents { get; set; }
        public DbSet<Country> Countries { get; set; }

        protected override void OnConfiguring(DbContextOptionsBuilder options)
        {
            options.UseSqlServer(@"Server=(localdb)\mssqllocaldb;Database=db_countries_2312");
            //options.UseSqlServer(@"Data Source=(localdb)\mssqllocaldb;Port=3309;Initial Catalog=nom_DB;Username=toto;Password=tata");
        }
    }
}
