<?php
include('assets/include/header.php');
//connection a la base de données
?>
<?php
if ($connect == true) {
    include('assets/protected/connectBDD.php');
    ?>
    <div class="container">
        <?php include('assets/include/menu.php') ?>
        <div class="content">
            <div class="row">
                <div class="span8">
                    <?php
                    //recupération des données
                    $query = "SELECT * FROM article WHERE id = " . $_GET[idArticle];

                    $result = mysql_query($query);
                    $ligne = mysql_fetch_assoc($result);

                    //Affichage du formulaire avec les données recupére
                    ?>
                    <form action="assets/include/serviceWeb.php?action=updateArticle"  enctype="multipart/form-data" method="post">
                        <label class="col-xs-12 text-center">Titre de l'article</label>
                        <input type="text" name="titreArticle" value="<?php echo $ligne[titre] ?>" class="form-control">
                        <input type="text" name="idArticle" value="<?php echo $_GET[idArticle] ?>" class="hidden">
                        <label class="col-xs-12 text-center">Description de l'article</label>
                        <textarea name="descriptionArticle" style="height: 300px"class="form-control"><?php echo $ligne[description] ?></textarea><br>
                        <center>
                            <img src="assets/include/vignettejpg.php?imgSrc=<?php echo $ligne[nomImage] ?>" ><br>
                            <hr><label class="col-xs-12 text-center" title="Recherchez le fichier à uploader !">Modifier l'image:</label>
                            <input name="fichier" type="file" id="fichier_a_uploader" /><hr>
                            <input type="submit" class="btn-primary" value="editer">
                        </center>
                    </form>
                </div>

            </div>
        </div>

    </div>
    </div>
    <?php
} else {
    include("connexion.php");
}
?>


<?php include('assets/include/footer.php') ?>
