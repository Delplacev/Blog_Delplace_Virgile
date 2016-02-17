Bonjour, ceci est le blog développer par Delplace Virgile.

Arborescence et expication de chaque fichier :

/assets
    /css
        * bootstrap.css 
        * freelancer.css : theme bootstrap personnaliser à mon gout pour le blog
    /images
        DOSSIER CONTENANT LES IMAGES
    /include
        * action.php : Ce fichier contient une classe qui regroupe différentes actions du site,
                       au départ j'avais mis toutes les actions ( ajout, édition, suppression etc)
                       mis je me suis rendu compte que n'importe qui aurait plus appelle l'URL pour 
                       l'ajout et donc ajouter un article sans être connecté au site, j'aurai plus mis 
                       en place un système d'autofinançable ce service web mais comme j'avais peu de temps
                       j'ai donc decider de men tenir à vos consignes et de mettre le codage des actions 
                       dans chaque fichier correspondant. 
                       J'ai donc gardé la connexion et l'inscription dans ce fichier.
        * footer.php : Contient le pied de page du site
        * header.php : Contient l'entête du site
        * menu.php : Contient le menu du site
        * setCookie.php : Ajout des cookies 
        * uploadImage.php : Scirpt pour upload une image sur le serveur
        * vignettjpg.php : Script qui renvoie une image plus petite en taille donc moins de temps de chargement   
    /js
    /protected
        * .htaccess : .htaccess qui protee le fichier connect bdd ( pour eviter que que les identifiant soit visible ) 
        * connectBdd.php : fichier de connection à la base
* README.txt
* ajouterArticle.php : Page d'ajout d'un article avec le script SQL qui correspond
* connexion.php : Page de connection au blog
* editerArticle.php : Page d'édition d'un article avec le script SQL qui correspond
* index.php
* inscription.php : Page d'inscription au blog

Les fonctionnalités du site :
On arrive tout d'abord sur la page d'accueil qui liste tous les articles présents 
sur la base de données, une barre de recherche est disponible dans le menu, cette 
recherche s'effectue grâce à des mots clés. Quand on va alors cliquer que la loupe 
ça va recharger la page index.php mais cette fois avec des données en POST. 
Ensuite sur le site il est possible de s'inscrire, ensuite de se connecter. Grâce à cette 
connexion l'utilisateur va pouvoir Ajouter / Éditer ou supprimer des articles.
Les images en lien avec les articles sont affiché à une taille définie, Comment ? lors de 
l'affichage j'appelle le fichier "vignettejpg.php" qui renvoie une image moins lourde et de taille definie pour 
ensuite l'afficher sur la page d'accueil. Un script d'upload permet d'ajouter des images sur le serveur.

Le projet à était developper avec sublime text. En lien avec une base MySql.
J'ai utiliser les identifiant root pour acceder à la base de données.