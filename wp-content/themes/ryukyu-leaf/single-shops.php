<?php get_header(); ?>
<?php get_header('sub'); ?>
<div class="content-wrap">
  <!-- Search Form -->

  <div class="breadcrumb-wrap">
    <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="<?php echo home_url(); ?>">
          <span itemprop="name">HOME</span>
        </a>
        <meta itemprop="position" content="1" />
      </li>

      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="<?php echo home_url('shops'); ?>">
          <span itemprop="name">店舗一覧</span>
        </a>
        <meta itemprop="position" content="2" />
      </li>

      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="<?php echo home_url('shops'); ?>">
          <span itemprop="name"><?php echo $post->post_title; ?></span>
        </a>
        <meta itemprop="position" content="3" />
      </li>
    </ol>
  </div>

  <div class="content-inner">

    <div class="l-info">
      <div class="l-info__main">
        <div class="l-info__top">

          <h1 class="l-info__name"><?php echo $post->post_title; ?></h1>
          <p class="l-info__area">
            <?php $areas = get_the_terms(get_the_ID(), 'area'); ?>
            <?php if ($areas) : foreach ($areas as $area) : ?>
                <?php echo ($area->parent) ? '<i class="fas fa-map-marker-alt"></i> ' . $area->name : ""; ?>
            <?php endforeach;
            endif; ?>
          </p>

        </div>
        <!-- /l-info__top -->

        <?php $shop_images = ""; ?>
        <?php if (have_rows('shop_images')) : while (have_rows('shop_images')) : the_row(); ?>
            <?php
            $shop_img = get_sub_field('shop_image');
            $title = (get_sub_field('shop_image_title')) ? get_sub_field('shop_image_title') : $shop_img['title'];
            $shop_images .= '<li><img src="' . $shop_img['sizes']['large'] . '" alt="' . $title . '"></li>' . "¥n";
            ?>
        <?php endwhile; endif; ?>
        <div class="l-info__slide">
          <ul class="l-info__slid-thum">
            <?php echo $shop_images; ?>
          </ul>
          <ul class="l-info__slid-nav">
            <?php echo $shop_images; ?>
          </ul>
        </div>
        <!-- /l-info__img -->
      </div>
      <!-- /l-info__main -->

      <?php if (get_field('messages')) : ?>
        <div class="l-info__message">
          <h2 class="l-info__h2title">LEAFからのメッセージ</h2>
          <p class="l-info__message-text"><?php the_field('messages'); ?></p>
        </div>
      <?php endif; ?>
      <!-- /l-info__message -->

      <div class="l-info__basic">
        <h2 class="l-info__h2title">店舗基本情報</h2>
        <?php if (get_field('youtube')) : ?>
          <?php
          $iframe_attributes = [];
          preg_match_all('/(title|src)=("[^"]*")/i', wp_oembed_get(get_field('youtube')), $iframe_attributes);
          $src = substr($iframe_attributes[0][1], 0, -1) . '&loop=1&playlist=' . get_youtube_id(get_field('youtube')) . '"';
          $youtube = '<iframe ' . $iframe_attributes[0][0] . ' width="500" height="281" ' . $src . ' frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
          ?>
          <div class="l-info__video"><?php echo $youtube; ?></div>
        <?php endif; ?>
        <table class="l-info__table">
          <tr>
            <th>住所</th>
            <td>〒<?php the_field('zip_code'); ?>　<?php the_field('address'); ?><br>
              <div class="mapbtn"><a href="https://maps.google.co.jp/maps/search/<?php the_field('address'); ?>" class="btn btn-m-red" target="blank">Google Mapへ</a></div>
            </td>
          </tr>
          <?php if (get_field('occupied_area')) : ?>
          <tr>
            <th>専有面積</th>
            <td><?php the_field('occupied_area'); ?></td>
          </tr>
          <?php endif; ?>
          <tr>
            <th>物件番号</th>
            <td><?php echo "000".$post->ID; ?></td>
          </tr>
          <tr>
            <th>更新日</th>
            <td><?php echo $post->post_modified; ?></td>
          </tr>
          <tr>
            <th>お問い合わせ</th>
            <td>スマートレストランプロジェクト事務局<br><i class="fas fa-phone-alt"></i> 000-000-0000</td>
          </tr>
        </table>
        <!-- /l-info__table -->
      </div>
      <!-- /l-info__basic -->
    </div>
    <!-- /content-inner -->

    <div class="l-tel">
      <p class="l-tel__title">お問い合わせはこちら</p>
      <div class="btn-wrap">
        <a href="tel:000-0000-0000"><i class="fas fa-phone-alt"></i> 000-000-0000</a>
      </div>
    </div>
    <!-- /l-tel -->
    <div class="btn-wrap back-btn">
      <a href="#" class="btn btn-m-red"><i class="fas fa-arrow-left"></i>
        店舗一覧にもどる</a>
    </div>

    <!-- comments_template(); -->
  </div>
</div>
<?php get_footer('sns'); ?>

<?php get_footer(); ?>