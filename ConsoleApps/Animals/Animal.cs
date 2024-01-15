
namespace Animals
{
    public class Animal
    {
        private string species;

        public Animal(string _species)
        {
            this.species = _species;
        }

        public void eat()
        {
            Console.WriteLine(this.species + " mange");
        }

        public void move()
        {
            Console.WriteLine("L'animal se déplace");
        }
    }
}
