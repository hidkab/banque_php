<?php 
class Customer {
    protected int $id;
    protected string $lastname;
    protected string $firstname;
    protected int $phone;  
    protected string $email;
    protected string $sex;
    protected string $password;
    protected string $birth_date;
    protected string $city;
    protected int $city_code;
    protected int $street_number;
    protected string $street;

    // setters
    public function setId(int $id) {
        $this->id = $id;
    }
    public function setLastname(string $lastname) {
        $this->lastname = $lastname;
    }
    public function setFirstname(string $firstname) {
        $this->firstname = $firstname;
    }
    public function setPhone(int $phone) {
        $this->phone = $phone;
    }
    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function setSex(string $sex) {
        $this->sex = $sex;
    }
    public function setPassword(string $password) {
        $this->password = $password;
    }
    public function setBirth_date(string $birth_date) {
        $this->birth_date = $birth_date;
    }
    public function setCity(string $city) {
        $this->city = $city;
    } 
    public function setCity_code(int $city_code) {
        $this->city_code = $city_code;
    }
    public function setStreet_number(int $street_number) {
        $this->street_number = $street_number;
    }
    public function setStreet(string $street) {
        $this->street = $street;
    }

    // getters
    public function getId():int {
        return $this->id;
    }
    public function getLastname():string {
        return $this->lastname;
    }
    public function getFirstname():string {
        return $this->firstname;
    }
    public function getPhone():int {
        return $this->phone;
    }
    public function getEmail():string {
        return $this->email;
    }
    public function getSex():string {
        return $this->sex;
    }
    public function getPassword():string {
        return $this->password;
    }
    public function getBirth_date():string {
        return $this->birth_date;
    }
    public function getCity():string {
        return $this->city;
    }
    public function getCity_code():int {
        return $this->city_code;
    }
    public function getStreet_number():int {
        return $this->street_number;
    }
    public function getStreet():string {
        return $this->street;
    }

    // Construct
    public function __construct(array $data) {
        foreach($data as $key => $value) {
            $method = "set" . ucfirst($key);
            var_dump($method);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }

    }

}
?>