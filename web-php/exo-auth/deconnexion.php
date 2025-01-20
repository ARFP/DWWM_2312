<?php 
// Initialisation de la session
session_start();

// destruction de la session initialisée
session_destroy();

// Rédirige vers le formulaire d'identification
header('location: profil.php');
