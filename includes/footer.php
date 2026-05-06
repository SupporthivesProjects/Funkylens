
<section class="evlated-section">
    <div class="container">
       <p>Elevate your projects with our premium imagery. <a href="#">Start now</a>.</p>
    </div>
</section>
<footer class="footer-bg">
      <div class="container">
        <div class="col">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
              <div class="footer-logo">
                  <div class="f-logo-img">
                    <img src="./img/f-logo.svg" alt="" class="img-fluid">
                  </div>
                  <div class="footer-menu-list">
                     <ul>
                       <li>
                         <a href="#">Browse</a>
                       </li>
                       <li>
                         <a href="#">Pricing & Perks</a>
                       </li>
                       <li>
                         <a href="#">About Us</a>
                       </li>
                       <li>
                         <a href="#">FAQ’s</a>
                       </li>
                       <li>
                         <a href="#">Contact Us</a>
                       </li>
                     </ul>
                  </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
              <div class="footer-right">
                  <img src="./img/Mastercard.png" alt="" class="img-fluid">
                  <p>
                    123 Street, Something Hill, City,Country, ABC 123.<br>
                    Enquiry@funkylens, +11 123 4567 890
                  </p>
              </div>
            </div>
          </div>
          <div class="row  footer-divider">
             <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-lg-0 order-1">
                  <p>© 2026 FunkyLens. All rights reserved.</p>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <ul>
                    <li>
                      <a href="tc.php">Terms</a>
                    </li>
                    <li>
                      <a href="pp.php">Privacy</a>
                    </li>
                    <li>
                      <a href="#">Cookies</a>
                    </li>
                  </ul>
             </div>
          </div>
        </div>
      </div>
</footer>
</div>
    <script src="uiframe/js/jquery.min.js"></script>
    <script src="uiframe/js/bootstrap.bundle.min.js"></script>
    <script src="uiframe/js/popper.min.js"></script>
    <script src="uiframe/js/slick.js"></script>
    <script src="uiframe/js/owl.carousel.js"></script>
    <script src="uiframe/js/swiper-bundle.min.js"></script>
    <script src="uiframe/js/flickity.pkgd.min.js"></script>   
    <script src="uiframe/js/aos.js"></script>
    <script src="./uiframe/js/home-js.js"></script>
    <script>
      $(document).ready(function () {
          $(".navbar-toggler").click(function () {
              $(this).toggleClass("is-active");
              $("header").toggleClass("header-is-active");

              let logo = $("#logo");
              if (logo.attr("src") === "./img/logo.svg") {
                  logo.attr("src", "./img/logo.svg");
              } else {
                  logo.attr("src", "./img/logo.svg");
              }
          });
      });
    </script>
    <script>
      $('#filterid').on('click', function(event) {
          $('#filterBox').slideToggle(300);
          $('#filterBox').toggleClass('open');
          event.preventDefault();
      });
      $(document).ready(function(){
        $("#filter-close").click(function(){
          $("#filterBox").slideUp("slow");
        });
      });
      document.querySelectorAll(".ul-filter-menu h3").forEach(header => {
        header.addEventListener("click", () => {
          const body = header.nextElementSibling;

          body.classList.toggle("open");     // toggle body
          header.classList.toggle("active"); // toggle class on h3
        });
      });
    </script>
    <script>
      function selectCurrency(currency, flagSrc) {
          const btn = document.getElementById("currencyBtn");
          const flag = document.getElementById("currencyFlag");
          btn.innerHTML = `${currency} <img id="currencyFlag" src="${flagSrc}" class="img-fluid">`;
      }
    </script>
    <script>
      window.addEventListener('scroll', function() {
          var content = document.querySelector('header');
          var scrollPosition = window.scrollY;
          if (scrollPosition > 10) {
              content.classList.add("header-scroll")
          } else {
              content.classList.remove("header-scroll")
          }
      });
    </script>
    <script>
      AOS.init();
    </script>
</body>
</html>
  