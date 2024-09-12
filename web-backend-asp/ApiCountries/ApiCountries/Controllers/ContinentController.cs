using ApiCountries.Db;
using ApiCountries.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;

namespace ApiCountries.Controllers
{
    [ApiController]
    [Route("api/[controller]")]
    public class ContinentController : ControllerBase 
    {
        private readonly CountriesDbContext ctx;


        public ContinentController(CountriesDbContext _ctx)
        {
            this.ctx = _ctx;
        }

        // GET /api/continents
        [HttpGet]
        public async Task<ActionResult<IEnumerable<Continent>>> GetContinents()
        {
            if(ctx.Continents == null)
            {
                return NoContent();
            }

            List<Continent> continents = await ctx.Continents.ToListAsync();

            return continents;
        }

        // GET /api/continents/5
        [HttpGet("{id:int}")]
        public async Task<ActionResult<Continent>> GetContinent(int id)
        {
            if (ctx.Continents == null)
            {
                return NoContent();
            }

            Continent? continent = await ctx.Continents.FirstOrDefaultAsync(c => id == c.Id);

            if(continent == null)
            {
                return NotFound();
            }

            return continent;
        }

        // POST /api/continents/
        [HttpPost]
        public async Task<ActionResult<Continent>> PostContinent(Continent continent)
        {
            if (ctx.Continents == null)
            {
                return NoContent();
            }

            /*if(ctx.Continents.FirstOrDefault(c => continent.Id == c.Id) != null)
            {
                return Conflict();
            }*/

            try
            {
                await ctx.Continents.AddAsync(continent);
                await ctx.SaveChangesAsync();
            }
            catch(Exception ex)
            {
                string errorMessage = ex.InnerException != null ? ex.InnerException.Message : ex.Message;

                return BadRequest(new { error = errorMessage, code =  400 });
            }

            return continent;
        }

        // PUT /api/continents/5
        [HttpPut("{id:int}")]
        public async Task<ActionResult<Continent>> PutContinent(int id, Continent continent)
        {
            if(id != continent.Id)
            {
                return BadRequest(new { error = "Identifiant incorrect !" });
            }

            /*Continent? c = ctx.Continents.FirstOrDefault(a => a.Id == continent.Id);
                if(c != null) {
                    c.ContinentName = continent.ContinentName;
                    c.ContinentArea = continent.ContinentArea; 
                } else {
                    return BadRequest();
                }
            */

            // indique à EntityFramework que l'entité a été modifiée
            ctx.Entry(continent).State = EntityState.Modified;

            try
            {
                await ctx.SaveChangesAsync();

                return continent;
            }
            catch(Exception ex)
            {
                string errorMessage = ex.InnerException != null ? ex.InnerException.Message : ex.Message;

                return BadRequest(new { error = errorMessage });
            }

        }

        [HttpDelete("{id:int}")]
        public async Task<IActionResult> DeleteContinent(int id)
        {
            Continent? c = ctx.Continents.FirstOrDefault(a => a.Id == id);

            if(c == null)
            {
                return NotFound();
            }

            ctx.Continents.Remove(c);
            await ctx.SaveChangesAsync();

            return NoContent();
        }

        // POST /api/continents/truites
        [HttpPost("truites", Name = "")]
        [ProducesResponseType(StatusCodes.Status201Created)]
        [ProducesResponseType(StatusCodes.Status400BadRequest)]
        public async Task<ActionResult<IEnumerable<Continent>>> PostContinents(IEnumerable<Continent> continents)
        {
            try
            {
                await ctx.Continents.AddRangeAsync(continents);
                await ctx.SaveChangesAsync();
                return continents.ToList();

            } catch(Exception ex)
            {
                string errorMessage = ex.InnerException != null ? ex.InnerException.Message : ex.Message;

                return BadRequest(new { error = errorMessage, code = 400 });
            }
        }

    }
}
