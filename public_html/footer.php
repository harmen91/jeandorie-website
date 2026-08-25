<!-- Add jQuery library -->
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<!-- Infinte Client Logo -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="js/carousel.js"></script>
<!-- FancyBox OLD
<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
-->
<!-- FancyBox NEW -->
<script src="js/jquery.fancybox.js"></script>

<!-- Add Scroll Reveal Javascrip Library-->
<script src="js/scrollreveal.min.js"></script>
<script src="js/typewriter.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>

<!-- jQuery Shuffle JavaScript -->
<script src="js/jquery.shuffle.min.js"></script>
<script src="js/custom.js"></script>

<!-- Portrat Hover JavaScript -->
<script src="js/portraithover.js"></script>

<!-- Preload Hover Images Portraits -->
<script src="js/preloadimg.js"></script>


<!--[if lt IE 9]>
  <script>
     document.createElement('video');
  </script>
<![endif]-->

<!-- Various Javascript Settings -->
<script>
    var app = document.getElementById('tagline');

    var typewriter = new Typewriter(app, {
        loop: true
    });

    typewriter.typeString('A FUTURE MEDIA COLLECTIVE')
        .pauseFor(2500)
        .deleteAll()
        .typeString('WE MAKE VIDEO..')
        .pauseFor(2500)
        .deleteAll()
        .typeString('CUSTOM ANIMATIONS..')
        .pauseFor(2500)
        .deleteAll()
        .typeString('AND DO WEB DEVELOPMENT.')
        .pauseFor(2500)
        .deleteAll()
        .start();

        // FANCYBOX SETTINGS OLD
    $(document).ready(function() {
      // Scroll to Div
      $(".arrow").click(function() {
        $('html, body').animate({
          scrollTop: $("#2").offset().top
        }, 750);
      });
      // Fancybox Settings
      $('.fancybox-media').fancybox({
        padding : 0,
        openEffect  : 'none',
        closeEffect : 'none',
        helpers : {
          media : {}
        }
      });
      $('.fancybox-gallery').fancybox({
        padding : 0,
        openEffect  : 'none',
        closeEffect : 'none',
      });

      // Scroll Reveal Settings
      window.sr = ScrollReveal();
      sr.reveal('.portfolio-fade', { delay: 0 });
      sr.reveal('.marnix', { delay: 0 });
      sr.reveal('.harmen', { delay: 100});
      sr.reveal('.peter', { delay: 200});


    });

    var cards = $(".randomhead");
    for(var i = 0; i < cards.length; i++){
        var target = Math.floor(Math.random() * cards.length -1) + 1;
        var target2 = Math.floor(Math.random() * cards.length -1) +1;
        cards.eq(target).before(cards.eq(target2));
    }

</script>

</body>
