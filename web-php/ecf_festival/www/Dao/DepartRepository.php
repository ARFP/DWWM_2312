<?php 

require_once 'DbConnect.php';

/**
 * Gestion des départements
 * @method searchAll(): array : récupère tous les départements
 */
class DepartRepository 
{
    public function searchAll(): array 
    {
        /** @var PDO $db */
        $db = DbConnect::getInstance();

        $sql = "SELECT `id_dep`, `Name` FROM `departements`;";

        /** @var PDOStatement $stmt */
        $stmt = $db->query($sql);

        /** @var array $result */
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
