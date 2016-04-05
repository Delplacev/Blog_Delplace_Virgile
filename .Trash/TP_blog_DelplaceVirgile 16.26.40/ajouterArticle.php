<?php include('assets/include/header.php') // entete de la page ?>
<?php if ($connect == true) { ?>
    <div class="container">
        <?php include('assets/include/menu.php') ?>
        <div class="content">
            <div class="row">
                <div class="span8">
                    <!-- notifications -->
                    <!-- contenu -->
                    <form action="assets/include/serviceWeb.php?action=AddArticle" enctype="multipart/form-data" method="post">
                        <label class="col-xs-12 text-center">Titre de l'article</label>
                        <input type="text" name="titreArticle" class="form-control">
                        <label class="col-xs-12 text-center">Description de l'article</label>
                        <textarea name="descriptionArticle" style="height: 300px"class="form-control"></textarea><br>
                        <hr>
                        <label class="col-xs-12 text-center" title="Recherchez le fichier à uploader !">Ajouter une image : </label>
                        <center><input name="fichier" type="file" id="fichier_a_uploader" />
                            <hr>
                            <input type="submit" class="btn-primary"></center>
                    </form>
                </div>

            </div>

        </div>
    </div>
        <?php
    } else {
        include("connexion.php");
    }
    ?>


    <?php include('assets/include/footer.php') // pied de page ?>
