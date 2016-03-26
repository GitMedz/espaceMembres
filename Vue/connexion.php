<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Connexion</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="CSS/styles.css" rel="stylesheet" />
</head>

<body>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Connexion</h3>
    </div>
    <div class="panel-body">
        <form method="post" action="cible.php">

            <div class="input-group">
                <span class="input-group-addon">Nom d'utilisateur</span>
                <input type="text" class="form-control" placeholder="Pseudo" name="pseudo">
            </div>

            <div class="input-group">
                <span class="input-group-addon">Mot de passe</span>
                <input type="password" class="form-control" placeholder="********" name="pass">
            </div>

            <p>Pas encore inscrit ? <a href="inscription.php">Inscrivez-vous !</a> </p>

            <div class="bouton-connexion">
                <input class="btn btn-default" type="submit" value="Se Connecter">
            </div>

        </form>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>