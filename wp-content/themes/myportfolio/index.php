<?php get_header(); ?>

<main>

  <div>
    <?php if (is_home()): ?>
      <!-- 作品一覧ページ -->
      <h1><?= get_the_title(49); ?></h1>
    <?php endif; ?>

    <?php if (is_category()): ?>
      <!-- カテゴリ一覧ページ -->
      <h1><?php single_cat_title(); ?></h1>
    <?php endif; ?>

    <?php if (is_date()): ?>
      <!-- 年別一覧ページ -->
      <h1><?php the_time('Y'); ?>年</h1>
    <?php endif; ?>

    <ul>
      <li>
        <a href="<?= get_permalink(49); ?>">
          <?= get_the_title(49); ?>
        </a>
      </li>

      <?php
      wp_list_categories([
        'title_li' => '',
      ]);
      ?>
    </ul>

    <ul>
      <?php
      // 年別アーカイブリンク
      wp_get_archives([
        'type' => 'yearly',
      ]);
      ?>
    </ul>
  </div>


  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

      <article <?php post_class('works-card'); ?>>
        <a href="<?php the_permalink(); ?>">
          <div>
            <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('post-thumbnail', [
                'style' => 'max-width: 300px; height: auto;'
              ]); ?>
            <?php endif; ?>
          </div>
          <div>
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
          </div>
        </a>
      </article>

    <?php endwhile; ?>
  <?php endif; ?>

  <!-- ページネーション -->
  <div>
    <?php
    echo paginate_links([
      'prev_text' => '←',
      'next_text' => '→',
    ]);

    ?>
  </div>

</main>

<?php get_footer(); ?>