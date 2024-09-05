<?php get_header(); ?>

<main>

  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

      <h1><?php the_title(); ?></h1>

      <?php if (has_post_thumbnail()): ?>
        <div style="max-width: 800px; margin: 0 auto 20px;">
          <?php the_post_thumbnail('post-thumbnail', [
            'style' => 'width: 100%; height: 100%',
            'class' => '何かのクラス名',
            'id' => '何かID名',
          ]); ?>
        </div>
      <?php endif; ?>

      <?php the_content(); ?>

      <!-- 画像１ -->
      <?php if (get_field('image01')): ?>
        <div>
          <?php
          $img_id = get_field('image01');
          echo wp_get_attachment_image(
            $img_id,
            'full',
            false,
            [
              'style' => 'width: 100%; height: auto;'
            ]
          );
          ?>
        </div>
      <?php endif; ?>

      <!-- 画像2 -->
      <?php if (get_field('image02')): ?>
        <div>
          <?php
          $img_id = get_field('image02');
          echo wp_get_attachment_image($img_id, 'full');
          ?>
        </div>
      <?php endif; ?>

      <!-- 使用技術 -->
      <?php if (get_field('tech')): ?>
        <ul>
          <?php foreach (get_field('tech') as $tech): ?>
            <li><?= $tech; ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>


      <?php if (get_next_post_link()): ?>
        <div><?php next_post_link(); ?></div>
      <?php endif; ?>

      <?php if (get_previous_post_link()): ?>
        <div><?php previous_post_link(); ?></div>
      <?php endif; ?>

    <?php endwhile; ?>
  <?php endif; ?>

</main>

<?php get_footer(); ?>