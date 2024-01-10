// See https://aka.ms/new-console-template for more information
Console.WriteLine("Hello, World!");


static List<int> TrouverLesdiviseurs(int nombre)
{

    List<int> resultat = new();

    for (int i = 2; i < nombre; i++)
    {
        if (nombre % i == 0)
        {
            resultat.Add(i);
        }
    }

    return resultat;
}

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
