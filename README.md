# Mon CV
========================

Ce CV est un projet réalisé dans le cadre d'un module Symfony suivi au Semestre 4 de mon DUT MMI.

![Haut du CV](/web/template/img/CV1.PNG)
![Bas du CV](/web/template/img/CV2.PNG)


## Symfony 4

Ce CV a été réalisé à l'aide du framework Symfony 4.

### Installation

* Mac OS X
* Ubuntu
* Windows 

### Pour commencer

*What does your user need to know to get everything ready after installation?*
*Think about databases, config files, and settings.*

IDE utilisé : Cloud9

Installation de Symfony 
*Pré-requis : PHP 5.4*

Installation de composer 
*Pré-requis : PHP 5.4*

Lien pour accéder à mon cv : [https://cv-symfony-emy10.c9users.io/web/app_dev.php/emy](https://cv-symfony-emy10.c9users.io/web/app_dev.php/emy)

## Ce que j'ai réalisé

* Voir mon CV avec une URL web : [https://cv-symfony-emy10.c9users.io/web/app_dev.php/emy](https://cv-symfony-emy10.c9users.io/web/app_dev.php/emy)
* Création de 3 entités (expérience, formation et loisirs) 
* CRUD pour les parties expérience, formation et loisirs de ma page
* Création de formulaires permettant d'ajouter et de modifier des informations de mes parties
* Sécurisation de ma page et possibilité d'ajout, modification et suppression de mes informations disponibles seulement pour le rôle ADMIN
* Informations saisies stockées dans la base de données SQL
* API du CV avec API Plateform : [https://cv-symfony-emy10.c9users.io/web/app_dev.php/api](https://cv-symfony-emy10.c9users.io/web/app_dev.php/api)
* Code documenté et qui respecte le standard Symfony de PHP_CodeSniffer (correction des erreurs avec PHP CS Fixer mais il en reste !!!)
* Tests unitaires et test fonctionnel réalisés 

## Commandes utiles 

*Générer une nouvelle entité : php bin/console doctrine:generate:entity*
*Pour ouvrir une interface web MySQL : mysql-ctl install* 
*Pour démarrer PHPMyAdmin : phpmyadmin-ctl install puis start*
*Pour synchroniser le schéma doctrine avec notre modèle : php bin/console doctrine:schema:create*
*Pour créer la base : php bin/console doctrine:database:create*
*Pour mettre à jour la table : php bin/console doctrine:schema:update(--force)*


## Ce que je n'ai pas fait 

* Traquer les visites avec FosUserBundle
* Avoir un fomulaire de contact fonctionnel

### Sources

[https://symfony.com/doc/3.4/setup.html](https://symfony.com/doc/3.4/setup.html)
[https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html](https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html)
[https://symfony.com/doc/3.4/doctrine.html](https://symfony.com/doc/3.4/doctrine.html)
[ https://symfony.com/doc/3.4/templating.html](https://symfony.com/doc/3.4/templating.html)
[ https://symfony.com/doc/3.4/security.html](https://symfony.com/doc/3.4/security.html)
[https://symfony.com/doc/3.4/email.html](https://symfony.com/doc/3.4/email.html)
[ https://symfony.com/doc/3.4/logging.html](https://symfony.com/doc/3.4/logging.html)
[https://symfony.com/doc/current/bundles/SensioGeneratorBundle/index.html](https://symfony.com/doc/current/bundles/SensioGeneratorBundle/index.html)
[https://symfony.com/doc/current/setup/built_in_web_server.html](https://symfony.com/doc/current/setup/built_in_web_server.html)
[https://symfony.com/doc/current/setup.html](https://symfony.com/doc/current/setup.html)

## Copyright and attribution

Copyright (c) 2016 DataMade. Released under the [MIT License](https://cv-symfony-emy10.c9users.io/web/app_dev.php/emy).




