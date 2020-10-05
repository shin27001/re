<div class="mod_share">
  <h3 class="mod_share__title">この情報を共有する</h3>
  <ul class="mod_share__list">
    <?php $current_url = urlencode(esc_url(home_url() . $_SERVER['REQUEST_URI'])); ?>
    <li class="mod_share__item twitter">
      <a href="https://twitter.com/share?url=<?php echo $current_url; ?>&text=<?php echo urlencode(esd_title(['echo' => false])); ?>" rel="nofollow" target="_blank">
        <p class="link"><i class="fab fa-twitter symbol"></i></p>
      </a></li>
    <li class="mod_share__item facebook"><a href="https://www.facebook.com/share.php?u=<?php echo $current_url; ?>" class="link" target="_blank">
        <p class="txt"><i class="fab fa-facebook symbol"></i></p>
      </a></li>
    <li class="mod_share__item line"><a href="https://social-plugins.line.me/lineit/share?url=<?php echo $current_url; ?>" class="link" target="_blank">
        <p class="txt"><i class="fab fa-line symbol"></i></p>
      </a></li>
    <li class="mod_share__item copy">
      <div class="link" id="clipboard">
        <p class="txt"><i class="far fa-copy symbol"></i></p>
      </div>
    </li>
  </ul>
</div>