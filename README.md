# Mon CV

Ce CV a été réalisé dans le cadre d'un module Symfony suivi au Semestre 4 de mon DUT MMI à l'IUT1 de Grenoble.

![Haut du CV](/web/template/img/CV1.PNG)
![Bas du CV](/web/template/img/CV2.PNG)

## Symfony 

Pour réaliser ce projet de CV, nous avons utilisé le framework Symfony 3.4.

### Installation possible sur :

* Mac OS X
* Ubuntu
* Windows 

### Pour commencer

IDE utilisé : Cloud9

Installation de Symfony    
*Pré-requis : PHP 5.4*

Installation de Composer    
*Pré-requis : PHP 5.4*

Base de données : MYSQL

Lien pour accéder à mon cv : [https://cv-symfony-emy10.c9users.io/web/app_dev.php/emy](https://cv-symfony-emy10.c9users.io/web/app_dev.php/emy)

Pour s'authentifier en tant qu'administrateur : 
* Nom d'utilisateur : admin
* Mot de passe : emy

## Mes réussites

* Voir mon CV à l'aide d'une URL web : [https://cv-symfony-emy10.c9users.io/web/app_dev.php/emy](https://cv-symfony-emy10.c9users.io/web/app_dev.php/emy)
* Intégration d'un template Bootstrap : [https://uicookies.com/downloads/myprofile-simple-html-resume-website-template/](https://uicookies.com/downloads/myprofile-simple-html-resume-website-template/)
* Création de 3 entités (expérience, formation et loisirs). 
* Être CRUD pour les parties expérience, formation et loisirs de ma page.
* Création de formulaires permettant d'ajouter et de modifier des informations dans les parties expérience, formation et loisirs de mon CV.
* Sécurisation de ma page et possibilité d'éditer des éléments si authentifié en tant qu'ADMIN.
* Stockage des informations saisies dans la base de données MySQL (utilisation de l'interface Doctrine qui permet de faire le lien entre nos objets et les éléments de la base de données).
* Production d'une API du CV avec API Plateform : [https://cv-symfony-emy10.c9users.io/web/app_dev.php/api](https://cv-symfony-emy10.c9users.io/web/app_dev.php/api)
* Code documenté et qui respecte le standard Symfony de PHP_CodeSniffer (correction des erreurs avec PHP CS Fixer mais il en reste !!!).
* Tests unitaires et test fonctionnel réalisés (avec Codeception).

## Commandes utiles 

*Générer une nouvelle entité : php bin/console doctrine:generate:entity*   
*Pour ouvrir une interface web MySQL : mysql-ctl install*    
*Pour démarrer PHPMyAdmin : phpmyadmin-ctl install puis start*   
*Pour synchroniser le schéma doctrine avec notre modèle : php bin/console doctrine:schema:create*   
*Pour créer la base : php bin/console doctrine:database:create*   
*Pour mettre à jour la table : php bin/console doctrine:schema:update(--force)*   

## Mes échecs 

* Traquer les visites avec FosUserBundle (trop compliqué).
* Avoir un formulaire de contact fonctionnel.


### Mon avis 

Ce projet de réalisation de notre CV avec Symfony était très intéressant et utile car nous pourrons le transmettre à des entreprises ou même le montrer dans le cadre d'entretiens de motivation pour nos poursuites d'études.   
De plus, nous avons pu découvrir les bases du framework, qui sont assez exceptionnelles et épatantes (beaucoup de composants sont fournis) même si nous avons eu peu de séances.
A refaire l'année prochaine !!

### Sources utilisées

[https://github.com/AizeLeOuf/myawesomecv](https://github.com/AizeLeOuf/myawesomecv)
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

### Copyright and attribution

Copyright (c) 2016 DataMade. Released under the [MIT License](https://cv-symfony-emy10.c9users.io/web/app_dev.php/emy).




