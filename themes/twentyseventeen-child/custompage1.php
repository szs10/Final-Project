<?php /* Template Name: CustomPageT1 */ ?>

<?php get_header(); ?>
 
  <div id="primary" class="site-content">
    <div id="content" role="main">
 
      <?php while ( have_posts() ) : the_post(); ?>
 
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
            <header class="entry-header">
              <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
 
            <div class="entry-content">
              <?php the_content(); ?>
 
              <p>Hi, I’m Susan, the creator of It’s Susan’s Thing.  I’ve been called many things:  influencer, blogger, brand strategist, fit model, creative director and trend forecaster. <br>Founded in 2019, this blog is a source of chic sophistication and style inspiration for fashionistas from all around the world. It’s Susan’s Thing is the discerning girl’s destination for all things style, travel, art and novelties in the fashion world. And probably a few other rambling (and hopefully amusing) mishaps along the way.
				</p>
 
            </div><!-- .entry-content -->
 
          </article><!-- #post -->
 
      <?php endwhile; // end of the loop. ?>
 
    </div><!-- #content -->
  </div><!-- #primary -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>