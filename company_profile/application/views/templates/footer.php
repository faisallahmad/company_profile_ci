
<a class="top-link hide" href="" id="js-top">
  <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M12 6H0l6-6z"/></svg> -->
  <span class="screen-reader-text">Back to top</span>
</a>

<!-- <div class=" fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;display: none;">
  <a href="#topSection" class="btn-floating btn-large red">
    <i class="fa fa-arrow-up"></i>
  </a>
</div> -->



 <!-- Footer -->
<footer class="page-footer font-small grey">


<!-- Copyright -->
<div class="footer-copyright text-center py-5">
  <div class='text-center'>
    <span>
      <a style="font-weight: bold; color: white; font-size: 17">Imprint</a>
      <a>|</a>
      <a style="font-weight: bold; color: white; font-size: 17">Privacy Notice</a>
      <a>|</a>
       <a style="font-weight: bold; color: white; font-size: 17">Contact</a>
      <a>|</a>
      <a style="font-weight: bold; color: white; font-size: 17">Download</a>
     </span>

  <!-- Grid row-->
  <div class="row">

<!-- Grid column -->
<div class="col-md-12 py-1">
  <div class="mb-5 flex-center">
    <!-- Facebook -->
    <a class="fb-ic">
      <!-- <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i> -->
      <img style="max-height: 25px; max-width: 25px;" src="<?php echo base_url() ?>assets/img/facebook.png" class="mr-md-5 mr-1 fa-2x">
    </a>
    <!-- Twitter -->
    <a class="tw-ic">
      <!-- <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i> -->
      <img style="max-height: 25px; max-width: 25px;" src="<?php echo base_url() ?>assets/img/youtube.png" class="mr-md-5 mr-1 fa-2x">
    </a>
    <!-- Google +-->
    <a class="gplus-ic">
      <!-- <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i> -->
      <img style="max-height: 25px; max-width: 25px;" src="<?php echo base_url() ?>assets/img/facebook.png" class="mr-md-5 mr-1 fa-2x">
    </a>
    <!--Linkedin -->
    <a class="li-ic">
      <!-- <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i> -->
      <img style="max-height: 25px; max-width: 25px;" src="<?php echo base_url() ?>assets/img/linkedin.png" class="mr-md-5 mr-1 fa-2x">
    </a>
    <!--Instagram-->
    <a class="ins-ic">
      <!-- <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i> -->
      <img style="max-height: 25px; max-width: 25px;" src="<?php echo base_url() ?>assets/img/instagram.png" class="mr-md-5 mr-1 fa-2x">

    </a>
  </div>
</div>
</div>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
    <script>
// Set a variable for our button element.
const scrollToTopButton = document.getElementById('js-top');

// Let's set up a function that shows our scroll-to-top button if we scroll beyond the height of the initial window.
const scrollFunc = () => {
        // Get the current scroll value
        let y = window.scrollY;
        
        // If the scroll value is greater than the window height, let's add a class to the scroll-to-top button to show it!
        if (y > 0) {
            scrollToTopButton.className = "top-link show";
        } else {
            scrollToTopButton.className = "top-link hide";
        }
        };

        window.addEventListener("scroll", scrollFunc);

        const scrollToTop = () => {
        // Let's set a variable for the number of pixels we are from the top of the document.
        const c = document.documentElement.scrollTop || document.body.scrollTop;
        
        // If that number is greater than 0, we'll scroll back to 0, or the top of the document.
        // We'll also animate that scroll with requestAnimationFrame:
        // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
        if (c > 0) {
            window.requestAnimationFrame(scrollToTop);
            // ScrollTo takes an x and a y coordinate.
            // Increase the '10' value to get a smoother/slower scroll!
            window.scrollTo(0, c - c / 10);
        }
        };

        // When the button is clicked, run our ScrolltoTop function above!
        scrollToTopButton.onclick = function(e) {
        e.preventDefault();
        scrollToTop();
        }
    </script>

    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>

