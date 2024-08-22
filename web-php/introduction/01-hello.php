<?php

function helloWorld(): void {
    echo "Hello World !";
}

helloWorld();

function hello(string $name): string {
    return "Hello $name";
}

$resultat = hello("Mike");
echo $resultat;

echo hello("Toto");
