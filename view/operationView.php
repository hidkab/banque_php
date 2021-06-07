<?php 
   
    include "template/header.php";
?>
<?php if(isset($operations)): ?>
    <h2 class="text-center py-3"><?php echo $operations[0]["account_type"]; ?></h2>
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