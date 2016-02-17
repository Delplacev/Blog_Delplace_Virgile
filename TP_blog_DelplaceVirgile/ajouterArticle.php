<?php include('assets/include/header.php') // entete de la page ?>
<?php if ($connect == true) { ?>
    <div class="container">
        <?php include('assets/include/menu.php') ?>
        <div class="content">
            <div class="row">
                <div class="span8">
                    <!-- notifications -->
                    <!-- contenu -->
                    <form action="ajouterArticle.php" enctype="multipart/form-data" method="post">
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
        /* SI ON A DES DONNES EN POST POUR L'AJOUT D'ARTICLE */
        if (($_POST[titreArticle] != "") && ($_POST[descriptionArticle] != "") && !empty($_FILES['fichier']['name'])) {
            include('assets/protected/connectBDD.php'); // connection à la base
            /* SI ON A UN FICHIER ON UPLOAD */
            if (!empty($_FILES['fichier']['name'])) { 
                $extension = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);

                $nomImage = $_FILES['fichier']['name']; //nom de l'image
                if (move_uploaded_file($_FILES['fichier']['tmp_name'], "assets/images/" . $nomImage)) { // Upload du fichier 
                    $message = 'Upload réussi !';
                } else {
                    // Sinon on affiche une erreur systeme
                    $message = 'Erreur';
                }
            }
            /* FIN SI */
            mysql_real_escape_string();
            
            // Ajout de l'article
            $query = "INSERT INTO `article`(`id`, `titre`, `description`,  `date`, `nomImage` ) VALUES ('','" . $_POST[titreArticle] . "','" . $_POST[descriptionArticle] . "','" . date('ymd') . "','" . $_FILES['fichier']['name'] . "');";

            //Execution de la requete
            $result = mysql_query($query);

            if (!$result) {
                die('Requête invalide : ' . mysql_error());
            } else {
                ?>
                <!--Affichahe d'une popup pour confirmer l'ajout-->
                <meta http-equiv="content-type" content="text/html; charset=utf-8" />
                <script type="text/javascript">
                    alert("Votre article a bien était ajouté");
                    window.location.href = "index.php";
                </script>
                <?php
            }
        }
        /* FIN IF */
    } else {
        include("connexion.php");
    }
    ?>


    <?php include('assets/include/footer.php') // pied de page ?>
