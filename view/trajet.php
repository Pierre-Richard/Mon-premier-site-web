<?php

if(isset($_POST['rechercher'])){
   $trajet= $_POST['trajet'];
   $arrivee= $_POST['arrivee'];
   $trasnport= $_POST['transport'];
   
if($trajet=='saint-denis' && $arrivee=='gare du nord' && $trasnport=='train'){
    echo 'Prendre la ligne H en direction de Paris';
}
if($trajet=='saint-denis' && $arrivee=='gare du nord' && $trasnport=='metro'){
    echo 'pas de trajet disponible';
}
if($trajet=='saint-denis' && $arrivee=='chatelet' && $trasnport=='train'){
    echo 'Prendre la ligne ligne H ou ligne D';
}
if($trajet=='saint-denis' && $arrivee=='chatelet' && $trasnport=='metro'){
    echo 'Ligne 13';
}
if($trajet=='saint-denis' && $arrivee=='gare de lyon' && $trasnport=='train'){
    echo 'Ligne H ou Ligne D';
}
if($trajet=='saint-denis' && $arrivee=='gare de lyon' && $trasnport=='metro'){
    echo 'pas de trajet disponible';
}
if($trajet=='gare du nord' && $arrivee=='saint-denis' && $trasnport=='train'){
    echo 'Ligne H';
}
if($trajet=='gare du nord' && $arrivee=='saint-denis' && $trasnport=='metro'){
    echo 'pas de trajet disponible';
}
if($trajet=='gare du nord' && $arrivee=='chatelet' && $trasnport=='train'){
    echo 'Ligne B';
}
if($trajet=='gare du nord' && $arrivee=='chatelet' && $trasnport=='metro'){
    echo 'pas de trajet disponible';
}
if($trajet=='gare du nord' && $arrivee=='gare de lyon' && $trasnport=='train'){
    echo 'Ligne D';
}
if($trajet=='gare du nord' && $arrivee=='gare de lyon' && $trasnport=='metro'){
    echo 'pas de trajet disponible';
}
if($trajet=='chatelet' && $arrivee=='saint-denis' && $trasnport=='train'){
    echo 'Ligne D';
}
if($trajet=='chatelet' && $arrivee=='saint-denis' && $trasnport=='metro'){
    echo 'pas de trajet disponible';
}
if($trajet=='chatelet' && $arrivee=='gare du nord' && $trasnport=='train'){
    echo 'Ligne D';
}
if($trajet=='chatelet' && $arrivee=='gare du nord' && $trasnport=='metro'){
    echo 'pas de trajet disponible';
}
if($trajet=='chatelet' && $arrivee=='gare de lyon' && $trasnport=='train'){
    echo 'Ligne D';
}
if($trajet=='chatelet' && $arrivee=='gare de lyon' && $trasnport=='metro'){
    echo 'Ligne 14';
}
if($trajet=='gare de lyon' && $arrivee=='saint-denis' && $trasnport=='train'){
    echo 'Ligne D';
}
if($trajet=='gare de lyon' && $arrivee=='saint-denis' && $trasnport=='metro'){
    echo 'pas de trajet disponible';
}
if($trajet=='gare de lyon' && $arrivee=='gare du nord' && $trasnport=='train'){
    echo 'Ligne D';
}
if($trajet=='gare de lyon' && $arrivee=='gare du nord' && $trasnport=='metro'){
    echo 'pas de trajet disponible';
}
if($trajet=='gare de lyon' && $arrivee=='chatelet' && $trasnport=='train'){
    echo 'Ligne D';
}
if($trajet=='gare de lyon' && $arrivee=='chatelet' && $trasnport=='metro'){
    echo 'ligne 14';
}
if($trajet=='saint-lazare' && $arrivee=='saint-denis' && $trasnport=='train'){
    echo 'pas de trajet disponible';
}
if($trajet=='saint-lazare' && $arrivee=='saint-denis' && $trasnport=='metro'){
    echo 'Ligne 13';
}
if($trajet=='saint-lazare' && $arrivee=='gare du nord' && $trasnport=='traiin'){
    echo 'Ligne E';
}
if($trajet=='saint-lazare' && $arrivee=='gare du nord' && $trasnport=='metro'){
    echo 'pas de trajet disponible';
}
if($trajet=='saint-lazare' && $arrivee=='chatelet' && $trasnport=='train'){
    echo 'pas de trajet disponible';
}
if($trajet=='saint-lazare' && $arrivee=='chatelet' && $trasnport=='metro'){
    echo 'Ligne 14';
}
if($trajet=='saint-lazare' && $arrivee=='gare de lyon' && $trasnport=='train'){
    echo 'pas de trajet disponible';
}
if($trajet=='saint-lazare' && $arrivee=='gare de lyon' && $trasnport=='metro'){
    echo 'Ligne 14';
}





//ça me permet de comparer de variable a variable.
if($trajet==$arrivee && $trasnport=='metro'){
    echo "Error: gare de depart et gare d'arrivées sont les memes";
}
if($trajet==$arrivee && $trasnport=='train'){
    echo "Error: gare de depart et gare d'arrivées sont les memes";
}




}


?>
<main class="trajet text-white">
<section class="container px-0 form-t">
    <h1>Vous êtes sur la page trajet</h1>
</section>
<section class="container px-0 mt-4">
    <div class="row">
        <div class="col-md-4 offset-4"> 
            <form action="index.php?page=trajet" method="POST">
                <div class="mt-2">
                    <label for="">Gare de Departs: </label>
                    <select name="trajet" class="form-control" required>
                        <option value=""></option>
                        <option value="saint-denis">Saint-Denis</option>
                        <option value="gare du nord">Gare du Nord</option>
                        <option value="chatelet">Chatelet</option>
                        <option value="gare de lyon">Gare de Lyon</option>
                        <option value="saint-lazare">Saint-Lazare</option>
                    </select>
                </div>
                <div class="mt-2">
                    <label for="">Gare de Arrivées: </label>
                    <select name="arrivee" class="form-control" required>
                        <option value=""></option>
                        <option value="saint-denis">Saint-Denis</option>
                        <option value="gare du nord">Gare du Nord</option>
                        <option value="chatelet">Chatelet</option>
                        <option value="gare de lyon">Gare de Lyon</option>
                        <option value="saint-lazare">Saint-Lazare</option>
                    </select>
                </div>
                <div class="mt-2">
                    <label for="">Transports: </label>
                    <select name="transport" class="form-control" required>
                        <option value=""></option>
                        <option value="train">Train</option>
                        <option value="metro">Metro</option>
                    </select>
                </div>
                <div class="mb-4">
                <label for="">Recherche: </label>
                <button type="submit" name="rechercher" class="form-control">Rechercher</button>
                </div>
            </form>
        </div>
    </div>
</section>
</main>


