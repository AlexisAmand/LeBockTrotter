<!-- Pied de page -->

<footer class="py-5 footer mt-auto">
  <div class="container">    
    <div class="row justify-content-between mt-3">
        <div class="col-12 col-md-5 text-start">

            <h4>A Propos</h4> 

            <hr class="py-0 my-4 text-white me-5">

            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalToggle" title="Contacter Le Bock Trotter">Me contacter</a><br />
            <a href="/biblio.php" title=" ">Bibliographie</a><br />
            <a href="/mentions-legales.php" title="lire les mentions légales du site">Mentions légales</a><br />

            <p class="mb-1 mt-4">Le Bock Trotter v. 0.4.347 &copy; <a href="https://www.boitasite.com" title="Agence de création et de référencement de site web">Boitasite</a> - 2021</p>

        </div>

        <div class="col-12 col-md-4 text-end mt-5 mt-md-0">    

            <h4>Me suivre</h4> 

            <hr class="py-0 my-4 text-white ms-5">

            <a href="https://www.facebook.com/LeBockTrotter/" title="Le Bock Trotter sur Facebook">
            <i class="bi bi-facebook fs-2 mx-2"></i></a>
            <a href="https://twitter.com/alexisamand/" title="Compte Twitter du webmaster">
            <i class="bi bi-twitter fs-2 mx-2"></i></a>
            <a href="https://www.instagram.com/alexisamand/" title="Compte Instagram du webmaster">
            <i class="bi bi-instagram fs-2 mx-2"></i></a>
            <a href="https://www.youtube.com/playlist?list=PLBwJ04KFkQil34mLL973aqii5KkIhqEnu" title="Le Bock Trotter sur Youtube">
            <i class="bi bi-youtube fs-2 mx-2"></i></a>

        </div>
    </div>
  </div>
</footer>

<!-- Affichage de la modal -->

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Envoyer un message</h5>
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
            <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">Fermer</button>
            <button type="send" class="btn">Envoyer</button>
          </div>
        
        </form>

      </div>

    </div>
  </div>
</div>

<!-- tarteaucitron.js -->

<script type="text/javascript">
tarteaucitron.user.matomoId = '7';
(tarteaucitron.job = tarteaucitron.job || []).push('matomo');
</script>

<script>tarteaucitron.user.matomoHost = "//matomo.boitasite.com/";</script>