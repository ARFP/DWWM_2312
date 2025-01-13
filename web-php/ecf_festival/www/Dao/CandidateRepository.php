<?php 

require_once 'DbConnect.php';

/**
 * gestion des candidats
 * @method searchAll(): array : récupère tous les candidats
 * @method createCandidate(array $data): void : crée un candidat
 * @method searchByAge(int $_age): array : récupère les candidats par age
 * @method signIn(string $mail_user, string $pass_user): bool : Identifie un candidat
 */
class CandidateRepository 
{

    public function searchAll(): array 
    {

    }

    public function createCandidate(array $data): void 
    {

    }

    public function searchByAge(int $_age): array 
    {

    }

    public function signIn(string $mail_user, string $pass_user): bool 
    {

    }
}
