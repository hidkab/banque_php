
<?php 
    require "model/entity/account.php";
    require "model/accountManager.php";

    session_start();
    if(!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }
    $accountManager = new AccountManager();
    // var_dump($accounts);
    
    if(!empty($_POST)) {
        $account = new Account($_POST);
        $accountManager->addAccount($account);
    }
    $accounts = $accountManager->getAccounts();
    var_dump($account);


    require "view/indexView.php";



