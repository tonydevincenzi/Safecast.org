<?php get_header(); ?>
<div class="slider-wrap">
  <p class="safecast-introduction">
    Safecast is a global sensor network for collecting and sharing radiation measurements to empower people with data about their environments.
  </p>
  <div class="slide-item">
    <div class="slide-item-text">
      <h3 class="">5,000,000</h3>
      <p>Points of radiation collected since 3/11/11</p>
    </div>
    <img src="<?php bloginfo('template_directory'); ?>/images/visuals.jpg" alt="">
  </div>
</div>
<div class="wrapper">
  <div id="page-wrap">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

        
        <?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

        <div class="entry">
          <?php the_content(); ?>
        </div>
        <!--
        <footer class="postmetadata">
          <?php the_tags('Tags: ', ', ', '<br />'); ?>
          Posted in <?php the_category(', ') ?> | 
          <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
        </footer>
        -->
      </article>

    <?php endwhile; ?>
    <!--
    <?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
    -->
    <?php else : ?>

      <h2>Not Found</h2>

    <?php endif; ?>
  <!--
  <?php get_sidebar(); ?>
  -->
  </div>
  <?php get_footer(); ?>
