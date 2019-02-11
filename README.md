# OC - DWJ - Projet_4
Projet 4 - Création d'un blog pour un écrivain (Jean Forteroche)

## Legend of commits
* :art: CSS modifications, styling, design
* :wrench: Fixes
* :heavy_plus_sign: Add
* :heavy_minus_sign: Delete
* :arrow_up: Upgrade
* :arrow_down: Downgrade
* :iphone: Responsive
* :memo: Text modification
* :pencil2: Spellchecking
* :recycle: Organization

## Requirement
* PHP ≥ 7.1

## Installation
* Clone : 
```bash
git clone https://github.com/Loann-GGER/oc-dwj-projet4.git
```
* Composer :
``` bash
composer install
```

## Vendor
* [Twig](https://twig.symfony.com/doc/2.x/tags/if.html)
* [Doctrine](https://packagist.org/packages/composer/composer)
* [TinyMce](https://www.tiny.cloud/)
* [Font Awesome](https://fontawesome.com/)


## Sujet de projet

Vous venez de décrocher un contrat avec Jean Forteroche, acteur et écrivain. Il travaille actuellement sur son prochain roman, "Billet simple pour l'Alaska". Il souhaite innover et le publier par épisode en ligne sur son propre site.

Seul problème : Jean n'aime pas WordPress et souhaite avoir son propre outil de blog, offrant des fonctionnalités plus simples. Vous allez donc devoir développer un moteur de blog en PHP et MySQL.

Vous développerez une application de blog simple en PHP et avec une base de données MySQL. Elle doit fournir une interface frontend (lecture des billets) et une interface backend (administration des billets pour l'écriture). On doit y retrouver tous les éléments d'un CRUD :

    Create : création de billets
    Read : lecture de billets
    Update : mise à jour de billets
    Delete : suppression de billets

Chaque billet doit permettre l'ajout de commentaires, qui pourront être modérés dans l'interface d'administration au besoin.
Les lecteurs doivent pouvoir "signaler" les commentaires pour que ceux-ci remontent plus facilement dans l'interface d'administration pour être modérés.

L'interface d'administration sera protégée par mot de passe. La rédaction de billets se fera dans une interface WYSIWYG basée sur TinyMCE, pour que Jean n'ait pas besoin de rédiger son histoire en HTML (on comprend qu'il n'ait pas très envie !).

Vous développerez en PHP sans utiliser de framework pour vous familiariser avec les concepts de base de la programmation. Le code sera construit sur une architecture MVC. Vous développerez autant que possible en orienté objet (au minimum, le modèle doit être construit sous forme d'objet).
