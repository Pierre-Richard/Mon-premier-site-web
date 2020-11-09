<?php
$nom='';

if(isset($_POST['envoyer'])){
    $nom = $_POST['nom'];
    if($nom=='nom'){
        require 'reponse.php';
   
}
}
?>

<a href="../index.php">Retour</a>

<?php
    if(isset($_POST['envoyer'])){
?>

<div class="text-white" style="text-align: center;font-size:xx-large">
    <p>bonjour Monsieur <?php echo $nom; ?>, votre message a bien été envoyé</p>
</div>

<?php
    }
?>