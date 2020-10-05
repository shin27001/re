<?php get_header(); ?>
<?php get_header('sub'); ?>
<div class="content-wrap">
  <?php get_template_part('tpl', 'search'); ?>
  <div class="content-inner">
    <?php get_template_part('tpl', 'shoplist'); ?>
  </div>
</div>
<?php get_footer('sns'); ?>
<?php get_footer(); ?>