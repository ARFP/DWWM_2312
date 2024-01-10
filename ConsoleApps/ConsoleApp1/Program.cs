// See https://aka.ms/new-console-template for more information
Console.WriteLine("Hello, World!");


// 1. Demander à l'utilisateur d'entrer un nombre positif
// 2. Si le nombre entré est négatif, recommencer l'étape 1.
static void SaisirNombre()
{
    int nombre;
    string saisie;

    do
    {
        Console.Write("entrer un nombre positif");

        saisie = Console.ReadLine();

        int.TryParse(saisie, out nombre);

    } while (nombre < 0);

    Console.Write(nombre);
}

// 1. Demander à l'utilisateur d'entrer un nombre positif
// 2. Si le nombre entré est négatif, recommencer l'étape 1.
void SaisirNombreRecursif()
{
    string saisie;
    int nombre;
    Console.Write("entrer un nombre positif");

    saisie = Console.ReadLine();

    int.TryParse(saisie, out nombre);

    if(nombre < 0) {
        SaisirNombreRecursif();
    }

    Console.Write(nombre);
}
