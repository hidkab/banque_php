<?php 
require "model/entity/customer.php";
require "model/customerManager.php";

$customerManager = new CustomerManager();

if(isset($_POST["email"]) && isset($_POST["password"])) {
    $customer = $customerManager->getCustomerByMail($_POST["email"]);
    if($customer) {
        if(password_verify($_POST["password"], $customer["password"])) {
            session_start();
            $_SESSION["customer"] = $customer;
            header("Location:index.php");
            exit;
        }
    }
    $error_message ="<p class='text-center'>Votre pseudo ou mot de passe invalide</p>";
}
 require "view/loginView.php";


