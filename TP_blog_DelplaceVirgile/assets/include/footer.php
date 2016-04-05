
<!-- Footer -->
<footer class="text-center">
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php


                    //Si on est connecter
                    if (isset($_SESSION["session"]) && isset($_COOKIE["nomConnecter"])) {
                        $connect = true;
                        $email_util = $_SESSION["session"];
                        //Affichage d'un message de connection
                        echo "<h5>Bonjour " . $_COOKIE["nomConnecter"] . ", vous étent actuellement connecter </h5><br>";
                    } else {
                        $connect = false;
                    }

                    echo " Nombre de chargement : " . $_COOKIE["nbChargement"];
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FIN Footer -->
<script type="text/javascript" src="assets/js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="assets/js/jsBlog.js"></script>
<script type="text/javascript" src="assets/js/bjqs-1.3.js"></script>
<script  src="assets/js/bootstrap.min.js"></script>
</body>
<!-- FIN Body -->
</html>
