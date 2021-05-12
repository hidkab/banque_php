<?php include('template/head.php'); ?>
<?php include('template/nav.php'); ?>
<?php include('template/header.php'); ?>
<main class="container my-5 text-center">
<?php 
$account = get_accounts();
foreach($account as $element)
echo $element;




?>


</main>
<?php include('template/footer.php'); ?>

