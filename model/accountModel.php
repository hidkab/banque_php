<?php 
function getAccount(PDO $db):array {
    $response = $db->query("SELECT * FROM account");
    $result = $response->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getSingleAccount(PDO $db, int $id) {
    $query = $db->prepare("SELECT * FROM account WHERE id=:id");
    $query->execute([
        "id" => $id
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}
?>

