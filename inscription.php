<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>page inscription</title>
</head>
<body>

<h1>Page inscription</h1>
<div class="titre">



    <a id = connect href="">Connexion</a>
</div>

    <form id="centre"method="POST" action="treatment1.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name= "email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="pseudo" class="form-label">Votre pseudo</label>
            <input name= "pseudo" type="text" class="form-control" id="pseudo">
        </div>

        <div class="mb-3">
            <label for="mdp" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="mdp" name="mdp">
        </div>

        <div class="mb-3">
            <label for="confirmation" class="form-label">Confirmation du mot de passe</label>
            <input type="password" class="form-control" id="confirmation" name="confirmation">
        </div>

        <div class="mb-3">
            <label for="fichier" class="form-label">Choisi ta photo</label>
            <input type="file" class="form-control" id="fichier" name="fichier">
        </div>
        
        <button type="submit" class="btn btn-primary" name="inscription">Inscription</button>
    </form>
</body>
</html>
