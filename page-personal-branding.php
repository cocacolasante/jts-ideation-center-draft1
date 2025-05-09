?php

get_header();

?>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');
  * { margin: 0; padding: 0; box-sizing: border-box; }
  body { font-family: 'Raleway', sans-serif; color: #333; line-height: 1.6; }
  .top-bar { background: #f0f0f0; padding: 10px 20px; font-size: 0.9rem; display: flex; align-items: center; }
  .top-bar .badge { margin-right: 8px; }
  .container { display: flex; gap: 30px; padding: 40px 20px; max-width: 1200px; margin: 0 auto; }
  .main-content { flex: 2; }
  .header-section h1.main-title { font-size: 2.5rem; font-weight: 700; }
  .header-section .emoji { font-size: 1.5rem; }
  .header-section hr { border: none; border-top: 2px solid #333; margin: 15px 0; }
  .sub-title { font-weight: 700; margin-bottom: 10px; }
  .features-list,
  .benefits-list { list-style: none; margin: 20px 0; padding-left: 0; }
  .features-list li,
  .benefits-list li { margin-bottom: 10px; }
  .alert { margin: 30px 0 15px; font-weight: 600; }
  .testimonial { display: flex; align-items: center; background: #007bff; color: #fff; border-radius: 8px; padding: 15px; margin-top: 30px; }
  .testimonial .avatar { width: 60px; height: 60px; border-radius: 50%; object-fit: cover; margin-right: 15px; }
  .testimonial .name { font-weight: 700; }
  .testimonial .role { font-size: 0.9rem; }
  .cta-form { flex: 1; background: #f8f8f8; padding: 20px; border-radius: 8px; }
  .cta-form h3 { font-size: 1.3rem; margin-bottom: 10px; }
  .btn-primary { background: linear-gradient(to bottom, #06bdc0 5%, #06bdc0 100%); color: #fff; padding: 12px; border: none; border-radius: 5px; cursor: pointer; font-size: 1rem; text-align: center; display: inline-block; }
</style>

<div class="top-bar">
  <span class="badge">⚠️</span>
  Story Brand Workshop For Conference Presenters, Leaders, Entrepreneurs, Authors, and Coaches...
</div>

<div class="container">
  <main class="main-content">
    <section class="header-section">
      <h1 class="main-title">
        Make It Count. <span class="emoji">👊</span> Maximize Your Stage.
      </h1>
      <hr>
      <p class="sub-title">THIS 75% off WEBINAR REVEALS...</p>
      <h2>Own Your Story: Master the Art of Building Rapport Through Storytelling</h2>
    </section>

    <section class="details">
      <p><strong>Unlock the power of YOU</strong> in this interactive webinar, where you'll learn how to mine your experiences like a fiction writer and transform them into compelling personal brand assets. This transformative session will empower you to:</p>
      <ul class="features-list">
        <li>✔️ Find the Stories That Set You Apart – Uncover the moments in your life that create deeper connections and make your brand unforgettable.</li>
        <li>✔️ Turn Your Experiences Into Assets – Craft compelling narratives that position you as a thought leader and make a lasting impact.</li>
        <li>✔️ Use a Proven Storytelling Framework – Structure your stories for clarity, connection, and influence.</li>
      </ul>
      <p class="alert">🔥 Spots are limited! Secure yours now and start turning your personal stories into powerful brand-building tools.</p>
      <ul class="benefits-list">
        <li>🚀 <strong>Communicate with confidence</strong> and share your story in a way that captivates, engages, and inspires action.</li>
        <li>🌟 <strong>Leverage storytelling to attract</strong> opportunities, grow your network, and stand out in your industry.</li>
        <li>📌 <strong>Walk away with actionable techniques</strong> you can implement immediately for real results.</li>
      </ul>

      <div class="testimonial">
      <?php
            if ( function_exists('get_field') ) {
                $click_julia_pic = get_field('click_julia_pic');

                // Only output if we actually have an image
                if ( ! empty( $click_julia_pic ) && is_array( $click_julia_pic ) ) : ?>
                    <img
                    src="<?php echo esc_url( $click_julia_pic['url'] ); ?>"
                    alt="<?php echo esc_attr( $click_julia_pic['alt'] ?: 'Julia Taus' ); ?>"
                    class="avatar"
                    />
                <?php endif;
            }
        ?>
        <div class="testimonial-text">
          <p class="name">Julia Taus</p>
          <p class="role">Webclass Presenter</p>
        </div>
      </div>
    </section>
  </main>

  <aside class="cta-form">
    <h3>Start Your Story Today</h3>
    <a href="<?php echo esc_url( home_url('/contact-us/') ); ?>" class="btn-primary">Let's Chat Today</a>
  </aside>
</div>

<?php
get_footer();
?>
