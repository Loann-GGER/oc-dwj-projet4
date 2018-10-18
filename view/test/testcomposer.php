<?php 

require "vendor/autoload.php";

// option + Maj + / pour antislash 
use\Michelf\Markdown;

echo Markdown::defaultTransform("## Echo avec la commande du packages : ");
echo Markdown::defaultTransform("Salut tous le monde, j'essai le **markdown**");
echo Markdown::defaultTransform("## Echo sans la commande du packages : ");
echo ("Salut tous le monde, j'essai le **markdown**");