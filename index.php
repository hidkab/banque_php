
<?php 
    require "model/accountModel.php";

    session_start();
    if(!isset($_SESSION["customer"])) {
        header("Location:login.php");
        exit;
    }

    $accounts = getAccount($db, $_SESSION["customer"]["id"]);

    require "view/indexView.php";



