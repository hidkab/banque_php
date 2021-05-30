
<?php 
    session_start();
    if(!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }

    require "model/connexion.php";
    require "model/accountModel.php";
    require "model/operationModel.php";
    include "template/header.php";

    $accounts = getAccount($db, $_SESSION["customer"]["id"]);
    $operations = getOperation($db, $_SESSION["customer"]["id"]);
?>

<h2 class="text-center">Vos comptes bancaires</h2>
<div class="row">
    <?php foreach($accounts as $index => $account): ?>
        <div class="col-12 col-md-6 col-lg-6 text-center">
            <ul class="list-group my-4">
                <?php foreach($account as $key => $value): ?>
                    <li class="list-group-item">
                        <?php echo "$key : $value"; ?>
                    </li>
                <?php endforeach; ?>
                    <li class="list-group-item text-center">
                        <a class="btn btn-dark text-white px-4" href="operation.php?id=<?php echo $account["id"]; ?>">Voir</a>
                    </li>
            </ul>
        </div>
    <?php endforeach; ?>
</div>

<?php 
    include "template/footer.php";
?>