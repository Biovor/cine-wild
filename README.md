TEST D'ADMISSION A LA WILD CODE SCHOOL DE PARIS ALTERNANCE DÉVELOPPEMENT JS 

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

ATTENTION il peut y avoir une erreur lors du chargement des fixtures il faut juste relancé la commande  ( car il génère des associations aléatoirement et il arrive parfois qu’il essaye d’associer deux fois la même valeur dans un des champs donc il bloque » 

Profités de l’application ( les visuels ne sont pas fini mais le principal des fonctionnalités et là ….) 



SUJET DU TEST :



Hi dude, for this exercise, you’ll have to create an entire project about watching movies, like
the well known Allociné!

The website you have to create should include the main features that are very
useful for moviegoers :D

1/ Main instructions

You have to create a website that proposes some functionalities, such as adding movies,
listing them, deleting them, selecting only one using criteria (type, language...), searching a
specific movie, not only with his own name, and listing random films on the home page.

We’ll evaluate your ability to create and manage features that are not listed above. These
must be relevant for your website. You can get inspiration on popular movies websites just
like Allociné or Imdb.

In this exercise you can use the technology you want and/or that you are used to handle.

2/ Indications

The correction will not only focus on features, so think about your project design
before developing your website. The main points that we will check : relationship
between entities (if that is necessary), structure and design, the quality of research,
ergonomics, user interaction and so on.

Your code must :

• be clean,

• use JS, PHP, or another language standards,

• have clear variable names

• be commented.

The project must be functional. Get to the essential points right away.

To submit your result, create a new repository with your GitHub
profile, and push your work in it.

Think about making atomic commits, and also write a readme,
which will help us to initialize your project.

To conclude, regarding HTML templates, here is an example of expected visual rendering.
This example should be an inspiration, this is not a mandatory model to follow.
A result as below is enough (instead of recipes, we will get movies!).
