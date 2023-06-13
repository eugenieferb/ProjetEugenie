<?php
use App\Repository\ArticleRepository;

require '../vendor/autoload.php';


$repository = new ArticleRepository();

$article = $repository->findAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class = "navbar"><ul>
<li>Poster</li>
<li>Ajouter une catégorie</li>
<li>Parcourir</li>
</ul>
    </nav>
<div class="container-fluid">
<div class="row g-3">
            <?php foreach ($article as $item) { ?>
                <div class="col-md-4">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title">
                                <?= $item->getTitle() ?>
                            </h3>
                            <p class="card-text">
                                
                                <?= htmlspecialchars($item->getDescription()) ?>
                            </p>
                            <p class="card-text text-end"> 
                            <img src="<?= $item->getImg() ?>" alt="">
                            </p>
                            <a href="single-product.php?id=<?= $item->getId() ?>" class="card-link">Details</a>
                        </div>
                    </div>
            </div>
           <?php }

            ?>
</body>
</html>