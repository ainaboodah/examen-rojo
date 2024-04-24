<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href=<?php echo base_url('assets/login.css');?>>
    <title>Simulation de Prêt</title>
</head>
<body>
    <h1 class="text-center mb-4">Simulation de Pret</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8"> 
                    <form action="traitement.php" method="POST">
                        <label for="montant">Montant :</label>
                        <input type="number" id="montant" name="montant" required>
                
                        <label for="deteversment">Date De Versement :</label>
                        <input type="date" id="dateversment" name="dateversment" required>
                
                        <label for="mois"> Nombre De Mois De Remboursement:</label>
                        <input type="number" id="mois" name="mois" required>
                
                        <label for="taux">Taux :</label>
                        <input type="number" id="taux" name="taux" required>
                        
                        <label for="mois">Nombre de Mois du Decalage du Premier Paiement :</label>
                        <input type="number" id="mois" name="mois" required>
                        <button type="submit" class="bouton">Créer et Sauvegarder</button>
                    </form>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-3"> 
                    <h2 class="text-black text-center mt-4">Mes Simulations</h2>
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and custom CSS links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
