<?php 
// fonction pour récuperer tout les comptes
function getAccount(PDO $db, int $id):array {
    $query = $db->prepare("SELECT * FROM account WHERE customer_id =:id");
    $query->execute([
        "id" => $id
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// fonction pour récuperer le type de compte
function getSingleAccount(PDO $db, int $id) {
    $query = $db->prepare("SELECT * FROM account WHERE id=:id");
    $query->execute([
        "id" => $id
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}
 
// fonction pour ajouter un copte à la base de données
// function addCustomer(PDO $db, array $account):bool {
//     $query = $db->prepare("INSERT TO customer(email, password) WHERE VALUES(:email, :password)");
//     $result = $query -> execute ([
//         "email" => $account["email"],
//         "password" => $account["password"]
//     ]);
//     return $result;
// }
?>

