<footer>
  <div class="container">
    <?php wp_nav_menu( array(
      'menu' => 'Footer Menu',
      'menu_class' => 'footer-nav',
      'container' => 'nav'
    )); ?>
    <div class="logo">
      <a href="/"><img src="/wp-content/themes/hsbaird/images/logo-mason-gold.gif" alt=""></a>
    </div>
    <div class="copyright">
      Copyright &copy; <?php echo date('Y');?> Henry S. Baird #174 Masonic Lodge
    </div>
  </div>
</footer>

<script src="/wp-content/themes/hsbaird/js/vendor/jquery-3.6.0.min.js"></script>
<script src="/wp-content/themes/hsbaird/js/hsbaird.js"></script>
<?php wp_footer(); ?>

</body>
</html>
