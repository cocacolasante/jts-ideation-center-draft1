<?php
/*
Template Name: Novel Prototyping
*/
get_header(); ?>

<style>
  .module-video video { width: 100%; height: auto; max-width: 100%; }

  /* Overall page padding */
  .novel-prototyping-container { 
    
    padding: 0 1.5rem; 
    background-color: #9AAFC5;
  }

  /* Process section styling */
  .process-title { font-size: 1.75rem; font-weight: 600; margin-bottom: 1rem; text-align: center; }
  .novel-prototyping-header-wrapper {
    width: 80%;
    margin: 0 auto;
    border: 5px solid #C8AE7D;
    border-radius: 0.5rem;
    background-color: #fff;
    padding: 2rem;
    margin-bottom: 2.5rem;
  }
  .process-image {
    width: 100%;
    
    min-height:50vh;
    object-fit: cover;
    border-radius: 0.5rem;
    margin-bottom: 0.25rem; /* reduced space */
  }
  .novel-prototyping-header {
    background-size: cover;
    background-position: center;
    border-radius: 0.5rem;
    height: 200px;
    margin-bottom: 1rem;
  }
  .intro-text { padding: 1rem; }

  /* Modules styling */
  .novel-prototyping-modules .module {
    width: 80%;
    margin: 0 auto;
    border: 5px solid #C8AE7D;
    border-radius: 0.5rem;
    background-color: #fff;
    padding: 2rem;
    margin-bottom: 2.5rem;
  }
  .novel-prototyping-modules .module + .module { margin-top: 2.5rem; }
  .module-title { font-size: 1.75rem; margin-bottom: 1.25rem; }
  .module-description,
  .module-video,
  .module-assignment { margin-bottom: 1.25rem; }

  /* Office hours & survey */
  .office-hours,
  .survey {
    width: 80%;
    margin: 0 auto;
    border: 5px solid #C8AE7D;
    border-radius: 0.5rem;
    background-color: #fff;
    padding: 2rem;
    margin-bottom: 2.5rem;
  }
  .survey label { font-weight: 600; }
/* Ending CTA – match modules & header wrapper */
.ending-cta {
  width: 80%;
  margin: 0 auto 2.5rem;          /* centered, same bottom gap */
  border: 5px solid #C8AE7D;      /* same gold border */
  border-radius: 0.5rem;          
  background-color: #fff;         
  padding: 2rem;                  /* same padding as modules */
  box-shadow: none;               /* remove the old shadow */
  text-align: center;             
  box-sizing: border-box;
}

/* Heading – match .module-title */
.ending-cta-heading {
  font-size: 1.75rem;
  font-weight: 600;
  margin-bottom: 1.25rem;         /* same spacing as module titles */
  color: #374151;
  line-height: 1.2;
}

/* Button – you can keep your existing styling, or bump it up visually */
.ending-cta-button {
  display: inline-block;
  background: linear-gradient(to bottom, #06bdc0 5%, #06bdc0 100%);
  color: #fff;
  padding: 14px 28px;
  font-size: 1rem;
  font-weight: 600;
  border-radius: 5px;
  text-decoration: none;
  transition: opacity 0.2s ease;
}
.ending-cta-button:hover {
  opacity: 0.9;
}


</style>

<div class="novel-prototyping-container">
  <h2 class="process-title">The Narrative Prototyping Process</h2>
  <div class="novel-prototyping-header-wrapper">
    <?php if (get_field('np1_process_image')): ?>
      <img src="<?php the_field('np1_process_image'); ?>" alt="Process Image" class="process-image" />
    <?php endif; ?>
    
    <div class="intro-text">
      <?php the_field('np1_intro_text'); ?>
    </div>
    <?php if( $url = get_field('workbook_download') ): ?>
        <a href="<?php echo esc_url( $url ); ?>" download>
          Download Workbook
        </a>
      <?php endif; ?>
  </div>

  <div class="novel-prototyping-modules">
    <?php for ($i = 1; $i <= 5; $i++): ?>
      <div class="module">
        <h2 class="module-title"><?php the_field("np1_mod{$i}_title"); ?></h2>
        <div class="module-video"><?php $video_url = get_field("np1_mod{$i}_video"); if ($video_url): ?>
            <video controls class="w-full rounded"><source src="<?php echo esc_url($video_url); ?>" type="video/mp4">Your browser does not support the video tag.</video>
          <?php endif; ?></div>
        <div class="module-description"><?php the_field("np1_mod{$i}_description"); ?></div>
        <div class="module-assignment"><strong>Assignment:</strong> <?php the_field("np1_mod{$i}_assignment"); ?></div>
      </div>
    <?php endfor; ?>

  </div>

  <div class="ending-cta">
    <?php
      // grab the ACF values
      $cta_heading = get_field('ending_cta_heading');
      $cta_link    = get_field('ending_cta_button_link');
      $cta_text    = get_field('ending_cta_button_text');
    ?>

    <?php if( $cta_heading ): ?>
      <h3 class="ending-cta-heading">
        <?php echo esc_html( $cta_heading ); ?>
      </h3>
    <?php endif; ?>

    <?php if( $cta_link && $cta_text ): ?>
      <a
        href="<?php echo esc_url( $cta_link ); ?>"
        class="calltoactionbtn"
      >
        <?php echo esc_html( $cta_text ); ?>
      </a>
    <?php endif; ?>
  </div>


  
</div>

<?php get_footer(); ?>