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
    max-height: 250px;
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
</style>

<div class="novel-prototyping-container">
  <h2 class="process-title">The Process</h2>
  <div class="novel-prototyping-header-wrapper">
    <?php if (get_field('np1_process_image')): ?>
      <img src="<?php the_field('np1_process_image'); ?>" alt="Process Image" class="process-image" />
    <?php endif; ?>
    
    <div class="intro-text">
      <?php the_field('np1_intro_text'); ?>
    </div>
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
  <?php if ( get_field('np1_out_title') || get_field('np1_outro') ): ?>
    <div class="module">
      <?php if ( get_field('np1_out_title') ): ?>
        <h2 class="module-title"><?php the_field('np1_out_title'); ?></h2>
      <?php endif; ?>
      <?php if ( get_field('np1_outro') ): ?>
        <div class="module-description"><?php the_field('np1_outro'); ?>
        
      </div>
      <?php endif; ?>
      <?php if( $url = get_field('workbook_download') ): ?>
        <a href="<?php echo esc_url( $url ); ?>" download>
          Download Workbook
        </a>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  </div>

  <div class="office-hours">
    <p>Office Hours</p>
    <?php the_field('contact_us_hours_m_f'); ?>
      </br>
      <?php the_field('contact_us_hours_sat'); ?>
      </br>
      <?php the_field('contact_us_hours_sun'); ?></div>
  <div class="survey">
    <form>
      <label class="block mb-4"><?php the_field('np1_survey_question'); ?></label>
      <?php $options = explode("\n", get_field('np1_survey_options')); foreach ($options as $option): $option = trim($option); ?>
        <div class="mb-2"><input type="radio" name="survey" value="<?php echo esc_attr($option); ?>"> <?php echo esc_html($option); ?></div>
      <?php endforeach; ?>
      <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg">Submit</button>
    </form>
  </div>
</div>

<?php get_footer(); ?>