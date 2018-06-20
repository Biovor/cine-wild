# cine-wild

Projet ciné-wild :

le projet a était fait avec Symfony 4 

Pour télécharger le projet faire un git clone : git@github.com:Biovor/cine-wild.git

Ensuite ouvrir le projet et faire un composer install.

Paramétré le fichier .env pour faire la connexion avec la base de données.

Création de la base de données avec doctrine :  php bin/console doctrine:database:create

Mettre à jour les entités de l’application avec la base : php bin/console make:migration

Validé et appliqué les modifications dans la BDD : php bin/console doctrine:migrations:migrate

Chargé les fixtures avec : php bin/console doctrine:fixtures:load

ATTENTION il peut y avoir une erreur l’or du chargement des fixtures il faut juste relancé la commande  ( car il génère des associations aléatoirement et il arrive parfois qu’il essaye d’associer deux fois la même valeur dans un des champs donc il bloque » 

Profités de l’application ( les visuels ne sont pas fini mais le principal des fonctionnalités et là ….) 

