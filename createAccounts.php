<!-- charger la page acounts.php -->
<?php include('acounts.php'); ?>

<?php
$accounts = get_accounts();
// use the loop foreach to create the cards 
foreach($accounts as $element) 
{
    echo '
    <div class="col-12 col-md-6 col-lg-4">
    <article class="card">
      <div class="card-header bg-secondary">
        <h5 class="card-title">' .$element['name'] . '</h5>
        <h6 class="card-subtitle mb-2 text-white">' . $element['number'] . '</h6>
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush border-bottom mb-2">
          <li class="list-group-item">' . $element['owner'] . '</li>
          <li class="list-group-item">' . $element['amount'] . '</li>
          <li class="list-group-item">' . $element['last_operation'] . '</li>
        </ul>
        <a href="#" class="btn btn-info">Clôturer</a>
        <a href="operation.html" class="btn btn-info">Dépot/retrait</a>
        <a href="#" class="btn btn-info">Voir</a>
      </div>
    </article>
    </div>';
}
?>