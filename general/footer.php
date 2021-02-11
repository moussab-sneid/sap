  <footer>
    <!-- footer -->
    <section class="w3l-footer" >
      <div class="w3l-footer-16-main ">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 column">
              <div class="row">
                <div class="col-md-4 column">
                  <div class="contac">
                  <h3>Socité</h3>
                  <ul class="footer-gd-16">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="about.html">Qui sommes nous </a></li>
                    <li><a href="services.html">nos Services</a></li>
                    <li><a href="#">Investissez</a></li>
                    <li><a href="contact.html">Contact </a></li>
                  </ul>
                </div>
                </div>
              <div class="col-md-4 column mt-md-0 " style="margin-left: 200px;">
                  <h3>Contact</h3>
                  <ul class="footer-gd-16">
                    <div>
                      <i class="fa fa-location-arrow" style="font-size: 1em;"></i><h4 style="font-size: 14px;display: inline;padding-left: 5px;">Société d’Aménagement et de Promotion des Côtes et Zones Touristiques du Sénégal</h4>
                    </div>
                    

                    <div>
                      
                    </div>
                 
                  </ul>
                </div>
              
              </div>

            </div>
              
            <div class="col-lg-6 col-md-12 column pl-lg-5 column4 mt-lg-0 mt-5">
            <img src="./images/sapco_cre.png" style="background-size: cover;background-repeat: no-repeat; width: 430px;height: 23

            0px;float: right;">
              
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- //move top -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
    </section>
    <!-- //footer -->
  </footer>