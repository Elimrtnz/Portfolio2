<?php
/**
 * Pages Template
 *
 *
 * @file           page.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

<?php /* Slick Slider using Custom Post Type */ ?>
  <?php query_posts( array('post_type' => 'slider_images', 'orderby' => 'menu_order', 'order' => 'ASC' ,  'post_status'=>'publish'  )); ?>
  <div class="slickslider">
    <ul class="slides">
      <?php if(have_posts()): while (have_posts()) : the_post(); ?>
        <?php if ( has_post_thumbnail() ): ?>
          <?php
          $custom = get_post_custom(get_the_ID());  
          $link =  $custom["link"][0]; ?> 
          <?php if ( has_post_thumbnail()) : ?>      
            <li class="slide" style="background: url( <?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); //echo $img[0]; ?>) no-repeat; background-size: cover;" >

              <?php /* <a href="<?php echo $link;  ?>"> <div class="text"><?php echo get_the_content(); ?></div> </a> */ ?>
              <img src=" <?php echo $img[0]; ?>">
            </li>
          <?php endif; ?>
        <?php endif; ?>
      <?php endwhile; endif;?>
    </ul>
  </div>
  <?php wp_reset_query(); ?>

  <div id="ww">
  	<div class="container">

  		<div class="row about">
  			<div class="col-xs-12">
  				<h2><?php the_field('about_title'); ?></h2>
  				<?php the_field('about_content'); ?>
  			</div><!-- /col -->
  		</div><!-- /row -->

  		

  		<div class="row services">

  			<div class="col-xs-12 col-md-4 service">
  				<div class="icon">
  					<i class="fa fa-wordpress"></i>
  				</div>
  				<div class="content">
  					<?php the_field('service_1'); ?>
  				</div>
  			</div><!-- /col -->
  			<div class="col-xs-12 col-md-4 service">
  				<div class="icon">
  					<i class="fa fa-code"></i>
  				</div>
  				<div class="content">
  					<?php the_field('service_2'); ?>
  				</div>
  			</div><!-- /col -->
  			<div class="col-xs-12 col-md-4 service">
  				<div class="icon">
  					<i class="fa fa-html5"></i>
  				</div>
  				<div class="content">
  					<?php the_field('service_3'); ?>
  				</div>
  			</div><!-- /col -->


  		</div><!-- /row -->



  	</div> <!-- /container -->
  </div><!-- /ww -->



<?php get_footer(); ?>