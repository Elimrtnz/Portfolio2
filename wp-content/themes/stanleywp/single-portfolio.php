<?php
/**
 * Single Portfolio Template
 *
 *
 * @file           single-portfolio.php
 * @package        StanleyWP 
 * @author         Brad WIlliams 
 * @copyright      2003 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

<div id="content-project">

 <?php if (have_posts()) : ?>

 <?php while (have_posts()) : the_post(); ?>


   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <!-- Portfolio Section -->
    <div class="container pt">

      <h1><?php the_title(); ?></h1>

      <?php $sectionOneImage = get_field('section_1_image'); ?>
      <div class="row pt">
        <div class="flex-container">
          <div class="col-xs-12 col-md-6">
            <img src="<?php echo $sectionOneImage['url']; ?>">
          </div>
          <div class="col-xs-12 col-md-6">
            <div class="section-content">
              <h2><?php the_field('section_1_title'); ?></h2>
              <div class="content">
                <?php the_field('section_1_content'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php //flex second row and flex-direction column reverse ?>
      <?php $sectionTwoImage = get_field('section_2_image'); ?>
      <div class="row">
       <div class="flex-container-two">
        <div class="col-xs-12 col-md-6">
          <img src="<?php echo $sectionTwoImage['url']; ?>">
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="section-content">
            <h2><?php the_field('section_2_title'); ?></h2>
            <div class="content">
              <?php the_field('section_2_content'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
      
    </div><!-- container -->      
  </article><!-- end of #post-<?php the_ID(); ?> -->


<?php endwhile; ?> 

<?php else : ?>

  <div class="container">
   <article id="post-not-found" class="hentry clearfix">
    <header>
     <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'gents'); ?></h1>
   </header>
   <section>
     <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'gents'); ?></p>
   </section>
   <footer>
     <h6><?php _e( 'You can return', 'gents' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'gents' ); ?>"><?php _e( '&#9166; Home', 'gents' ); ?></a> <?php _e( 'or search for the page you were looking for', 'gents' ); ?></h6>
     <?php get_search_form(); ?>
   </footer>

 </article>
</div>

<?php endif; ?>  

</div><!-- end of #content -->


<?php get_footer(); ?>