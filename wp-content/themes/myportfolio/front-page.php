<?php get_header(); ?>

<main>

  <section>
    <h2>最新の作品</h2>

    <?php
    $args = [
      'post_type' => 'post',
      'posts_per_page' => 3,
    ];

    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()): ?>
      <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <div>
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
        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>
    <?php endif; ?>

    <p>
      <a href="<?= get_permalink(49); ?>"><?= get_the_title(49); ?></a>
    </p>
  </section>

</main>

<?php get_footer(); ?>