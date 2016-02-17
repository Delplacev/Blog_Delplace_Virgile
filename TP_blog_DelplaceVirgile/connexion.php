<?php include('assets/include/header.php') ?>

    <div class="container">
      <?php include('assets/include/menu.php') ?>
      <div class="content">
        
        <div class="row">
        
          <div class="span8">
            <?php if(!isset($_SESSION["session"])){  ?>
          	<form action="assets/include/action.php?action=validConnection" method="post">
                <div class="col-xs-6"> <label class="text-center">E-mail : </label>
                <input type="email" name="email" class="form-control "></div>
                <div class="col-xs-6"> <label class="text-center">Password : </label>
                <input  type="Password" name="password" class="form-control"><br></div>
                <center><div class="row"><input type="submit" class="btn-primary"></center></div>
            </form>
            <?php } else { echo '<p>Déja connecter</p>' ; } ?>
           </div>
          
 
        </div>
        
      </div>


<?php include('assets/include/footer.php') ?>


