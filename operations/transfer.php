<?php include('../template/head.php'); ?>
<?php include('../template/nav.php'); ?>
<?php include('../template/header.php'); ?>
<main class="container my-5 ">
    <h1 class="text-center my-5">Faire un Virement</h1>
    <div class="my-3">
      <select class="form-select" aria-label="Default select example">
        <option selected>Sélectionner un compte à débiter</option>
        <option value="1">Compte courant</option>
        <option value="2">Compte Livret A</option>
        <option value="3">Compte LEP</option>
      </select>
    </div>
    <div class="my-3">
      <select class="form-select" aria-label="Default select example">
        <option selected>Sélectionner un compte à créditer</option>
        <option value="1">Compte courant</option>
        <option value="2">Compte Livret A</option>
        <option value="3">Compte LEP</option>
      </select>
    </div>
    <div class="input-group mb-3">
      <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
      <span class="input-group-text">Somme en £</span>
      <span class="input-group-text">0.00</span>
    </div>
    <div class="col-12 my-3 text-center">
      <button class="btn btn-primary" type="submit">Envoyer</button>
    </div>
  </main>
<?php include('../template/footer.php'); ?>

