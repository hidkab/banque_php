<?php 
final class AccountManager {
    private PDO $db;

    public function getAccounts():array {
        $query = $this->db->query("SELECT * FROM account");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $key => $account) {
            $data[$key] = new Account($account);
        }
        return $data;
        
    } 

    public function addAccount(Account $account):bool {
        $query = $this->db->prepare(
            "INSERT INTO account(account_number, account_type, amount, customer_id)
            VALUES(:account_number, :account_type, :amount, :customer_id)
            ");
        $result = $query->execute([
            "account_number" => $account->getAccount_number(),
            "account_type" => $account->getAccount_type(),
            "amount" => $account->getAmount(),
            "customer_id" => $account->getCustomer_id()
        ]);
        return $result;

    }

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=banque_php', 'root', '');
    }
}
 
?>

