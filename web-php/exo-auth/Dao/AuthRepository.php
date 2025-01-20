<?php 
/* /Dao/AuthRepository.php */ 

// inclusion de la classe DbConnect qui sera utilisée dans la méthode signIn()
require_once 'Dbconnect.php';

class AuthRepository 
{
    /**
     * Identifie un utilisateur
     * @param string $username le nom d'utilisateur renseigné dans le formulaire
     * @param string $password le mot de passe renseigné dans le formulaire
     * @return array l'utilisateur trouvé (ou un tableau vide si l'utilisateur n'a pas été trouvé)
    */
    public static function signIn(string $username, string $password): array {
        // Récupérer la connexion à la base de données
        /** @var PDO $pdo */
        $pdo = Dbconnect::getInstance();
        // Cherche dans la base de données, l'utilisareur correspondant au nom d'utilisateur fourni

        $sql = "SELECT `id`, `username`, `password` FROM tbl_users WHERE username=:username";

        /** @var PDOStatement $stmt */
        $stmt = $pdo->prepare($sql);

        // Si la requête a réussi
        if($stmt->execute([':username' => $username])) {
            // récupérer les données du jeu de résultat
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // si $result est vide, l'utilisateur n'a pas été trouvé
            if(empty($result)) {
                return []; // on retourne un tableau vide
            }

            // A partir de ce point, on a la garantie que $result contient les données d'un utilisateur

            // Si le mot de passe est correct, on retourne le tableau $result
            // sinon on retourne un tableau vide
            if(password_verify($password, $result['password'])) {
                // mot de passe correct, on retourne le tableau contenant les données de l'utilisateur
                return $result;
            } else { 
                // mot de passe incorrect, on retourne un tableau vide
                return [];
            }

        } else {
            throw new Exception("Erreur SQL");
        }

        return $result;


    }

    /**
     * Retourne tous les utilisateurs trouvés en base de données
     * @return array Le tableau contenant les utilisateurs trouvés en base de données
     */
    public static function getAllUsers(): array {
        $pdo = DbConnect::getInstance();

        $sql = "SELECT `id`, `username` FROM tbl_users ORDER BY id ASC";

        $stmt = $pdo->query($sql);

        // Si la requête a échoué
        if($stmt === false) {
            throw new Exception("Erreur SQL !");
        }

        // Récupère le jeu de résultat de la requête
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * Ajoute un nouvel utilisateur dans la base de données
     * @param string $username le nom d'utilisateur
     * @param string $password le mot de passe de l'utilisateur
     */
    public static function addUser(string $username, string $password): bool {

    } 
}