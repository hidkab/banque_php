<?php 
require "model/connexion.php";
require "model/customerModel.php";
if(isset($_POST["email"]) && isset($_POST["password"])) {
    $customer = getCustomerByMail($db, $_POST["email"]);
    
    if($customer) {
        if(password_verify($_POST["password"], $customer["password"])) {
            session_start();
            $_SESSION["customer"] = $customer;
            header("Location:index.php");
            exit;
        }
    }
    $error_message ="Votre pseudo ou mot de passe invalide";
}

include "template/header.php"; 
?>
    <h2 class="text-center">Accéder à votre espace</h2>

    <form action="" method="post" class="w-75 mx-auto my-5">
        <?php if(isset($error_message)): ?>
            <div class="alert alert-danger">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
        <div>
            <label for="email" class="form-label" >Votre Mail</label>
            <input name="email" class="form-control py-2" type="email" id="email">
        </div>
        <div>
            <label for="password" class="form-label">Mot de passe</label>
            <input name="password" class="form-control py-2" type="password" id="password">
        </div>
        <div class="my-5 text-center">
            <input type="submit" value="Connexion" class="btn btn-dark">
        </div>
        
    </form>
    

<?php include('template/footer.php'); ?>

