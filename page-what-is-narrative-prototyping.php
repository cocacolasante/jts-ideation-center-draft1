<?php
/**
 * Template Name: What Is Narrative Prototyping
 * Template Post Type: page
 */


get_header(); ?>

<style>
  /* Responsive video embeds */
  .module-video video {
    width: 100%;
    height: auto;
    max-width: 100%;
  }

  /* Overall page padding + background */
  .novel-prototyping-container {
    padding: 0 1.5rem;
    background-color: #9AAFC5;
  }

  /* Page heading */
  .process-title {
    font-size: 1.75rem;
    font-weight: 600;
    margin: 1rem 0;
    text-align: center;
  }

  /* Header wrapper */
  .novel-prototyping-header-wrapper {
    width: 80%;
    margin: 0 auto 2.5rem;
    border: 5px solid #C8AE7D;
    border-radius: 0.5rem;
    background-color: #fff;
    padding: 2rem;
  }

  .process-image {
    width: 100%;
    min-height:50vh;
    object-fit: cover;
    border-radius: 0.5rem;
    margin-bottom: 0.25rem;
  }

  .intro-text {
    padding: 1rem;
  }

  /* Single Prototyping module */
  .novel-prototyping-modules .module {
    width: 80%;
    margin: 0 auto 2.5rem;
    border: 5px solid #C8AE7D;
    border-radius: 0.5rem;
    background-color: #fff;
    padding: 2rem;
  }
  .module-title {
    font-size: 1.75rem;
    margin-bottom: 1.25rem;
  }
  .module-content {
    margin-bottom: 1.25rem;
  }

  /* Call to action */
  .cta {
    text-align: center;
    margin: 2.5rem 0;
  }
  .cta .button {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    background-color: #C8AE7D;
    color: #fff;
    border-radius: 0.5rem;
    text-decoration: none;
    font-weight: 600;
  }

  .cta .button-box {
  width: 80%;
  margin: 0 auto;
  border: 5px solid #C8AE7D;    /* same border as your header/modules */
  border-radius: 0.5rem;
  background-color: #fff;       /* same bg as your other modules */
  padding: 2rem;
  text-align: center;
}

/* Re-use your existing “.button” styling */
.cta .button-box .button {
  display: inline-block;
  padding: 0.75rem 1.5rem;
  background-color: #C8AE7D;   /* same background as your first-page button */
  color: #fff;                  /* same text color */
  border-radius: 0.5rem;        /* same corner radius */
  text-decoration: none;
  font-weight: 600;
  cursor: pointer;
}
/* Extra‑small devices (portrait phones, <576px) */
@media (max-width: 575.98px) {
  .process-image {
    object-fit: cover;
    object-position: right center;
  }
}

/* Small devices (landscape phones, ≥576px and <768px) */
@media (min-width: 576px) and (max-width: 767.98px) {
  .process-image {
    object-fit: cover;
    object-position: right center;
  }
}

/* Medium devices (tablets, ≥768px and <992px) */
@media (min-width: 768px) and (max-width: 991.98px) {
  .process-image {
    object-fit: cover;
    object-position: right center;
  }
}

/* Large devices (desktops, ≥992px and <1200px) */
@media (min-width: 992px) and (max-width: 1199.98px) {
  .process-image {
    object-fit: cover;
    object-position: center center; /* switch back to center on larger */
  }
}

/* Extra‑large devices (large desktops, ≥1200px) */
@media (min-width: 1200px) {
  .process-image {
    object-fit: cover;
    object-position: center center;
  }
}

</style>

<div class="novel-prototyping-container">

  <!-- Heading -->
  
  <h2 class="process-title">What Is Narrative Prototyping</h2>


  <!-- Header Section -->
  <div class="novel-prototyping-header-wrapper">
    <?php if ( $img = get_field('novel_process_image') ): ?>
      <img
        src="<?php echo esc_url( $img['url'] ); ?>"
        alt="<?php echo esc_attr( $img['alt'] ); ?>"
        class="process-image"
      />
    <?php endif; ?>

    <div class="intro-text">
      
      <h2><?php if ( $t = get_field('novel_prototyping_heading') ) echo wp_kses_post( $t ); ?></h2>
      <?php if ( $t = get_field('novel_intro_text') ) echo wp_kses_post( $t ); ?>
    </div>
  </div>

  <!-- Single Prototyping Progression -->
  <?php
    $title   = get_field('progression_1_title');
    $content = get_field('progression_1_content');
    if ( $title || $content ): ?>
      <div class="novel-prototyping-modules">
        <div class="module">
          <?php if ( $title ): ?>
            <h3 class="module-title"><?php echo esc_html( $title ); ?></h3>
          <?php endif; ?>
          <?php if ( $content ): ?>
            <div class="module-content">
              <?php echo wp_kses_post( $content ); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
  <?php endif; ?>
<section class="testimonials">
  <div class="testimonial-carousel swiper">
      <h2>Testimonials</h2>
      <div class="swiper-wrapper">

        <!-- Testimonial 1 -->
        <div class="swiper-slide testimonial-card">
          <p class="testimonial-text">“My expectations were that you'd help me produce a memoir of the ilk that I wished I had from my great-great-grandfather. Beyond that, I really had no idea what to expect. What I ended up with was far more profound and much more impactful on me than I would have imagined."</p>
          <p class="testimonial-author">-Ollie Brooke</p>
        </div>

        <!-- Testimonial 2 -->
        <div class="swiper-slide testimonial-card">
          <p class="testimonial-text">"Embracing positive risk with creative content creation is a tough needle to thread. Julia Taus has these kinds of writing chops.”</p>
          <p class="testimonial-author">-Patrick Tinney</p>
        </div>

        <!-- Testimonial 3 -->
        <div class="swiper-slide testimonial-card">
          <p class="testimonial-text">“Be sure to contact this powerhouse. The definition of a Hero’s Story, if you want yours articulated, get in touch ASAP”</p>
          <p class="testimonial-author">-Cullen Haynes</p>
        </div>

        <!-- Testimonial 4 -->
        <div class="swiper-slide testimonial-card">
          <p class="testimonial-text">“Julia’s generous spirit and collaborative approach provide a sanctuary for like-minded writers and creators to connect and thrive.”</p>
          <p class="testimonial-author">-Mo MacRae</p>
        </div>

      </div>

      <!-- Swiper navigation buttons -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>
</section>
  <!-- Call To Action -->
   
  <?php if ( $cta = get_field('cta_text') ): ?>
  <div class="cta">
    
    <?php if ( $link = get_field('cta_button_link') ): ?>
      <div class="button-box">
        <p><?php echo wp_kses_post( nl2br( $cta ) ); ?></p>
       <?php
          // Grab ACF values (with a fallback URL if you like)
          $cta_link = get_field('cta_button_link') ?: '/narrative-prototyping';
          $cta_text = get_field('cta_button_text') ?: 'Get Started Today';
        ?>
        <a href="<?php echo esc_url( $cta_link ); ?>" class="button">
          <?php echo esc_html( $cta_text ); ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>


</div>
<!-- Community Popup HTML -->
<div id="community-popup" style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.6);z-index:9999;">
  <div style="
      background:#fff;
      width:90%;
      max-width:600px;        /* ↑ was 400px, now 600px */
      margin:5% auto;         /* pull it up a bit */
      padding:2rem;
      text-align:center;
      border-radius:0.5rem;
      animation:bounce-in 0.8s ease;
      overflow:auto;          /* in case content is tall */
    ">
    <h2>Join our FREE writers community</h2>

    <!-- Full‑width embed -->
    <iframe
      src="https://craftysavvyauthors.substack.com/embed"
      width="100%"            <!-- ↑ now fills the container -->
      height="400"            <!-- ↑ bump height if you like -->
      style="border:1px solid #EEE; background:#fff;"
      frameborder="0"
      scrolling="no"
    ></iframe>

    <button id="popup-close" style="
      background-color: red;
      color: white;
      border: none;
      border-radius: 0.25rem;
      padding: 0.5rem 1rem;
      cursor: pointer;
      margin-top: 1rem;
    ">✕ Close</button>
  </div>
</div>



<!-- Community Popup CSS -->
<style>
@keyframes bounce-in {
  0%   { transform: translateY(-200%); opacity:0; }
  60%  { transform: translateY(30px); opacity:1; }
  80%  { transform: translateY(-10px); }
  100% { transform: translateY(0); }
}
</style>

<!-- Community Popup JS -->
<script>
  // After 60 seconds, show the popup
  setTimeout(function(){
    document.getElementById('community-popup').style.display = 'block';
  }, 30000);

  // Close handler
  document.getElementById('popup-close').addEventListener('click', function(){
    document.getElementById('community-popup').style.display = 'none';
  });
</script>

<?php get_footer(); ?>
