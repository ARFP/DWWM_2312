<?php 

$to = 'toto@devoldere.net';
$subject = 'Objet du message';
$message = '<div>Salut, voici mon email</div><img src="toto.php?email=toto@devoldere.net" width=0 height=0 />"';

if(mail($to, $subject, $message)) {
    echo "email envoyé";
} else {
    echo 'email non envoyé';
}

