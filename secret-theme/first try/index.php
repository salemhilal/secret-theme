    <!-- header start -->
    <?php get_header(); ?>
    <!-- header end -->

    <h1 class="f1">sup everyone</h1>

    <section class="w-100 pv3 f6 ph3 ph4-ns">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="fl w-100 w-third-ns pa2">
          <?php the_title(); ?>
        </div>
      <?php endwhile; else: ?>
        _e("I can't find what you're searching for.", "secretmagazine");
      <?php endif; ?>
    </section>

    <?php get_footer(); ?>
