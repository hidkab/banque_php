<?php

    require "model/operationModel.php";
    session_start();
    if(isset($_GET["id"]) && !empty($_GET["id"])) {
        $operations = getOperation($db, $_GET["id"], $_SESSION["customer"]["id"]);
        if(empty($operations)) {
            header("Location:index.php");
            exit;
        }
   
    }
    else {
        $error = "Nous ne parvenons pas à récupérer votre compte, essayez de revenir plus tard";
    }
    // $operations = getOperation($db, $_SESSION["customer"]["id"]);
    
require "view/operationView.php";




