<main class="container">
    <section class="mt-4">
        <h2>Bienvenue sur la page Contact</h2>
    </section>
    <section class="m-3">
        <div class="row">
            <div class="form-nom">
                <form action="view/reponse.php" method="POST">
                    <label for="">Nom:</label>
                    <input type="text" class="form-control" name="nom" required>

                    <label for="">Email: </label>
                    <input type="email" class="form-control" name="email" required>
                    <br>
                    <label for="">Message: </label>
                    <textarea name="message" class="form-control" cols="30" rows="5"></textarea>
                    <br>
                    <button type="submit" class="form-control" name="envoyer">Envoyer</button>
                </form>
            </div>
        </div>
    </section>
</main>