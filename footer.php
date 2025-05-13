<footer class="footer">
  <p>&copy; JT's Ideation Center <?php echo date('Y'); ?></p>
</footer>
</div>

<!-- Mobile menu toggle script – loads on every page -->
<script>
document.addEventListener('DOMContentLoaded', function(){
  const toggle = document.getElementById('menu-toggle');
  const menu   = document.getElementById('primary-menu');
  if (!toggle || !menu) return;
  toggle.addEventListener('click', function(){
    const expanded = this.getAttribute('aria-expanded') === 'true';
    this.setAttribute('aria-expanded', String(!expanded));
    menu.classList.toggle('active');
  });
});
</script>

<?php wp_footer(); ?>
</body>
</html>
