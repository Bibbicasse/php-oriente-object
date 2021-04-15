<?php 
    require('class/Autoloader.php');
    // require('class/Debug.php');
    Autoloader::register();
    use Outils\Debug;

?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Article</title>
</head>
<body>

<?php 
    $article1 = new Article(); //création d'une instance $a de la class Article

    $article1->setTitre('Ma vie mon oeuvre'); //propriétés
    $article1->setContenu('lorem Ipsum lorem Ipsum lorem Ipsum'); //propriétés
    $article1->setDate_de_publication('2021-04-13'); //propriétés
    $article1->afficher();

    
    $article2 = new Article("Découverte de l'année", "lorem lorem lorem", "2021-04-12");
    $article2->afficher();

    Debug::monDebug($article1);
    Debug::monDebug($article2);
?> 

    

     <!-- **********************************************-->
     <!--               SCRIPT BOOSTRAP 5               -->
     <!-- **********************************************-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>-