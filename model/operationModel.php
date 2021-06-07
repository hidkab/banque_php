<?php 
require "model/connexion.php";

function getOperation(PDO $db, int $id, int $customer_id) {
    $query = $db->prepare(" SELECT operation.id, operation.operation_type, operation.amount, operation.executed,
    account.account_type
    FROM operation 
    RIGHT JOIN account ON operation.account_id = account.id
    WHERE account.id = :id AND account.customer_id = :customer_id");
    $query->execute([
        "id" => $id,
        "customer_id" => $customer_id
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>