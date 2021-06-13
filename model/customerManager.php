<?php 
final class CustomerManager {
    private PDO $db;
    
    public function getCustomerByMail(string $email):array {
        $query = $this->db->prepare("SELECT * FROM customer WHERE email = :email");
        $query->execute([
            "email" => $email
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    // Connexion to db
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=banque_php', 'root', '');
    }
}
?>