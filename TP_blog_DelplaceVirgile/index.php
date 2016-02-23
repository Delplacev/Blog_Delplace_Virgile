<?php
include('assets/include/header.php');
//connection a la base de données
include('assets/protected/connectBDD.php');
?>

<div class="container">
<?php include('assets/include/menu.php') ?>  

    <div class="content">
        <div class="row">
            <div class="span8">
                <!-- notifications -->

                <!-- contenu -->
                <?php
                if (isset($_POST['keyWord'])) { // Si on recherche SINON on affiche tout
                    $tab = explode(" ", $_POST['keyWord']); // On prend tout les mots clée

                    $query = 'SELECT * FROM article WHERE';

                    $count = count($tab);
                    for ($i = 0; $i < $count; $i++)
                    {
                        $query .= ' (titre LIKE "%'.$tab[$i].'%" OR description LIKE "%'.$tab[$i].'%")';
                        if ($i + 1 < $count)
                            $query .= ' AND';
                    }
           
                } else {
                    $query = "SELECT * FROM article";
                }


                $result = mysql_query($query);

                 if(mysql_num_rows($result) == 0 ) {
                    echo "<p>Aucune résultat ne correspond à votre rcherche</p>";
                 }
                while ($ligne = mysql_fetch_assoc($result)) {
                    // Affichage des article

                    echo '<center><h3><a href="show.php?idArticle='.$ligne[id].'"">' . $ligne[titre] . '</a></h3><br>';
                    echo '<img src="assets/include/vignettejpg.php?imgSrc=' . $ligne[nomImage] . '" ><br><br>';
                    echo $ligne[description] . '<br> <br><p class="rigth"> date : ' . $ligne[date] . '</p>';
                    if ($connect == true) {
                        echo '<a href="editerArticle.php?idArticle=' . $ligne[id] . '"><input type="button" class="btn-primary" value="Editer"></a>';
                        echo '<a href="assets/include/action.php?action=deleteArticle&idArticle=' . $ligne[id] . '"><input type="button" class="btn-primary" id="btnSuppr" value="Suprimer "></a></br></center><hr>';
                    } else {
                        echo "<a href='connexion.php'>Connecter vous pour editer l'article</a>";
                    }
                }
                mysql_close($link);
                ?>
            </div>
        </div>

    </div>
</div>

<?php include('assets/include/footer.php') ?>