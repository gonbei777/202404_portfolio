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