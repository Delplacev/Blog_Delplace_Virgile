     <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            
            <div class="navbar-header ">
                <a class="navbar-brand" href="index.php"><h3>Blog de Virgile <small>Pour m'initier à PHP</small></h3></a>;
            </div>
            
            <!-- Page du site -->
            <div class="collapse navbar-collapse" >
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="index.php">Accueil</a>
                    </li>
                     <?php if($connect == true ){ ?>
                    <li class="page-scroll">
                        <a href="ajouterArticle.php">Rédiger un article</a>
                    </li>
                    <?php } ?>

                     <?php if($connect == false ){ ?>
                     <li class="page-scroll">
                        <a href="inscription.php">Inscription</a>
                    </li>
                    <li class="page-scroll">
                        <a href="connexion.php">Connexion</a>
                    </li>
                     <?php } else { ?>
                      <li class="page-scroll">
                        <a href="assets/include/action.php?action=deconnexion">Deconnexion</a>
                    </li>
                     <?php } ?>
                </ul>
            </div>
            <!-- Fin Page du site -->

           
        </div>
      
    </nav>
    <!-- Fin Navigation -->