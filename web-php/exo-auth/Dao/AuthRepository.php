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

        /** @var PDO $db connexion à la base de données */
        $db = Dbconnect::getInstance();


        /** @var PDOStatement $stmt initialisation de la requête préparée */
        $stmt = $db->prepare("SELECT * FROM tbl_users WHERE username=:username");

        // exécution de la requêtes préparée
        // execute() retourne true si la requête a été exécutée avec succés, sinon false
        if($stmt->execute([':username' => $username])) {
            // récupération de l'utilisateur
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if($user === false) { // Si l'utilisateur n'a pas été trouvé
                $user = [];
            }
            else if(!password_verify($password, $user['password'])) { // Si le mot de passe est incorrect
                $user = [];
            }
        }
    
        // fermeture de la requête (pour libérer les ressources)
        $stmt->closeCursor();

        // Retourne l'utilisateur trouvé (ou un tableau vide si l'utilisateur n'a pas été trouvé)
        return $user;
    }
}