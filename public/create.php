<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <h1>CREATION D'UN NOUVEAU CLIENT !</h1>
    <form action="" method="POST">
        <input type="text" name "client_nom" placeholder="NOM">
        <br><br>
        <input type="text" name "client_prenom" placeholder="PRENOM">
        <br><br>
        <input type="mail" name "client_mail" placeholder="E-MAIL">
        <br><br>
        <?php $message?>
        <br><br>
        <input type="submit" name="create" value="Créer">
    </form>
        <a href="index.php">Retour à l'accueil !</a>
</body>
</html>