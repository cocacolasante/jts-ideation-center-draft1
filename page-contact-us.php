<?php

get_header();
$bg_image = get_field('contact_bg_image');
?>
<div>
  <div class="contact-bg-wrapper"<?php if($bg_image): ?> style="background-image: url('<?php echo esc_url($bg_image); ?>');"<?php endif; ?>>
    <div class="contact-page-container">
        <div class="contact-page-hours" >
        <p>Contact Us</p>
       
      </br>
      <p>Join our FREE Writing Community: <a href="<?php the_field('contact_us_substack'); ?>">SubStack</a></p>
          </br>
          <p><a href="<?php the_field('contact_us_phone'); ?>">LinkedIn</a></p>
          
          
        </br>
        <p>Email Us: <?php the_field('contact_us_email'); ?> </p>
      
      </div>
    <main class="contact-page">
      <h1>Contact Us</h1>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.14/iframeResizer.min.js"></script><iframe src="https://hello.dubsado.com/public/form/view/681e576a42f206003a4fe744" frameborder="0" style="width:1px; min-width:100%;"></iframe><script type="text/javascript">setTimeout(function(){iFrameResize({checkOrigin: false, heightCalculationMethod: "taggedElement"});}, 30)</script>

            
    </main>
    </div>
    <div class="scheduler-wrapper">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.14/iframeResizer.min.js"></script>
  <iframe
    id="dubsado-scheduler"
    src="https://hello.dubsado.com:443/public/appointment-scheduler/68193c7bd4730b003aa6f2c3/schedule?isIframe=true"
    scrolling="no"
  ></iframe>
</div>
</div>
  <?php
  // Footer social links below CTA, above footer
  $links = array_filter([
    'LinkedIn'          => get_field('facebook_url'),
    'SubStack'         => get_field('instagram_url'),
    'Creative Portfolio'=> get_field('creative_portfolio_url'),
  ]);
  if( $links ): ?>
    <div class="footer-social-links">
      <?php
        $i = 0;
        $total = count($links);
        foreach( $links as $label => $url ): $i++; ?>
          <a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url($url); ?>"><?php echo esc_html($label); ?></a><?php if( $i < $total ) echo ' | '; ?>
      <?php endforeach; ?>
    </div>
<?php endif; ?>
  </div>
<?php get_footer(); ?>
