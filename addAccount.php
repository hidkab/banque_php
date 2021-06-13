<?php 
    require "model/entity/account.php";
    require "model/accountManager.php";
    $accountManager = new AccountManager();
   
    
    if(!empty($_POST) && isset($_POST["addPerson"])) {
        $account = new Account($_POST);
        $accountManager->addAccount($account);
    }

    require "view/addAccountView.php";
