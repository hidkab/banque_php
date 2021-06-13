<?php 
    session_start();
    require "model/entity/account.php";
    require "model/accountManager.php";
    $accountManager = new AccountManager();
   
    
    if(!empty($_POST) && isset($_POST["addPerson"])) {
        $account = new Account($_POST);
        $account->setCustomer_id($_SESSION["customer"]["id"]);
        $accountManager->addAccount($account);
    }

    require "view/addAccountView.php";
