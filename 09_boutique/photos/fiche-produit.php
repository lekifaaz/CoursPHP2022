<?php
require_once('./inc/init.php');


if (isset($_GET['id_produit'])) {
    $resultat = $pdoSITE->prepare("SELECT * FROM produit WHERE id_produit = :id_produit");
    $resultat->execute(array(
        ':id_produit' => $_GET['id_produit']
    ));

    if ($resultat->rowCount() == 0) {
        header('location:03-produits.php');
        exit();
    }
    $fiche = $resultat->fetch(PDO::FETCH_ASSOC);
} else {
    header('location:03-produits.php');
    exit();
};
?>

<!doctype html>
<html lang="fr">

<head>
    <title>La boutique - Produit #<?php echo $fiche['id_produit'];  ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <main class="container bg-white m-4 mx-auto p-4">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <h1>La boutique</h1>
            </div>
        </div>

    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>