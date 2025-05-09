<?php get_header(); ?>
<main class="content">
    <section class="q_slider hero-section">'
    <div class="landing_text">
            <?php
              $hero_logo = function_exists('get_field') ? get_field('hero_logo') : false;
              if ( $hero_logo ) : ?>
                  <img class="logo" src="<?php echo esc_url( $hero_logo['url'] ); ?>" alt="<?php echo esc_attr( $hero_logo['alt'] ); ?>">
              <?php else : ?>
                  <img class="logo" src="<?php echo esc_url( get_template_directory_uri() . '/public/images/new-quill-logo-1.png' ); ?>" alt="Hero Logo">
              <?php endif; ?>
            <h1 class="landingwords"><?php echo function_exists('get_field') && get_field('hero_tagline') ? get_field('hero_tagline') : 'WE CAN HELP!'; ?></h1>
            <h3 class="landingwords2"><?php echo function_exists('get_field') && get_field('hero_subtag') ? get_field('hero_subtag') : 'Check us out today!'; ?></h3>

            <a href="<?php echo esc_url( get_permalink( get_page_by_path('contact-us') ) ); ?>"
                      class="calltoactionbtn">Let's Chat</a>
        </div>
    </section>

    <section class="second_landing">
        <div class="second_inner">
            <div class="landing_text">
                <h3 class="secondh3"><?php echo function_exists('get_field') && get_field('mission_statement') ? get_field('mission_statement') : 'At JT’s Ideation Center, we craft compelling marketing narratives for authors and entrepreneurs.'; ?></h3>
                <p><?php echo function_exists('get_field') && get_field('mission_paragraph') ? get_field('mission_paragraph') : 'Work with a team of creatives who specialize in helping you tell your story, grow your brand, and connect with your audience.'; ?></p>
            </div>
        </div>
    </section>

    
    <section class="section3">
      <h2>JT's Ideation Center's Differences</h2>
    <div class="inner_section3">
      <div class="sellingpoints">
        <div class="point">
          <div class="point-inner">
            <div class="point-front">
            <h3>
              <?php the_field('card_1_title'); ?>
            </h3>
            </div>
            <div class="point-back">
              <p><?php echo esc_html( get_field('card_1_content') ?: get_field('card_1_content','option') ); ?></p>
            </div>
          </div>
        </div>
        <div class="point">
          <div class="point-inner">
            <div class="point-front">
              <h3><?php echo get_field('card_2_title') ?: get_field('card_2_title','option'); ?></h3>
            </div>
            <div class="point-back">
              <p><?php echo esc_html( get_field('card_2_content') ?: get_field('card_2_content','option') ); ?></p>
            </div>
          </div>
        </div>
        <div class="point">
          <div class="point-inner">
            <div class="point-front">
              <h3><?php echo get_field('card_3_title') ?: get_field('card_3_title','option'); ?></h3>
            </div>
            <div class="point-back">
              <p><?php echo esc_html( get_field('card_3_content') ?: get_field('card_3_content','option') ); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>

    <?php if( function_exists('get_field') ): 
  // grab ACF values
  $about_title   = get_field('about_julia_title');
  $about_image   = get_field('about_julia_pic');
  $about_content = get_field('about_julia_content');
  
  // only render if at least one field exists
  if( $about_title || $about_image || $about_content ): ?>
  
  <section class="about-julia-section">
    <div class="about-julia-inner">
      
      <?php if( $about_title ): ?>
        <h2 class="about-julia-title">
          <?php echo esc_html( $about_title ); ?>
        </h2>
      <?php endif; ?>
      
      <?php if( $about_image ): ?>
        <div class="about-julia-image">
          <img 
            src="<?php echo esc_url( $about_image['url'] ); ?>" 
            alt="<?php echo esc_attr( $about_image['alt'] ?: 'About Julia' ); ?>"
          />
        </div>
      <?php endif; ?>
      
      <?php if( $about_content ): ?>
        <div class="about-julia-content">
          <?php echo wp_kses_post( $about_content ); ?>
        </div>
      <?php endif; ?>
      
    </div>
  </section>
  
<?php 
  endif;
endif; ?>

<div class="prod-cont">
  <section class="product-container">
    <?php 
      // helper if you need option‐fallbacks – remove if you’re pulling only from the page
      function acf_opt($k){ return get_field($k) ?: get_field($k,'option'); }

      // header‐variant map
      $hdr_map = [
        1 => 'starter',
        2 => 'standard',
        3 => 'npro',
        4 => 'premium',
      ];

      for( $i = 1; $i <= 4; $i++ ):
        // card wrapper classes
        $classes = ['product-card'];
        if( $i===2 )      $classes[] = 'product-card-middle';
        elseif( $i===4 )  $classes[] = 'product-card-last';

        // card ID
        $id = 'contactBtnPro' . ($i>1 ? $i : '');
    ?>
      <div id="<?php echo esc_attr($id) ?>"
           class="<?php echo esc_attr(implode(' ',$classes)); ?>">

        <?php if( $i === 1 ): 
          // === Card 1: title / subheader / title2 / one point ===
          $title   = acf_opt('prodcard1_title');
          $sub     = acf_opt('prodcard1_subheader');
          $title2  = acf_opt('prodcard1_title2');
          $point   = acf_opt('prodcard1_point');
        ?>
          <?php if( $title ): ?>
            <div class="card-header starter">
              <?php echo esc_html( $title ); ?>
            </div>
          <?php endif; ?>

          <?php if( $sub ): ?>
            <p class="card-subheader">
              <?php echo esc_html( $sub ); ?>
            </p>
          <?php endif; ?>

          <?php if( $title2 ): ?>
            <h4 class="card-title2">
              <?php echo esc_html( $title2 ); ?>
            </h4>
          <?php endif; ?>

          <?php if( $point ): ?>
            <p class="card-point">
              <?php echo esc_html( $point ); ?>
            </p>
          <?php endif; ?>

        <?php else: 
          // === Cards 2–4: your existing markup ===
          $title = acf_opt("prodcard{$i}_title");
          $sub   = acf_opt("prodcard{$i}_subheader");
          $p1    = acf_opt("prodcard{$i}_point1");
          $p2    = acf_opt("prodcard{$i}_point2");
          $p3    = acf_opt("prodcard{$i}_point3");
        ?>
          <?php if( $title ): ?>
            <div class="card-header <?php echo $hdr_map[$i]; ?>">
              <?php echo esc_html( $title ); ?>
            </div>
          <?php endif; ?>
          <?php if( $sub ): ?>
            <p><?php echo esc_html( $sub ); ?></p>
          <?php endif; ?>

          <ul class="checklist">
            <?php if($p1) echo '<li>'.esc_html($p1).'</li>'; ?>
            <?php if($p2) echo '<li>'.esc_html($p2).'</li>'; ?>
            <?php if($p3) echo '<li>'.esc_html($p3).'</li>'; ?>
          </ul>
        <?php endif; ?>

        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact-us'))); ?>"
           class="calltoactionbtn">Let's Chat</a>
      </div>
    <?php endfor; ?>
  </section>
</div>



<div class="text-wrapper-cta2">
          <h3><?php echo function_exists('get_field') && get_field('cta_headline') ? get_field('cta_headline') : 'Ready to bring your brand story to life?'; ?></h3>
          <p><?php echo function_exists('get_field') && get_field('cta_subtext') ? get_field('cta_subtext') : 'Let’s collaborate and craft something unforgettable.'; ?></p>
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('contact-us') ) ); ?>"
            class="calltoactionbtn">
            Let's Chat!
          </a>
      </div>


    <?php $cta_bg = function_exists('get_field') ? get_field('cta_background_image') : false; ?>

<section class="testimonials">
  <h2>Testimonials</h2>
  <div class="testimonial-cards">
    <div class="testimonial-card">
      <p class="testimonial-text">"My expectations were that you'd help me produce a memoir of the ilk that I wished I had from my great-great-grandfather. Beyond that, I really had no idea what to expect. What I ended up with was far more profound and much more impactful on me than I would have imagined. Ultimately, I feel like you've helped me unlock what will be much more than a memoir and have helped me contextualise entire chapters of my life into a narrative that brings me some really warm feelings and comfort."</p>
      <p class="testimonial-author">Ollie Brooke</p>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">"Julia’s workshop transformed how I see personal storytelling. She creates a space where vulnerability feels natural and guides you step by step to uncover the heart of your story. Her live feedback is sharp, insightful, and instantly applicable. Whether you're an entrepreneur, consultant, or simply refining your presentation skills, this experience is a game-changer. Even with my background in fundraising, I walked away with new tools to craft and share my story with greater impact. Julia isn’t just creative—she’s a masterful instructor who makes storytelling both accessible and powerful."</p>
      <p class="testimonial-author">Melissa Riley</p>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">"Embracing positive risk with creative content creation is a tough needle to thread. Julia Taus has these kinds of writing chops. I am a business writer. Every word in my three sales books matter. Julia has this mind set, only she does it in flow. I have only written in flow once in my life. Julia can do this at will.  Writing fiction to me seems like a bridge too far, but Julia describes it in creative, technical terms. If you plan to write a fictional book about brave women and men who survived impossible odds to live their destiny, then hire Julia Taus as your writing coach. Like I said, she has the chops to getcha there! I recommend Julia Taus!!"</p>
      <p class="testimonial-author">Patrick Tinney</p>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">"Anyone who engages openly in this workshop will come away empowered to connect with professionals at a deeper level. Julia walks you through turning a personal story into an authentic vehicle to share yourself, drive home your strengths, and invite deeper conversations.  What you create for yourself will be something you can have have in your toolbox in any future professional setting, especially in networking situations, putting together talks, or even a job interview."</p>
      <p class="testimonial-author">Ben Swofford</p>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">"Now, when I meet potential clients, I have a personal story that not only introduces me but also highlights my work as a brand strategist and marketer. By sharing my story, I create a lasting impression—helping clients get to know me, remember me, and understand how I can help them."</p>
      <p class="testimonial-author">Cindy Chang</p>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">"This workshop is great for contextualizing my experiences into a narrative that works for interviews and business contexts. I know what my career strengths are and I'm an avid storyteller, but I never thought about aligning them this way. I often share, but this made me think more critically and strategically about what I'm sharing and how."</p>
      <p class="testimonial-author">Paul Spenser</p>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">"I recommend to you all that engaging with Julia will be a big positive for you. She is a dedicated writer and content creator focused on always learning more and constantly improving and perfecting her craft. Her energy and positivity is boundless and a worthwhile journey to be part of. Help her, learn from her and enjoy the wave of excitement and output."</p>
      <p class="testimonial-author">Ross McCreath</p>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">"This workshop helps you confidently weave yourself into networking conversations and pitches with ease."</p>
      <p class="testimonial-author">Sarah Galbraith</p>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">"The workshop was incredibly practical, giving me the tools to craft meaningful stories around topics I hadn’t considered before. It opened my eyes to the power of storytelling in shaping my brand and engaging my audience. My biggest takeaway? Stories about my business aren’t just interesting—they’re essential."</p>
      <p class="testimonial-author">Dave Brown</p>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">“Julia is an excellent writer and communicator and an insightful collaborator.”</p>
      <p class="testimonial-author">Christopher Munden</p>
    </div>
    <div class="testimonial-card">“Be sure to contact this powerhouse. The definition of Hero’s Story, if you want yours articulated, get
      in touch ASAP.”“Julia is an excellent writer and communicator and an insightful collaborator.”</p>
      <p class="testimonial-author">Cullen P. Haynes</p>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">“Julia is a powerhouse creative whose ideas are matched only by her insatiable drive to bring them
to life. Her depth of knowledge around the power of story and the underlying structures that help us
develop and tell them is potent. Her generous spirit and collaborative approach provide a sanctuary
for like-minded writers and creators to connect and thrive. Creator, collaborator, doer - Julia does the
reps.”</p>
      <p class="testimonial-author">Mo MacRae</p>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">“Julia is a star! She has been incredibly helpful in giving me a fresh perspective on my work- she is
      very perceptive, insightful, and a great source of ideas and encouragement.”</p>
      <p class="testimonial-author">Aryajit Heppell</p>
    </div>
  </div>
</section>

<section class="outterCall" id="contact">
        <div class="callToAction">
            <div class="inner_calltoaction"<?php if ( $cta_bg ): ?> style="background-image:url('<?php echo esc_url($cta_bg['url']); ?>');"<?php endif; ?>>
                <div class="text-wrapper">
                    <h3><?php echo function_exists('get_field') && get_field('cta_headline') ? get_field('cta_headline') : 'Ready to bring your brand story to life?'; ?></h3>
                    <p><?php echo function_exists('get_field') && get_field('cta_subtext') ? get_field('cta_subtext') : 'Let’s collaborate and craft something unforgettable.'; ?></p>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path('contact-us') ) ); ?>"
                      class="calltoactionbtn">
                      Let's Chat!
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
  // Footer social links below CTA, above footer
  $links = array_filter([
    'LinkedIn'          => get_field('facebook_url'),
    'Substack'         => get_field('instagram_url'),
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
</main>
<?php get_footer(); ?>
