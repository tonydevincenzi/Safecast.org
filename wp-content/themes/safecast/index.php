<?php get_header(); ?>
<script type="text/javascript" language="javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery-1.8.2.min.js">
</script>
<script type="text/javascript" language="javascript" 
        src="<?php bloginfo('template_directory'); ?>/scripts/jquery.carouFredSel-6.1.0-packed.js">
</script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
  $('#slider').carouFredSel({
      width: '100%',
      pauseOnHover: true,
      scroll: {
        items: 1,
        duration: 1500

      }
  });
});
  
</script>
<div class="slider-wrap">
  <p class="safecast-introduction">
    Safecast is a global sensor network for collecting and sharing radiation measurements to empower people with data about their environments.
  </p>
  <div class="list_carousel responsive" >
    <ul id="slider">
      <li>
        <div class="slide-item-text">
          <h3 class="">5,000,000</h3>
          <p>Points of radiation collected since 3/11/11</p>
        </div>
        <img src="<?php bloginfo('template_directory'); ?>/images/visuals.jpg" alt="">
      </li>
      
      <li>
        <div class="slide-item-text">
          <h3 class="">5,000,000</h3>
          <p>Points of radiation collected since 3/11/11</p>
        </div>
        <img src="<?php bloginfo('template_directory'); ?>/images/visuals.jpg" alt="">
      </li>
    </ul>
  </div>
</div>
<div class="wrapper">
  <div id="page-wrap">
    <?php if (have_posts()) : $i = 0; while (have_posts()) : the_post(); $i++; ?>

      <article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
        <?php if($i == 1) the_post_thumbnail(); ?>

        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <?php if($i == 1) include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
        <div class="entry">
          <p>
            <?php 
            if($i == 1)
              echo excerpt(50); 
            else 
              echo excerpt(20);
            ?>
            </p>
        </div>
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
