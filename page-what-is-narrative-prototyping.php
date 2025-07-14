<?php
/**
 * Template Name: What Is Narrative Prototyping
 * Template Post Type: page
 */

echo "<!-- LOADED What Is Narrative Prototyping template -->";

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
<section class="testimonials">
    <h2>Testimonials</h2>
    <div class="testimonial-carousel swiper">
      <div class="swiper-wrapper">

        <!-- Testimonial 1 -->
        <div class="swiper-slide testimonial-card">
          <p class="testimonial-text">"Julia’s workshop transformed how I see personal storytelling. Even with my background in fundraising, I walked away with new tools to craft and share my story with greater impact. Julia isn’t just creative—she’s a masterful instructor who makes storytelling both accessible and powerful."</p>
          <p class="testimonial-author">Melissa Riley</p>
        </div>

        <!-- Testimonial 2 -->
        <div class="swiper-slide testimonial-card">
          <p class="testimonial-text">“Julia has been incredibly helpful in giving me a fresh perspective on my work- she is very perceptive, insightful, and a great source of ideas and encouragement.”</p>
          <p class="testimonial-author">Aryajit Heppell</p>
        </div>

        <!-- Testimonial 3 -->
        <div class="swiper-slide testimonial-card">
          <p class="testimonial-text">"I recommend to you all that engaging with Julia will be a big positive for you. Her energy and positivity are boundless, and a worthwhile journey to be part of. Help her, learn from her and enjoy the wave of excitement and output."</p>
          <p class="testimonial-author">Ross McCreath</p>
        </div>

        <!-- Testimonial 4 -->
        <div class="swiper-slide testimonial-card">
          <p class="testimonial-text">“Julia is an excellent writer and communicator and an insightful collaborator.”</p>
          <p class="testimonial-author">Christopher Munden</p>
        </div>

      </div>

      <!-- Swiper navigation buttons -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>

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
