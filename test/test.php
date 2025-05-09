<main class="contact-page">
    <h1>Contact Us</h1>
    <?php
    // Handle form submission
    if ( 'POST' === $_SERVER['REQUEST_METHOD'] && ! empty( $_POST['contact_name'] ) ) {
        $name    = sanitize_text_field( $_POST['contact_name'] );
        $email   = sanitize_email( $_POST['contact_email'] );
        $phone   = sanitize_text_field( $_POST['contact_phone'] );
        $message = sanitize_textarea_field( $_POST['contact_message'] );

        $to      = get_option( 'admin_email' );
        $subject = sprintf( 'New message from %s via Contact Page', $name );
        $headers = array(
            'Content-Type: text/html; charset=UTF-8',
            sprintf( 'From: %1$s <%2$s>', $name, $email ),
        );

        $body    = '<p><strong>Name:</strong> ' . esc_html($name) . '</p>';
        $body   .= '<p><strong>Email:</strong> ' . esc_html($email) . '</p>';
        $body   .= '<p><strong>Phone:</strong> ' . esc_html($phone) . '</p>';
        $body   .= '<p><strong>Message:</strong><br>' . nl2br( esc_html($message) ) . '</p>';

        if ( wp_mail( $to, $subject, $body, $headers ) ) {
            echo '<div class="contact-confirm">Thanks for reaching out! We’ll be in touch shortly.</div>';
        } else {
            echo '<div class="contact-error">There was a problem sending your message. Please try again later.</div>';
        }
    }
    ?>
    
        <form class="contact-form" method="post">
              <p>
                <label for="contact_name">Your Name</label><br>
                <input type="text" id="contact_name" name="contact_name" required>
              </p>
              <p>
                <label for="contact_email">Your Email</label><br>
                <input type="email" id="contact_email" name="contact_email" required>
              </p>
              <p>
                <label for="contact_phone">Your Phone</label><br>
                <input type="tel" id="contact_phone" name="contact_phone">
              </p>
              <p>
                <label for="contact_message">Message</label><br>
                <textarea id="contact_message" name="contact_message" rows="6" required></textarea>
              </p>
              <p>
                <button type="submit" class="button">Send Message</button>
              </p>
            </form>
    </div>
   
  </main>