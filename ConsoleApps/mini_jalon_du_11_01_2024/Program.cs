// See https://aka.ms/new-console-template for more information
Console.WriteLine("Mon tableau d'entiers");
/*
Afficher la moyenne des valeurs d'un tableau d'entiers
Afficher la valeur maximale dans le tableau élevée au carré
*/

/********** VARIABLES **********/

int[] valeurs = { 2, 4, 1, 8, 6, 14, 23, 25, 7, 42 }; // Le tableau de valeurs
double sommeValeurs = 0;    // La sommes des vlauers du tableau (pour calculer la moyenne)
double moyenneValeurs;      // La moyenne des valeurs du tableau
double maxNbre;             // La valeur MAX dans le tableau
int i;                      // Sert pour l'incrémentation dans la boucle for



/********** TRAITEMENT **********/

// Calcul de la somme des valeurs du tableau
for ( i = 0 ; i < valeurs.Length ; i++ )
{
    sommeValeurs = sommeValeurs + valeurs[i];
   
    //sommeValeurs += valeurs[i];     // autre maniere pour additionner
}

// Calcul de la moyenne
moyenneValeurs = sommeValeurs / valeurs.Length;

// Récupération de la valeur la plus élevée dans le tableau
maxNbre = valeurs.Max();

// Élévation de la valeur MAX au carré
maxNbre = Math.Pow(maxNbre,2);



/********** AFFICHAGE **********/

Console.WriteLine("La moyenne des valeurs du tableau est: "
    + moyenneValeurs + ".");
Console.WriteLine("Le carré du nombre maximum du tableau est: "
    + maxNbre + ".");  

