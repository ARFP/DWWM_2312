<?php 

/**
 * Classe de connexion à la base de données
 * @pattern Singleton
 */
class DbConnect 
{
    /**
     * Constructeur privé (impossible d'instancier cette classe directement)
     */
    private function __construct() {}

    /**
     * @var PDO $instance
     */
    private static ?PDO $instance = null;


    /**
     * Créer l'instance unique PDO
     * @return PDO|null l'instance créée
     */
    public static function getInstance(): PDO
    {
        // Si l'instance n'existe pas
        if(self::$instance === null) {

            // chargement de la configuration
            require 'dbconfig.php'; 

            // Création de l'instance PDO
            self::$instance = new PDO(
                $config['dsn'], 
                $config['db_user'],
                $config['db_pass'], 
                []);
        }

        // Retourne l'instance PDO
        return self::$instance;
    }

}
