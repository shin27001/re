    <div class="l-shop">
      <h1 class="main-title">
        「<?php esd_title(['site_title' => false]); ?>」の一覧
      </h1>
      <ul class="l-shop__list">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li class="l-shop__item">
              <a class="l-shop__link" href="<?php the_permalink(); ?>">
                <div class="l-shop__img">
                  <?php $main_img = get_field('shop_main_image'); ?>
                  <img class="ofi" src="<?php echo $main_img['sizes']['medium']; ?>" alt="<?php echo $main_img['title']; ?>">
                </div>
                <div class="l-shop__bottom">
                  <div class="l-shop__info">
                    <h3 class="l-shop__infoTitle"><?php the_title(); ?></h3>
                  </div>
                  <div class="l-shop__box">
                    <ul class="l-shop__text">
                      <li>
                        <?php $area = gt_get_main_term(get_the_ID(), 'area'); ?>
                        <h4><i class="fas fa-map-marker-alt"></i> <?php echo $area->name; ?></h4>
                      </li>
                      <li><span>専有面積 </span><?php the_field('occupied_area'); ?></li>
                      <li><span>物件番号 </span><?php echo "000".$post->ID; ?></li>
                      <li><span>更新日 </span><?php echo $post->post_modified; ?></li>
                    </ul>
                  </div>
                </div>
                <?php if (e('search_update', $_GET) == true) : ?>
                  <form method="POST" id="updateform" action="<?php echo esc_url(home_url('entry-form')); ?>">
                    <input type="hidden" name="request" value="update">
                    <input type="hidden" name="main_post_id" value="<?php echo get_the_ID(); ?>">
                    <button class="btn btn-m-red" type="submit"><span><i class="fas fa-edit"></i> 記事を更新する</span></button>
                  </form>
                <?php endif; ?>
              </a>
            </li>
          <?php endwhile;
        else : ?>
          <h2>該当するお店がありません。</h2>
        <?php endif; ?>

      </ul>
      <!-- Pagination -->
      <?php if (function_exists('pagination')) :
        pagination($wp_query->max_num_pages);
      endif; ?>
    </div><!-- /l-shop -->