<?php 

foreach(['azer1234', 'baba0123!', 'my:PasswOrd'] as $password) {

    $h = password_hash($password, PASSWORD_ARGON2ID);

    echo $password. ': ' . $h;
    echo "\n";
    echo mb_strlen($h);
    echo "\n\n---\n\n";
}
