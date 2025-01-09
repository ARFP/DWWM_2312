<?php
class Contribuable
{
    //attributs
    private string $nom;
    private string $prenom;
    private float $revenu;


    // constante static (même valeur pour tous les objets)
    const taux1 = 0.09;
    const taux2 = 0.14;
    // propriétés ( accesseurs/ modifieurs)


    public function getRevenu(): float
    {

        return $this->revenu;
    }
    public function setRevenu(float $_new_revenu): void
    {
        $this->revenu = round($_new_revenu, 2);
    }

    //constructeur 
    public function __construct(string $_nom, string $_prenom, float $_revenu)
    {

        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->revenu = round($_revenu, 2);
    }
    //methodes (fonctions ou procédures)

    public function calculImpot(): float
    {
        $impot = 0;
        if ($this->revenu <= 15000) {

            $impot = $this->revenu * $this::taux1;
            $impot = round($impot, 2);
        } else {

            $impot = (15000 * self::taux1) + ($this->revenu - 15000) * self::taux2;
            $impot = round($impot, 2);
        }
        return $impot;
    }
}
