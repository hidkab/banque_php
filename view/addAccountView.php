<?php include "template/header.php" ?>
<h2 class="text-center">Créer un compte</h2>

<form class="row g-3 w-50 m-auto" action="", method="post">
  <div class="col-12">
    <label for="validationDefault01" class="form-label">Numéro du compte</label>
    <input type="text" name="account_number" class="form-control" id="validationDefault01">
  </div>
  <div class="col-12">
    <label for="validationDefault01" class="form-label">Numéro du compte</label>
    <select class="form-select" name="account_type" id="autoSizingSelect">
      <option selected>Choose...</option>
      <option value="Compte courant">Compte courant</option>
      <option value="Livret A">Livret A</option>
      <option value="PEL">PEL</option>
    </select>
  </div>
  <div class="col-12">
    <label for="validationDefault01" class="form-label"> Montant</label>
    <input type="number" class="form-control" name="amount" id="validationDefault01">
  </div>
  <div class="col-auto m-auto p-3">
    <button type="submit" name="addPerson" class="btn btn-dark">Envoyer</button>
  </div>
</form>




<?php include "template/footer.php" ?>