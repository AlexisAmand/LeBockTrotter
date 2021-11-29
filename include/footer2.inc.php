<!-- Lien de retour en haut de la page -->

<footer class="py-5 fixed-bottom">
  <div class="container">    
    <div class="row justify-content-between mt-3">
        <div class="col-12 col-md-5 text-start">

            <h4>A Propos</h4> 

            <hr class="py-0 my-4 text-white me-5">

            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Me contacter</a><br />
            <a href="#">Mentions légales</a><br />
            <a href="#">Bibliographie</a><br />

            <p class="mb-1 mt-4">Le Bock Trotter v. 0.3.5 &copy; <a href="https://www.boitasite.com">Boitasite</a> - 2021</p>
        </div>

        <div class="col-12 col-md-4 text-end mt-5 mt-md-0">    

            <h4>Me suivre</h4> 

            <hr class="py-0 my-4 text-white ms-5">

            <a href="#"><i class="bi bi-facebook fs-2 mx-2"></i></a>
            <a href="#"><i class="bi bi-twitter fs-2 mx-2"></i></a>
            <a href="#"><i class="bi bi-instagram fs-2 mx-2"></i></a>
        </div>
    </div>
  </div>
</footer>

<!-- Affichage de la modal -->

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- Affichage du formulaire -->

        <form method="POST" action="message.php">

        <div class="form-group">
				<label>Nom (*)</label>
				<input type="text" name="nom" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Courriel (*)</label>
				<input type="text" name="courriel" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Message (*)</label>
				<textarea name="message" class="form-control" rows="5" required></textarea>
			</div>
        
            <p>(*) Tous les champs doivent être complétés</p>

            <div class="modal-footer">
                <button type="send" class="btn btn-primary">Back to first</button>
            </div>
        
        </form>

      </div>

    </div>
  </div>
</div>