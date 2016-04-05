     <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
     

            <div class="col-md-4">
                <a class="navbar-brand" href="index.php"><h3>Blog de Virgile <small>Pour m'initier à PHP</small></h3></a>
            </div>
                 <!-- Formulaire de recherche -->
          <div class="col-md-6" >
            <div class="pull-right">
              <form action="index.php"  method="post" name="formSearch">
                  <div class="row col-md-6">
                      <div class="col-xs-10" ><input type="text" class="col-xs-12"name="keyWord"  id="searchInput" value=rechercher></div>
                      <div class="col-xs-2"><img src="assets/images/loupe_logo.png" alt="Submit" id="loupeLogo" class="img-responsive pull-right" onclick="document.forms['formSearch'].submit();" /></div>
                  </div>
                  <div class="row col-md-6">
                      <div class="col-xs-8" ><input type="email" class="col-xs-12"  id="emailAddr" value="S'abbonner"></div>
                      <div class="col-xs-4" ><input class="col-xs-12 text-center" type="button" id="addNews" value="Ok"></div>
                  </div>
              </form>
            </div>
          </div>
          <!-- Fin Formulaire de recherche -->

            <!-- Page du site -->
            <div class="col-md-2" >
                 <ul class="nav navbar-av navbar-right">
                    <li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Menu <b class="caret"></b></a>
                        <ul class="dropdown-menu">
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
                                    <a href="assets/include/serviceWeb.php?action=deconnexion">Deconnexion</a>
                                </li>
                                 <?php } ?>
                        </ul>
                    </li>
                </ul>
                
            </div>
            <!-- Fin Page du site -->



        </div>

    </nav>
    <!-- Fin Navigation -->
