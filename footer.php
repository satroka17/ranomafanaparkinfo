<!--  footer -->
<footer>
        <div class="footer">
           <div class="container">
              <div class="row">
               <div class="row">
                  <!-- Other footer content -->
                  <button onclick="scrollToTop()" id="backToTopBtn" title="Go to top">
                    Back to Top
               </button>              </div>              </div>
           </div>
           <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <!-- Utilisation de flexbox pour aligner les éléments verticalement et répartir l'espace -->
                        <div class="bailleurs-logos" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                            <!-- Logo à gauche -->
                            <div class="logo-gauche">
                                <img src="images/logo1.jpg" alt="Logo Bailleurs 1" class="bailleur-logo" style="max-height: 70px; margin-top: 10px;"> <!-- Ajout du margin-top ici -->
                            </div>
        
                            <!-- Texte centré -->
                            <p style="margin: 0; text-align: center;">© 2024 All Rights Reserved.</p>
        
                            <!-- Logo à droite -->
                            <div class="logo-droite">
                                <img src="images/logo2.png" alt="Logo Bailleurs 2" class="bailleur-logo" style="max-height: 70px; margin-top: 10px;"> <!-- Ajout du margin-top ici -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
     </footer>
     <script>
      function scrollToTop() {
          document.body.scrollTop = 0; // Pour Safari
          document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE, et Opera
      }
  </script>
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.bundle.min.js"></script>
     <script src="js/jquery-3.0.0.min.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="js/custom.js"></script>
     <!-- Bootstrap JS (pour que les carrousels fonctionnent) -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
     
     </body>
     </html>