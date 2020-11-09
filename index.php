<?php
$page='accueil';
$title='';
$css='';
if(isset($_GET['page'])){ 
    $page = $_GET['page'];
    if($page=='accueil'){
        $title='Accueil';
        $css=' <link rel="stylesheet" href="css/accueilstyle.css">';
        

    }
    if($page=='contact'){
        $title='Contact';
        $css=' <link rel="stylesheet" href="css/contactstyle.css">';
    }
    if($page=='trajet'){
        $title='Trajet';
        $css=' <link rel="stylesheet" href="css/trajetstyle.css">';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <title>RATP| <?php echo $title?></title>
    <?php
    echo $css; 
    ?>
    <style>
        body{
            font-family: 'Playfair Display', serif;

        }
        .article{
            display: flex;
            flex-direction: row;
            width: 100%;
            height: 500px;
            margin: 10px;
        }
   
       .article-a{
            width: 50%;
            height: 500px;
            padding: 50px;
            text-align: justify;
        }

       .article-b{
            width: 50%;
            height: 500px;
            margin-right: 20px;
        }

        @media screen and (max-width: 760px){
            .article{
                flex-direction: column;
                margin-top: 40px;
                margin-bottom: 40px;
            }
            .article-a{
                width: 100%;
                height: 500px;
                padding: 10px 20px 10px 10px;
                text-align: justify;
                font-size: 15px;
            }
            .article-b{
                width: 100%;
                height: 200px;
                

            }
            .bis{
                margin-top: 100px;
            }
            .top-ligne1{
                margin-top: 50px;
            }
            h3{
                font-size: 19px;
            }

        }

       .accueil-img{
        background-image: url(image/paris-1836415_1280.jpg);
        background-repeat: no-repeat;
        background-size:cover;
        }

       .form-nom{
        margin:auto;
        }
       
    </style>

</head>
<body>



    <!-- partie header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=trajet">Trajet</a>
            </li>
        </ul>
    </div>
    </nav>
</header> 
<?php

if($page=='accueil'){
    require 'view/accueil.php';
}
if($page=='contact'){
    require 'view/contact.php';
}
if($page=='trajet'){
    require 'view/trajet.php';
}

?>


<!-- partie footer -->
<footer class="container text-center pb-4">
    <small>&copy; Ratp 2020</small>
</footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>