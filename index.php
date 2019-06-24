<?php 
    $_SESSION["error"] = [];
    if(!empty($_POST["nom"]) and !empty($_POST["prenom"]) and !empty($_POST["date-naissance"]) and !empty($_POST["sexe"]) and !empty($_POST["adresse"]) and !empty($_POST["mail"]) and !empty($_POST["tel"])){
        $pattern = "#^[a-zA-Z]+#";
        $nom = preg_match($pattern, $_POST['nom'], $matches_nom);
        $prenom = preg_match($pattern, $_POST['prenom'], $matches_prenom);
        $birth = preg_match("#^[0-9-/]+#", $_POST['date-naissance'], $matches_birth);
        $adresse = preg_match("#^[A-Za-z'àáâãäåçèéêëìíîïðòóôõöùúûüýÿ -]+$#", $_POST['adresse'], $matches_adresse);
        $mail = preg_match("#^[a-zA-Z0-9]+#", $_POST['mail'], $matches_mail);
        $tel = preg_match("#^[0-9-/.]+#", $_POST['tel'], $matches_tel);

        // pas sur.....
        if(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL) and $matches_nom[0] === $_POST['nom'] and $matches_prenom[0] === $_POST['prenom']){

        }
    }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>fistibook</title>
</head>




<body>

<header>
    
    <nav class="navbar navbar-expand-lg navbar-success bg-success">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <h1>Fistibook</h1>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Créer un compte</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
        </div>
    </nav>

</header>

<main>

</main>

<footer>
    <p>fist fist fist fist fist</p>
    <div></div>
    <p>planche planche planche</p>
</footer>


    <script src="assets/js/script.js"></script>
</body>
</html>