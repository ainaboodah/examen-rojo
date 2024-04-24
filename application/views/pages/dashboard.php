<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chart Table</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/styles.css');?>>
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">Tableu D'amortissement</h1>
    <div class="table-responsive">
      <table class="table table-bordered chart-table">
        <thead>
          <tr>
            <th scope="col">N° Mensualité</th>
            <th scope="col">Date De Versement</th>
            <th scope="col">Solde Initial</th>
            <th scope="col">Mensualité</th>
            <th scope="col">Capital Remboursé</th>
            <th scope="col">Intérets</th>
            <th scope="col">Capital Restant du</th>
            <th scope="col">Nombre de Mois du Decalage du Premier Paiement</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
