<?php include "template/header.php" ?>

<h2 class="text-center py-4">Vos comptes bancaires</h2>
<table class="table table-striped table-hover table-bordered text-center w-50 m-auto">
    <thead>
        <tr>
        
        <th scope="col">TYPE DE COMPTE</th>
        <th scope="col">N° DE COMPTE</th>
        <th scope="col">MONTANT</th>
        <!-- <th scope="col">DATE D'OPERATION</th> -->
        </tr>
    </thead>
    <tbody>
    <?php foreach($accounts as $account): ?>
        <tr>
            <td><?php echo $account->getAccount_type(); ?></td>
            <td><?php echo $account->getAccount_number(); ?></td>
            <td><?php echo $account->getAmount(); ?></td>
            <!-- <td><?php echo $account->getOperation_date(); ?></td> -->
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
    
<?php include "template/footer.php" ?>




