<?php get_header(); ?>

<main>

  <div>
    <?php if (is_home()): ?>
      <!-- 作品一覧ページ -->
      <h1>作品一覧</h1>
    <?php endif; ?>

    <?php if (is_category()): ?>
      <!-- カテゴリ一覧ページ -->
      <h1>カテゴリ名</h1>
    <?php endif; ?>

    <?php if (is_date()): ?>
      <!-- 年別一覧ページ -->
      <h1>2024年</h1>
    <?php endif; ?>
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

</main>

<?php get_footer(); ?>