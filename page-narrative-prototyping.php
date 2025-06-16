<?php
/*
Template Name: Novel Prototyping
*/
get_header(); ?>

<style>
  /* (All your existing CSS is unchanged and preserved) */
  .module-video video { width: 100%; height: auto; max-width: 100%; }
  .novel-prototyping-container { padding: 0 1.5rem; background-color: #9AAFC5; }
  .process-title { font-size: 1.75rem; font-weight: 600; margin-bottom: 1rem; text-align: center; }
  .novel-prototyping-header-wrapper { width: 80%; margin: 0 auto; border: 5px solid #C8AE7D; border-radius: 0.5rem; background-color: #fff; padding: 2rem; margin-bottom: 2.5rem; }
  .process-image { width: 100%; min-height:50vh; object-fit: cover; border-radius: 0.5rem; margin-bottom: 0.25rem; }
  .novel-prototyping-header { background-size: cover; background-position: center; border-radius: 0.5rem; height: 200px; margin-bottom: 1rem; }
  .intro-text { padding: 1rem; }
  .novel-prototyping-modules .module { width: 80%; margin: 0 auto; border: 5px solid #C8AE7D; border-radius: 0.5rem; background-color: #fff; padding: 2rem; margin-bottom: 2.5rem; }
  .novel-prototyping-modules .module + .module { margin-top: 2.5rem; }
  .module-title { font-size: 1.75rem; margin-bottom: 1.25rem; }
  .module-description, .module-video, .module-assignment { margin-bottom: 1.25rem; }
  .office-hours, .survey { width: 80%; margin: 0 auto; border: 5px solid #C8AE7D; border-radius: 0.5rem; background-color: #fff; padding: 2rem; margin-bottom: 2.5rem; }
  .survey label { font-weight: 600; }
  .ending-cta { width: 80%; margin: 0 auto 2.5rem; border: 5px solid #C8AE7D; border-radius: 0.5rem; background-color: #fff; padding: 2rem; box-shadow: none; text-align: center; box-sizing: border-box; }
  .ending-cta-heading { font-size: 1.75rem; font-weight: 600; margin-bottom: 1.25rem; color: #374151; line-height: 1.2; }
  .ending-cta-button { display: inline-block; background: linear-gradient(to bottom, #06bdc0 5%, #06bdc0 100%); color: #fff; padding: 14px 28px; font-size: 1rem; font-weight: 600; border-radius: 5px; text-decoration: none; transition: opacity 0.2s ease; }
  .ending-cta-button:hover { opacity: 0.9; }

  @media (max-width: 575.98px) {
    .process-image { object-fit: cover; object-position: right center; }
  }
  @media (min-width: 576px) and (max-width: 767.98px) {
    .process-image { object-fit: cover; object-position: right center; }
  }
  @media (min-width: 768px) and (max-width: 991.98px) {
    .process-image { object-fit: cover; object-position: right center; }
  }
  @media (min-width: 992px) and (max-width: 1199.98px) {
    .process-image { object-fit: cover; object-position: center center; }
  }
  @media (min-width: 1200px) {
    .process-image { object-fit: cover; object-position: center center; }
  }
</style>

<?php
// Allow plugins like Content Control to hook into the_content if needed
echo apply_filters('the_content', '');

// Password check
if ( post_password_required() ) {
  echo get_the_password_form();
} else {
?>

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
      <div class="module-video">
        <?php $video_url = get_field("np1_mod{$i}_video"); if ($video_url): ?>
          <video controls class="w-full rounded">
            <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        <?php endif; ?>
      </div>
      <div class="module-description"><?php the_field("np1_mod{$i}_description"); ?></div>
      <div class="module-assignment"><strong>Assignment:</strong> <?php the_field("np1_mod{$i}_assignment"); ?></div>

      <?php
        $resources = [];

        $res1 = get_field("np1_mod{$i}_resource1");
        $res2 = get_field("np1_mod{$i}_resource2");
        $res3 = get_field("np1_mod{$i}_resource3");

        if ($res1) $resources[] = '<a href="' . esc_url($res1) . '" target="_blank" rel="noopener noreferrer">' . esc_html($res1) . '</a>';
        if ($res2) $resources[] = '<a href="' . esc_url($res2) . '" target="_blank" rel="noopener noreferrer">' . esc_html($res2) . '</a>';
        if ($res3) $resources[] = '<a href="' . esc_url($res3) . '" target="_blank" rel="noopener noreferrer">' . esc_html($res3) . '</a>';

        if (!empty($resources)) {
          echo '<div class="module-resources"><strong>Resources:</strong> ' . implode(', ', $resources) . '</div>';
        }
      ?>
    </div>
  <?php endfor; ?>
</div>


  <div class="ending-cta">
    <?php
      $cta_heading = get_field('ending_cta_heading');
      $cta_link    = get_field('ending_cta_button_link');
      $cta_text    = get_field('ending_cta_button_text');
    ?>
    <?php if( $cta_heading ): ?>
      <h3 class="ending-cta-heading"><?php echo esc_html( $cta_heading ); ?></h3>
    <?php endif; ?>
    <?php if( $cta_link && $cta_text ): ?>
      <a href="<?php echo esc_url( $cta_link ); ?>" class="calltoactionbtn"><?php echo esc_html( $cta_text ); ?></a>
    <?php endif; ?>
  </div>
</div>

<?php } // end password check ?>

<?php get_footer(); ?>
