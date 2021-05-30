<?php
    
    require "model/connexion.php";
    require "model/operationModel.php";
    include "template/header.php";

    if(isset($_GET["id"]) && !empty($_GET["id"])) {
        $operations = getOperation($db, $_GET["id"]);
        
    }
    else {
        $error = "Nous ne parvenons pas à récupérer votre compte, essayez de revenir plus tard";
    }
?>

<?php if(isset($operations)): ?>
    <h2 class="text-center py-3"><?php echo $operations[0]["account_type"]; ?></h2>
<?php else : ?>
    <div class="alert alert-secondary text-center" role="alert">
        <?php echo $error; ?>
        <p>Pourquoi ne pas retourner à l'accueil ?</p>
        <a href="index.php" class="btn btn-dark text-white">Accueil</a>
    </div>
<?php endif ?>

    <table class="table table-striped table-hover table-bordered text-center w-50 m-auto">
    <thead>
        <tr>
        <th scope="col" class ="w-25">ID</th>
        <th scope="col">DATE D'OPERATION</th>
        <th scope="col">LIBELLE</th>
        <th scope="col">MONTANT</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($operations as $operation): ?>
        <tr>
        <td><?php echo $operation["id"]; ?></td>
        <td><?php echo $operation["executed"]; ?></td>
        <td><?php echo $operation["operation_type"]; ?></td>
        <td><?php echo $operation["amount"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>

<?php
    include "template/footer.php";
?>

