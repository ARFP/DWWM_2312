// See https://aka.ms/new-console-template for more information
using System.Text;

Console.WriteLine("Suite de Fibonacci" + Environment.NewLine);

/// <summary>
/// Trouver l'occurence "n" dans la suite de Fibonacci.
/// </summary>
static int Fibonacci(int n)
{
    if (n < 2)
        return (n);
    return (Fibonacci(n - 1) + Fibonacci(n - 2));
}

/// <summary>
/// Afficher les X premiers termes de la suite de Fibonacci
/// </summary>
static string SuiteFibonacci(int n)
{
    string resultat = "";
    int i;

    for (i = 0; i < n; i++)
    {
        resultat += "\n" + Fibonacci(i);
    }

    return resultat;
}

/// <summary>
/// Version avec StringBuilder (plus rapide pour la gestion des chaines, mais plus verbeux)
/// </summary>
static string SuiteFibonacci_PlusRapide(int n)
{
    StringBuilder resultat = new StringBuilder("");
    int i;

    for (i = 0; i < n; i++)
    {
        resultat.Append("\n");
        resultat.Append(Fibonacci(i));
    }
    return resultat.ToString();
}

Console.WriteLine("Combien de nombre de la suite souhaitez vous afficher ?");
int n;
string saisie = Console.ReadLine();
int.TryParse(saisie, out n);
//string test = SuiteFibonacci(n);
string test = SuiteFibonacci_PlusRapide(n);
Console.WriteLine(test);
