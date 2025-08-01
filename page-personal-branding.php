<?php
get_header();
?>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');
  * { margin: 0; padding: 0; box-sizing: border-box; }
  body { font-family: 'Raleway', sans-serif; color: #333; line-height: 1.6; }
  .container { display: flex; gap: 30px; padding: 40px 20px; max-width: 1200px; margin: 0 auto; }

  .main-content { 
    flex: 2; 
    background: #f8f8f8;
    padding: 20px; border-radius: 8px;
  }
  .banner-image {
    width: 100%;
    max-height: 300px;
    display: block;
    margin: 0 auto 20px;
  }

  .header-section h1.main-title { font-size: 2.5rem; font-weight: 700; }
  .header-section .emoji { font-size: 1.5rem; }
  .header-section hr { border: none; border-top: 2px solid #333; margin: 15px 0; }
  .sub-title { font-weight: 700; margin-bottom: 10px; }

  .features-list,
  .benefits-list { list-style: none; margin: 20px 0; padding-left: 0; }
  .features-list li,
  .benefits-list li { margin-bottom: 10px; }

  .alert {
    margin: 30px 0 15px;
    font-weight: 600;
  }

  .testimonial {
    display: flex;
    align-items: center;
    background: #007bff;
    color: #fff;
    border-radius: 8px;
    padding: 15px;
    margin-top: 30px;
  }
  .testimonial .avatar {
    width: 60px; height: 60px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 15px;
  }
  .testimonial .name { font-weight: 700; }
  .testimonial .role { font-size: 0.9rem; }

  /* New CTA and footer styles */
  .cta-wrapper {
    text-align: center;
    margin: 30px 0;
  }
  .footer {
    text-align: center;
    margin-top: 20px;
    font-size: 0.9rem;
    color: #777;
  }

  /* Right column (unchanged here) */
  .cta-form { flex: 1; background: #f8f8f8; padding: 20px; border-radius: 8px; }
  .cta-form h3 { font-size: 1.3rem; margin-bottom: 10px; }
  .btn-primary {
    background: linear-gradient(to bottom, #06bdc0 5%, #06bdc0 100%);
    color: #fff; padding: 12px; border: none; border-radius: 5px;
    cursor: pointer; font-size: 1rem; text-align: center; display: inline-block;
  }

  /* Carousel wrapper */
.media-carousel {
  position: relative;
  overflow: hidden;
  width: 100%;
  margin: 20px 0;
}

/* Inner strip */
.carousel-inner {
  display: flex;
  transition: transform 0.4s ease-in-out;
}

/* Each slide = 100% width of wrapper */
.carousel-item {
  flex: 0 0 100%;
  max-width: 100%;
  padding: 0 10px; /* optional side‑padding */
}

/* Video sizing */
.carousel-item video {
  display: block;
  width: 100%;
  max-height: 300px;
  border-radius: 6px;
  object-fit: contain;
}

/* Prev/Next buttons */
.carousel-nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0,0,0,0.4);
  border: none;
  color: #fff;
  font-size: 2rem;
  padding: 0.2rem 0.8rem;
  cursor: pointer;
  z-index: 10;
}
.carousel-prev { left: 10px; }
.carousel-next { right: 10px; }
/* Personal Brand Group Workshop card */
.pb-card {
  background-color: #FFFBEB;        /* light cream background */        /* soft blue‑gray border */
  border-radius: 12px;
  overflow: hidden;
  margin-bottom: 20px;
  text-align: center;
}

/* the top yellow bar */
.pb-card .pb-bar {
  height: 12px;
  background-color: #FACC15;        /* golden yellow */
}

/* the text area */
.pb-card .pb-content {
  padding: 16px 12px;
  font-size: 1.25rem;
  font-weight: 600;
  color: #374151;                   /* dark gray text */
  line-height: 1.2;
}

/* Done‑For‑You Brand Storytelling card */
.dfy-card {
  background-color: #F3E8FF;        /* light lavender bg */
  border-radius: 12px;
  overflow: hidden;
  margin-bottom: 20px;
  text-align: center;
}
.dfy-card .dfy-bar {
  height: 12px;
  background-color: #8B5CF6;        /* vivid purple top stripe */
}
.dfy-card .dfy-content {
  padding: 16px 12px;
  font-size: 1.25rem;
  font-weight: 600;
  color: #374151;                   /* dark gray text */
  line-height: 1.2;
}

/* 1) Keep both columns top‑aligned */
.container {
  display: flex;
  align-items: flex-start;  /* prevents the aside from stretching to match the main column’s height */
  gap: 30px;
  padding: 40px 20px;
  max-width: 1200px;
  margin: 0 auto;
}

/* 2) Reinforce the right‑column wrapper look */
.cta-form {
  background: #f8f8f8;
  padding: 20px;
  border-radius: 8px;
  box-sizing: border-box;
}

/* 3) Polish up both cards: */
.pb-card,
.dfy-card {
  border-radius: 12px;
  overflow: hidden;
  margin-bottom: 20px;
  text-align: center;
}

/* – left card */
.pb-card {
  background-color: #FFFBEB;
  border: 1px solid #A5B4FC;
}
.pb-card .pb-bar {
  height: 12px;
  background-color: #FACC15;
}
.pb-card .pb-content {
  padding: 12px;
  font-size: 1.25rem;
  font-weight: 600;
  color: #374151;
  line-height: 1.2;
}

/* – right card */
.dfy-card {
  background-color: #F3E8FF;
  border: 1px solid #C4B5FD;
}
.dfy-card .dfy-bar {
  height: 12px;
  background-color: #8B5CF6;
}
.dfy-card .dfy-content {
  padding: 12px;
  font-size: 1.25rem;
  font-weight: 600;
  color: #374151;
  line-height: 1.2;
}

/* 4) Carousel container */
.media-carousel {
  position: relative;
  overflow: hidden;
  width: 100%;
  margin: 20px 0;
}

/* the sliding strip */
.media-carousel .carousel-inner {
  display: flex;
  transition: transform 0.4s ease-in-out;
}

/* each slide = full width of its wrapper */
.media-carousel .carousel-item {
  flex: 0 0 100%;
  box-sizing: border-box;
  padding: 0 10px;
}

/* constrain media size */
.media-carousel .carousel-item video,
.media-carousel .carousel-item img {
  display: block;
  width: 100%;
  max-height: 300px;
  margin: 0 auto;
  border-radius: 6px;
  object-fit: contain;
}

/* hide the scrollbar */
.media-carousel::-webkit-scrollbar {
  display: none;
}

/* nav buttons */
.media-carousel .carousel-nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0,0,0,0.4);
  border: none;
  color: #fff;
  font-size: 2rem;
  padding: 0.2rem 0.8rem;
  cursor: pointer;
  z-index: 10;
}
.media-carousel .carousel-prev { left: 10px; }
.media-carousel .carousel-next { right: 10px; }
/* 1) Make both columns equal width & full height */
.container {
  display: flex;
  align-items: stretch;       /* stretch both columns to tallest content */
  position: relative;         /* for the divider pseudo‑element */
  gap: 30px;                  /* keep your gutter */
}

.main-content,
.cta-form {
  flex: 1;                    /* both columns take up 50% of the space */
}

/* 2) Draw the gold line in the exact center */
.container::before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 50%;                  /* center of the container */
  width: 8px;                 /* your specified thickness */
  background-color: #C8AE7D;  /* the golden yellow */
  transform: translateX(-50%);/* ensure the line is dead‑center */
  z-index: 5;               /* behind your column content */
}

/* 3) Make sure your columns’ backgrounds & z‑index don’t hide the line */
.main-content,
.cta-form {
  position: relative;
  z-index: 2;                 /* above the divider */
}
.package-list { list-style: none; margin: 20px 0; padding-left: 0; }

/* ── Medium screens (tablets, <992px) ── */
@media (max-width: 991.98px) {
  .container {
    flex-direction: column;
  }
  /* remove the center divider */
  .container::before {
    display: none;
  }
  /* full‑width panels */
  .main-content,
  .cta-form {
    flex: none;
    width: 100%;
    margin: 0 auto 30px;
  }
  /* smaller side gutters */
  .container {
    gap: 20px;
    padding: 30px 15px;
  }
}

/* ── Small screens (landscape phones, <768px) ── */
@media (max-width: 767.98px) {
  /* tighten up headings */
  .header-section h1.main-title {
    font-size: 2rem;
  }
  .header-section h2 {
    font-size: 1.25rem;
  }
  /* shrink carousel nav buttons */
  .carousel-nav {
    font-size: 1.5rem;
    padding: 0.2rem 0.6rem;
  }
  .media-carousel .carousel-item video,
  .media-carousel .carousel-item img {
    max-height: 200px;
  }
  /* adjust CTA button */
  .calltoactionbtn,
  .btn-primary {
    font-size: 0.9rem;
    padding: 10px 20px;
  }
}

/* ── Extra‑small screens (portrait phones, <576px) ── */
@media (max-width: 575.98px) {
  /* collapse padding further */
  .container {
    padding: 20px 10px;
  }
  /* even smaller fonts */
  .header-section h1.main-title {
    font-size: 1.5rem;
  }
  .header-section h2 {
    font-size: 1.1rem;
  }
  .sub-title {
    font-size: 0.9rem;
  }
  /* stack carousel nav above/below so they don’t overlap content */
  .carousel-prev { left: 5px; }
  .carousel-next { right: 5px; }
  /* columns already stacked, so remove extra bottom margin on last panel */
  .cta-form { margin-bottom: 0; }
}

/* ── Slightly smaller desktops (≤1200px) ── */
@media (max-width: 1199.98px) {
  .container {
    gap: 20px;
    padding: 30px 15px;
  }
}

/* ── Tablets and small laptops (≤992px) ── */
@media (max-width: 991.98px) {
  /* 1) Stack the columns */
  .container {
    flex-direction: column;
  }

  /* 2) Hide the center divider */
  .container::before {
    display: none;
  }

  /* 3) Make both panels full‑width and reset their margins */
  .main-content,
  .cta-form {
    flex: none;
    width: 100%;
    margin: 0 auto 30px;
  }
}

/* ── Landscape phones (≤768px) ── */
@media (max-width: 767.98px) {
  /* tighten up headings */
  .header-section h1.main-title {
    font-size: 2rem;
  }
  .header-section h2 {
    font-size: 1.25rem;
  }

  /* scale down the card headers so they don’t feel huge */
  .pb-card .pb-content,
  .dfy-card .dfy-content {
    font-size: 1.1rem;
  }

  /* shrink the carousel nav buttons */
  .carousel-nav {
    font-size: 1.5rem;
    padding: 0.2rem 0.6rem;
  }
  .media-carousel .carousel-item video,
  .media-carousel .carousel-item img {
    max-height: 200px;
  }

  /* smaller CTA buttons */
  .calltoactionbtn,
  .btn-primary {
    font-size: 0.9rem;
    padding: 10px 20px;
  }
}

/* ── Portrait phones (≤576px) ── */
@media (max-width: 575.98px) {
  /* collapse side padding on the container */
  .container {
    padding: 20px 10px;
  }

  /* even smaller fonts for titles */
  .header-section h1.main-title {
    font-size: 1.5rem;
  }
  .header-section h2 {
    font-size: 1.1rem;
  }
  .sub-title {
    font-size: 0.9rem;
  }

  /* center the cards in their own full‑width rows */
  .pb-card,
  .dfy-card {
    margin: 0 auto 20px;
  }

  /* ensure the last panel doesn’t get extra bottom space */
  .cta-form { margin-bottom: 0; }
}


</style>

<div class="container">
  <main class="main-content">
    <!-- Column 1: Personal Brand Group Workshop banner -->
    <div class="banner">
      <!-- Left column top card -->
      <div class="pb-card">
        <div class="pb-bar"></div>
        <div class="pb-content">Personal Brand Group Workshop</div>
      </div>

    </div>


    <section class="header-section">
      <h1 class="main-title">
        Make It Count. <span class="emoji">👊</span> Maximize Your Stage.
      </h1>
      <hr>
      
      <h2>Own Your Story: Master the Art of Building Rapport Through Storytelling</h2>
    </section>

    <section class="details">
      <p><strong>Unlock the power of YOU</strong> in this interactive webinar, where you'll learn how to mine your experiences like a fiction writer and transform them into compelling personal brand assets. This transformative session will empower you to:</p>

      <ul class="features-list">
        <li>✔️ Find the Stories That Set You Apart – Uncover the moments in your life that create deeper connections and make your brand unforgettable.</li>
        <li>✔️ Turn Your Experiences Into Assets – Craft compelling narratives that position you as a thought leader and make a lasting impact.</li>
        <li>✔️ Use a Proven Storytelling Framework – Structure your stories for clarity, connection, and influence.</li>
      </ul>

      <p class="alert">
        🔥 <strong>Book today</strong> and start turning your personal stories into powerful brand-building tools.
      </p>

      <ul class="benefits-list">
        <li>🚀 <strong>Communicate with confidence</strong> and share your story in a way that captivates, engages, and inspires action.</li>
        <li>🌟 <strong>Leverage storytelling to attract</strong> opportunities, grow your network, and stand out in your industry.</li>
        <li>📌 <strong>Walk away with actionable techniques</strong> you can implement immediately for real results.</li>
      </ul>

      <!-- New “Let’s Chat” button below the blue banner -->
      <div class="cta-wrapper">
        <a href="<?php echo esc_url( home_url('/contact-us/') ); ?>" class="calltoactionbtn">Let's Chat Today</a>
      </div>

      <footer class="footer">
        © JT's Ideation Center 2025
      </footer>
    </section>
  </main>

  <aside class="cta-form">
    <!-- Right column top card -->
      <div class="dfy-card">
        <div class="dfy-bar"></div>
        <div class="dfy-content">Done‑For‑You Brand Storytelling</div>
      </div>

    <p>Your story — where you came from, the lessons and blessings that shaped you, and your vision for what’s next — is your most powerful asset.<br>
    Believe it. Invest in it.<br>
    Together we’ll springboard your ambition to be professionally seen and respected by creating content that leverages your worth.</p>

      <?php
        // grab your three videos
        $videos = [
          get_field('dfy_video_1'),
          get_field('dfy_video_2'),
          get_field('dfy_video_3'),
          get_field('dfy_video_4'),
        ];
        // grab your three pictures
        $pictures = [
          get_field('dfy_pic_1'),
          get_field('dfy_pic_2'),
          get_field('dfy_pic_3'),
        ];
        // merge & filter out any empty values
        $media = array_filter( array_merge( $videos, $pictures ) );
      ?>
    <div class="media-carousel">
      <div class="carousel-inner">
        <?php foreach( $media as $item ):
          if ( is_array($item) && ! empty($item['url']) && ! empty($item['mime_type']) ): ?>
          <div class="carousel-item">
            <?php if ( strpos( $item['mime_type'], 'video' ) === 0 ): ?>
              <video
                  autoplay-
                  mute
                  controls
                  playsinline 
                  class="carousel-item-video"
                <source src="<?php echo esc_url( $item['url'] ); ?>"
                        type="<?php echo esc_attr( $item['mime_type'] ); ?>">
                Your browser doesn’t support HTML5 video.
              </video>
            <?php elseif ( strpos( $item['mime_type'], 'image' ) === 0 ): ?>
              <img
                src="<?php echo esc_url( $item['url'] ); ?>"
                alt="<?php echo esc_attr( $item['alt'] ?? 'Carousel image' ); ?>"
              />
            <?php endif; ?>
          </div>
        <?php endif; endforeach; ?>
      </div>
      <button class="carousel-nav carousel-prev" aria-label="Previous slide">‹</button>
      <button class="carousel-nav carousel-next" aria-label="Next slide">›</button>
    </div>



    <h4>Three Month Content Package For $3000 That Includes ...</h4>
    <ul class="package-list">
      <li>✔️Recorded Interview</li>
      <li>✔️Personal Brand Origin Story Article</li>
      <li>✔️1‑On‑1 Content Strategy Sessions</li>
      <li>✔️26 Original Content Assets (Includes Video & Signature Thumbnails)</li>
      <li>✔️Personal Development Confidence Training</li>
    </ul>

    <div class="cta-wrapper">
      <a href="<?php echo esc_url( home_url('/contact-us/') ); ?>" class="calltoactionbtn">Let's Chat Today</a>
    </div>
  </aside>
</div>
<section class="testimonials">
  <div class="testimonial-carousel swiper">
    <h2>Testimonials</h2>
    <div class="swiper-wrapper">

      <!-- Testimonial 1 -->
      <div class="swiper-slide testimonial-card">
        <p class="testimonial-text">“This workshop helps you confidently weave yourself into networking conversations and pitches with ease."</p>
        <p class="testimonial-author">-Sarah Galbraith</p>
      </div>

      <!-- Testimonial 2 -->
      <div class="swiper-slide testimonial-card">
        <p class="testimonial-text">"Julia helped me create a personal story that not only introduces me but also highlights my work as a brand strategist and marketer. By sharing my story, I create a lasting impression—helping clients get to know me, remember me, and understand how I can help them."</p>
        <p class="testimonial-author">-Cindy Chang</p>
      </div>

      <!-- Testimonial 3 -->
      <div class="swiper-slide testimonial-card">
        <p class="testimonial-text">"The workshop was incredibly practical. It opened my eyes to the power of storytelling in shaping my brand and engaging my audience. My biggest takeaway? Stories about my business aren’t just interesting—they’re essential."</p>
        <p class="testimonial-author">-Dan Brown</p>
      </div>

      <!-- Testimonial 4 -->
      <div class="swiper-slide testimonial-card">
        <p class="testimonial-text">"This workshop teaches you how to tell concise and impactful stories that reflect your authentic self and help build deeper connections with others."</p>
        <p class="testimonial-author">-Ramune Bartuskaite</p>
      </div>
      <div class="swiper-slide testimonial-card">
        <p class="testimonial-text">“Julia encourages you to take the time to truly reflect on your experiences and how they’ve shaped who you are today. This gives you a stronger sense of professional identity and allows you to communicate a more cohesive message."</p>
        <p class="testimonial-author">-Jaimie Yakaboski</p>
      </div>
      <div class="swiper-slide testimonial-card">
        <p class="testimonial-text">"Julia walks you through turning a personal story into an authentic vehicle to share yourself, drive home your strengths, and invite deeper conversations."</p>
        <p class="testimonial-author">-Ben Swofford</p>
      </div>

    </div>

    <!-- Swiper navigation buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</section>
<?php get_footer(); ?>