<?php get_header(); ?>
<main class="content">
    <section class="q_slider" style="background-image: url('<?php echo esc_url(get_field('hero_background') ?: get_template_directory_uri() . '/public/images/headinglayout.jpg'); ?>'); background-size: cover; background-position: center;">
    <div class="landing_text">
            <?php
$hero_logo = function_exists('get_field') ? get_field('hero_logo') : false;
if ( $hero_logo ) : ?>
    <img class="logo" src="<?php echo esc_url( $hero_logo['url'] ); ?>" alt="<?php echo esc_attr( $hero_logo['alt'] ); ?>">
<?php else : ?>
    <img class="logo" src="<?php echo esc_url( get_template_directory_uri() . '/public/images/new-quill-logo-1.png' ); ?>" alt="Hero Logo">
<?php endif; ?>
            <h1 class="landingwords"><?php echo function_exists('get_field') && get_field('hero_headline') ? get_field('hero_headline') : 'WE CAN HELP!'; ?></h1>
            <button class="calltoactionbtn" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">Contact Us</button>
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
      <h2>Ideation Center's Differences</h2>
    <div class="inner_section3">
      <div class="sellingpoints">
        <div class="point">
          <div class="point-inner">
            <div class="point-front">
              <h3><?php echo esc_html( get_field('card_1_title') ?: get_field('card_1_title','option') ); ?></h3>
            </div>
            <div class="point-back">
              <p><?php echo esc_html( get_field('card_1_content') ?: get_field('card_1_content','option') ); ?></p>
            </div>
          </div>
        </div>
        <div class="point">
          <div class="point-inner">
            <div class="point-front">
              <h3><?php echo esc_html( get_field('card_2_title') ?: get_field('card_2_title','option') ); ?></h3>
            </div>
            <div class="point-back">
              <p><?php echo esc_html( get_field('card_2_content') ?: get_field('card_2_content','option') ); ?></p>
            </div>
          </div>
        </div>
        <div class="point">
          <div class="point-inner">
            <div class="point-front">
              <h3><?php echo esc_html( get_field('card_3_title') ?: get_field('card_3_title','option') ); ?></h3>
            </div>
            <div class="point-back">
              <p><?php echo esc_html( get_field('card_3_content') ?: get_field('card_3_content','option') ); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>


    <section class="product-container">
  <div class="product-header-container">
    <h2>The Storytelling Packages You Need</h2>
    <h3>Creative guidance for any stage</h3>
  </div>

  <?php for ( $i = 1; $i <= 3; $i++ ): 
    // pull in the ACF values
    $title     = get_field("prodcard{$i}_title");
    $sub       = get_field("prodcard{$i}_subheader");
    $p1        = get_field("prodcard{$i}_point1");
    $p2        = get_field("prodcard{$i}_point2");
    $p3        = get_field("prodcard{$i}_point3");
    $price     = get_field("prodcard{$i}_price");

    // card wrapper classes & IDs
    $card_classes = [ 'product-card' ];
    if ( $i === 2 ) {
      $card_classes[] = 'product-card-middle';
    }
    $card_id = 'contactBtnPro' . ( $i === 1 ? '' : $i );

    // header variant classes
    $hdr_classes = [ 'card-header' ];
    if ( $i === 1 )    { $hdr_classes[] = 'starter'; }
    elseif ( $i === 2 ){ $hdr_classes[] = 'standard'; }
    else               { $hdr_classes[] = 'npro'; }
  ?>
    <div class="<?php echo esc_attr( implode(' ', $card_classes) ); ?>"
         id="<?php echo esc_attr( $card_id ); ?>">
      
      <?php if ( $title ): ?>
        <div class="<?php echo esc_attr( implode(' ', $hdr_classes) ); ?>">
          <?php echo esc_html( $title ); ?>
        </div>
      <?php endif; ?>

      <?php if ( $i === 2 ): // Most Popular badge ?>
        <i>For Entrepreneurs, Authors, and Speakers</i>
      <?php elseif ( $i === 3 && $sub ): // Limited availability ?>
        <p id="limitedavail"><?php echo esc_html( $sub ); ?></p>
      <?php elseif ( $sub ): // subheader for cards 1 & 2 ?>
        <p><?php echo esc_html( $sub ); ?></p>
      <?php endif; ?>

      <ul class="checklist">
        <?php if ( $p1 ) echo '<li class="list_item">' . esc_html($p1) . '</li>'; ?>
        <?php if ( $p2 ) echo '<li class="list_item">' . esc_html($p2) . '</li>'; ?>
        <?php if ( $p3 ) echo '<li class="list_item">' . esc_html($p3) . '</li>'; ?>
      </ul>

      <?php if ( $price ): ?>
        <h6>
          <?php 
            // re-add “Price:” for cards 1 & 2
            echo ( $i < 3 ? 'Price: ' : '' ) . esc_html( $price ); 
          ?>
        </h6>
      <?php endif; ?>
    </div>
  <?php endfor; ?>
</section>


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
                      Contact Us Today
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
  // Footer social links below CTA, above footer
  $links = array_filter([
    'Facebook'          => get_field('facebook_url'),
    'Instagram'         => get_field('instagram_url'),
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
