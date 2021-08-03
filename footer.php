<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h4>Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
      </div>
      <div class="col-lg-6">
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contact Us</h4>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>

      </div>

      <div class="col-lg-3 col-md-6 footer-info">
        <h3>About Anyar</h3>
        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>Anyar</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>
</footer>
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/aos/aos.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>



<!-- Swiper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.js'></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

</script>

<script>
  function get_bloginfo( $show = '', $filter = 'raw' ) {
    switch ( $show ) {
        case 'home':    // Deprecated.
        case 'siteurl': // Deprecated.
            _deprecated_argument(
                __FUNCTION__,
                '2.2.0',
                sprintf(
                    /* translators: 1: 'siteurl'/'home' argument, 2: bloginfo() function name, 3: 'url' argument. */
                    __( 'The %1$s option is deprecated for the family of %2$s functions. Use the %3$s option instead.' ),
                    '<code>' . $show . '</code>',
                    '<code>bloginfo()</code>',
                    '<code>url</code>'
                )
            );
            // Intentional fall-through to be handled by the 'url' case.
        case 'url':
            $output = home_url();
            break;
        case 'wpurl':
            $output = site_url();
            break;
        case 'description':
            $output = get_option( 'blogdescription' );
            break;
        case 'rdf_url':
            $output = get_feed_link( 'rdf' );
            break;
        case 'rss_url':
            $output = get_feed_link( 'rss' );
            break;
        case 'rss2_url':
            $output = get_feed_link( 'rss2' );
            break;
        case 'atom_url':
            $output = get_feed_link( 'atom' );
            break;
        case 'comments_atom_url':
            $output = get_feed_link( 'comments_atom' );
            break;
        case 'comments_rss2_url':
            $output = get_feed_link( 'comments_rss2' );
            break;
        case 'pingback_url':
            $output = site_url( 'xmlrpc.php' );
            break;
        case 'stylesheet_url':
            $output = get_stylesheet_uri();
            break;
        case 'stylesheet_directory':
            $output = get_stylesheet_directory_uri();
            break;
        case 'template_directory':
        case 'template_url':
            $output = get_template_directory_uri();
            break;
        case 'admin_email':
            $output = get_option( 'admin_email' );
            break;
        case 'charset':
            $output = get_option( 'blog_charset' );
            if ( '' === $output ) {
                $output = 'UTF-8';
            }
            break;
        case 'html_type':
            $output = get_option( 'html_type' );
            break;
        case 'version':
            global $wp_version;
            $output = $wp_version;
            break;
        case 'language':
            /*
             * translators: Translate this to the correct language tag for your locale,
             * see https://www.w3.org/International/articles/language-tags/ for reference.
             * Do not translate into your own language.
             */
            $output = __( 'html_lang_attribute' );
            if ( 'html_lang_attribute' === $output || preg_match( '/[^a-zA-Z0-9-]/', $output ) ) {
                $output = determine_locale();
                $output = str_replace( '_', '-', $output );
            }
            break;
        case 'text_direction':
            _deprecated_argument(
                __FUNCTION__,
                '2.2.0',
                sprintf(
                    /* translators: 1: 'text_direction' argument, 2: bloginfo() function name, 3: is_rtl() function name. */
                    __( 'The %1$s option is deprecated for the family of %2$s functions. Use the %3$s function instead.' ),
                    '<code>' . $show . '</code>',
                    '<code>bloginfo()</code>',
                    '<code>is_rtl()</code>'
                )
            );
            if ( function_exists( 'is_rtl' ) ) {
                $output = is_rtl() ? 'rtl' : 'ltr';
            } else {
                $output = 'ltr';
            }
            break;
        case 'name':
        default:
            $output = get_option( 'blogname' );
            break;
    }
 
    $url = true;
    if ( strpos( $show, 'url' ) === false &&
        strpos( $show, 'directory' ) === false &&
        strpos( $show, 'home' ) === false ) {
        $url = false;
    }
 
    if ( 'display' === $filter ) {
        if ( $url ) {
            /**
             * Filters the URL returned by get_bloginfo().
             *
             * @since 2.0.5
             *
             * @param string $output The URL returned by bloginfo().
             * @param string $show   Type of information requested.
             */
            $output = apply_filters( 'bloginfo_url', $output, $show );
        } else {
            /**
             * Filters the site information returned by get_bloginfo().
             *
             * @since 0.71
             *
             * @param mixed  $output The requested non-URL site information.
             * @param string $show   Type of information requested.
             */
            $output = apply_filters( 'bloginfo', $output, $show );
        }
    }
 
    return $output;
}
</script>

</body>
</html>