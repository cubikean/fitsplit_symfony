Commande
========

re-installation
--------------
composer update
# après modification du .env pour la BDD
# creation de la BDD
php bin/console doctrine:database:create
# creation des fichiers SQL
php bin/console make:migration
# appliquer les modification à la BDD
php bin/console doctrine:migrations:migrate

# chargement du jeu de données (si besoin)
php bin/console doctrine:fixtures:load

Demarrage du serveur
--------------------
# démarrage du serveur sans se préoccuper du certificat
symfony server:start --no-tls
# arreter les serveurs
symfony server:stop

CHOISIR VERSION PHP
-------------------
 echo 7.4.9 > .php-version

installer ckeditor
------------------
composer require friendsofsymfony/ckeditor-bundle
php bin/console ckeditor:install
php bin/console assets:install public

Symfony maker
-------------
php bin/console make:entity
php bin/console make:form
php bin/console make:controller

Installation Webpack encore
---------------------------

composer require symfony/webpack-encore-bundle

yarn install 

Symfony UX
-*-*-*-*-*-

si nous voulons utiliser Smfony UX, il faut déjà installer Webpack encore

composer require symfony/ux-chartjs

yarn install --force

yarn encore dev

