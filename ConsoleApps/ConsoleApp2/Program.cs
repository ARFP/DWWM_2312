Console.WriteLine("Trouver les diviseurs");

/// <summary>
/// Calcule et retourne la liste les diviseurs d'un nombre entier
/// </summary>
static List<int> TrouverLesdiviseurs(int nombre)
{
    List<int> resultat = new(); // Pour le stockage du résultat

    for (int i = 2; i < nombre; i++)
    {
        if (nombre % i == 0)
        {
            resultat.Add(i);
        }
    }

    return resultat;
}

/// <summary>
/// Calcule et retourne la liste les diviseurs d'un nombre entier (récursif)
/// </summary>
static List<int> TrouverDiviseursRecursif(int nombre, int i, List<int> resultat)
{
    if (nombre % i == 0)
    {
        resultat.Add(i);
    }

    if (i < nombre)
    {
        TrouverDiviseursRecursif(nombre, ++i, resultat);
    }

    return resultat;
}


string saisie; // saisie utilisateur 
bool ok;        // la saisie est-elle un nombre entier ?
int nombre;
List<int> resultat = new();
string affichageResultat;

do
{
    Console.WriteLine("Entrer un nombre entier");
    saisie = Console.ReadLine();
    ok = int.TryParse(saisie, out nombre);
} while (!ok);

resultat = TrouverDiviseursRecursif(nombre, 1, resultat);
affichageResultat = string.Join(", ", resultat);

Console.WriteLine("Les diviseurs du nombre " + nombre + " sont: " + affichageResultat);
