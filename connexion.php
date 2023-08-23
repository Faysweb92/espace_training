<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php include_once "nav.php";?>

    <form id="centre"method="POST" action="treatment1.php" >
        

        <div class="mb-3">
            <label for="pseudo" class="form-label">Votre pseudo</label>
            <input name= "pseudo" type="text" class="form-control" id="pseudo">
        </div>

        <div class="mb-3">
            <label for="mdp" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="mdp" name="mdp">
        </div>

        
        <button type="submit" class="btn btn-primary" name="connexion">Se Co</button>
    </form>
</body>
</html>