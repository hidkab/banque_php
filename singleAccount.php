<?php
    
    require "model/connexion.php";
    require "model/accountModel.php";
    include "template/header.php";

    
    if(isset($_GET["id"]) && !empty($_GET["id"])) {
        $account = getSingleAccount($db, $_GET["id"]);
    }
    else {
        $error = "Nous ne parvenons pas à récupérer votre compte, essayez de revenir plus tard";
    }
?>

<?php if(isset($account)): ?>
    <h2 class="text-center"><?php echo $account["account_type"]; ?></h2>
<?php else : ?>
    <div class="alert alert-secondary text-center" role="alert">
        <?php echo $error; ?>
        <p>Pourquoi ne pas retourner à l'accueil ?</p>
        <a href="index.php" class="btn btn-dark text-white">Accueil</a>
    </div>
<?php endif ?>

<?php
    include "template/footer.php";
?>

