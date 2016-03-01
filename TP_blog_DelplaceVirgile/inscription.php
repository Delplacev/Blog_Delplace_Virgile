<?php include('assets/include/header.php'); ?>
<!-- container -->
<div class="container">
    <!-- content -->
    <div class="content">
        <div class="row">

            <?php if (!isset($_SESSION["session"])) { //SI on est pas connecter on s'incrit'?>
                <div class="span8">
                    <!-- Formulaire d'inscription -->
                    <form action="assets/include/serviceWeb.php?action=inscription" method="post">
                        <center>
                            <div class="col-md-6">
                                <label class="text-center"> E-mail : </label>
                                <input type="email" name="email"  class="form-control ">
                            </div>
                            <div class="col-md-3">
                                <label class="text-center">Nom : </label>
                                <input type="text" name="nom" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="text-center">Prénom : </label>
                                <input  type="text" name="prenom" class="form-control"><br>
                            </div>
                            <div class="col-md-3"> </div>
                            <div class="col-md-3">
                                <label class="text-center">Password : </label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="text-center">Password confirm: </label>
                                <input  type="Password" name="passwordConfirm" class="form-control">
                            </div><br>
                            <div class="col-md-12"><input type="submit" class="btn-primary"></div></center>
                    </form>
                    <!-- FIN formulaire -->
                </div>
            <?php
            } else {
                echo '<p>Deja connecter</p>';
            };
            ?>
            <!-- Menu -->
            <nav class="span4">
                <?php include('assets/include/menu.php'); ?>
            </nav>
            <!-- FIN menu -->
        </div>
    </div>
    <!-- FIN content -->
</div>
<!-- FIN container -->
<?php include('assets/include/footer.php'); ?>
