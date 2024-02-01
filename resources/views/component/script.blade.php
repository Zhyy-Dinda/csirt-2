<script src="dist/libs/jquery/dist/jquery.min.js"></script>
  <script src="dist/libs/aos/dist/aos.js"></script>
  <script src="dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="dist/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="dist/js/custom.js"></script>
  <script>
    // change URL Js
    $(function () {
      let currentURL =
        window.location != window.parent.location
          ? document.referrer
          : document.location.href;
      if (currentURL == "https://themeforest.net/") {
        $("a.download-link").attr(
          "href",
          "#"
        );
      } else {
        $("a.download-link").attr(
          "href",
          "https://adminmart.com/product/modernize-react-mui-dashboard-template/"
        );
      }
    });
  </script>

  