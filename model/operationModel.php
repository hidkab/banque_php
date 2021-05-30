<?php 
function getOperation(PDO $db, int $id) {
    $query = $db->prepare(" SELECT operation.id, operation.operation_type, operation.amount, operation.executed,
    account.account_type
    FROM operation 
    INNER JOIN account ON operation.account_id = account.id
    WHERE operation.account_id = :id");
    $query->execute([
        "id" => $id
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>