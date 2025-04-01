using ApiCountries.Models;
using Microsoft.EntityFrameworkCore;
using System.Runtime.CompilerServices;

namespace ApiCountries.Db
{
    public class CountryDbContext : DbContext
    {
        public DbSet<Country> Countries { get; set; }


        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            optionsBuilder.UseSqlServer(@"Server=(localdb)\mssqllocaldb;Database=db_countries");
        }

    }
}
