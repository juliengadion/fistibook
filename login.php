<!DOCTYPE html>
<html lang="fr">
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
    
    <div class="row">
        <div class="col-12">

            <nav class="navbar navbar-expand-lg navbar-success bg-success">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <h1>Fistibook</h1>

                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Créer un compte<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                    </form>
                </div>
            </nav>

        </div>
    </div>

</header>

<main>

    <div class="row">
        <div class="col-12">
            <form id="form" action="action.php" method="post">

                <p>Votre Nom <span> * : </span><input type="text" name="nom"></p>
                <p>Votre Prénom <span> * : </span><input type="text" name="prenom"></p>
                <p>Votre Sexe <span> * : </span></p>
                <p>Homme : <input type="checkbox" name="homme"> Femme : <input type="checkbox" name="femme"></p>
                <p>Votre Date de naissance <span> * : </span><input type="date" name="naissance"></p>         
                <p>Votre Adresse <span> * : </span><input type="text" name="adresse"></p>
                <p>Votre Mail <span> * : </span><input type="email" name="mail"> </p>
                <p>Votre Téléphone <span> * : </span><input type="" name="tel"></p>

                <input type="submit" value="VALIDER">

            </form>
        </div>
    </div>

</main>

<footer>
    
</footer>


    <script src="assets/js/script.js"></script>
</body>
</html>