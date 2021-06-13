<?php 
class Account {
    protected int $id;
    protected string $account_number;
    protected string $account_type;
    protected int $amount;
    protected string $operation_date;
    protected int $customer_id;

    // setters
    public function setId(int $id) {
        $this->id = $id;
    }
    public function setAccount_number(string $account_number) {
        $this->account_number = $account_number;
    }
    public function setAccount_type(string $account_type) {
        $this->account_type = $account_type;
    }
    public function setAmount(int $amount) {
        $this->amount = $amount;
    }
    public function setOperation_date(string $operation_date) {
        $this->operation_date = $operation_date;
    }
    public function setCustomer_id(int $customer_id) {
        $this->customer_id = $customer_id;
    }

    // getters
    public function getId():int {
        return $this->id;
    }
    public function getAccount_number():string {
        return $this->account_number;
    }
    public function getAccount_type():string {
        return $this->account_type;
    }
    public function getAmount():int {
        return $this->amount;
    }
    public function getOperation_date():string {
        return $this->operation_date;
    }
    public function getCustomer_id():int {
        return $this->customer_id;
    }

    // Hydrate function
    public function hydrate(array $data) {
        foreach($data as $key => $value) {
            $method = "set" . ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }

    }
    // contruct
    public function __construct(array $data=null) {
        if($data) {
            $this->hydrate($data);
        }
    }

}
?>