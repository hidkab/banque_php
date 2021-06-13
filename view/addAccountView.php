<?php include "template/header.php" ?>
<h2 class="text-center">Créer un compte</h2>

<form class="row g-3 w-50 m-auto" action="", method="post">
  <div class="col-12">
    <label for="validationDefault01" class="form-label">Numéro du compte</label>
    <input type="text" class="form-control" id="validationDefault01">
  </div>
  <div class="col-12">
    <label for="validationDefault01" class="form-label">Numéro du compte</label>
    <select class="form-select" id="autoSizingSelect">
      <option selected>Choose...</option>
      <option value="1">Compte courant</option>
      <option value="2">Livret A</option>
      <option value="3">PEL</option>
    </select>
  </div>
  <div class="col-12">
    <label for="validationDefault01" class="form-label"> Montant</label>
    <input type="number" class="form-control" id="validationDefault01">
  </div>
  <div class="col-auto m-auto p-3">
    <button type="submit" class="btn btn-dark">Envoyer</button>
  </div>
</form>




<?php include "template/footer.php" ?>