<?php 

$toto = 'Du texte avec une balise <script src="http://mon.script.com/monvirus.js"></script>';

echo '<p>Toto avant Strip tags : ' . $toto . '</p>'."\n\n";


$toto = htmlspecialchars($toto);

echo '<p>Toto après Strip tags : ' . $toto . '</p>';
