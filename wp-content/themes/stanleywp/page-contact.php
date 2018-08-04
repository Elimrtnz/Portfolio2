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

<div class="page-banner flex-align-justify-center" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
	<div class="title">
		<h1><?php echo the_title(); ?></h1>
	</div>
</div>

<div class="contact-page">
	<div class="container contact-content">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="marker"><?php the_field('heading'); ?></h2>
				<div class="content">
					<?php the_field('content'); ?>
				</div>
			</div>
		</div><!-- /row -->
	</div> <!-- /container -->

	<div class="container contact-form">
		<div class="row">
			<div class="col-xs-12">
				<div class="content">
					<?php the_field('form'); ?>
				</div>
			</div>
		</div><!-- /row -->
	</div> <!-- /container -->	

</div>


<?php /*save newsletter code below
 <?php $newsImage = get_field('newsletter_image'); ?>
  <div class="news-background flexbox align-items-center" style="background-image: url( <?php echo $newsImage['url']; ?>); background-size: cover;">
  	<div class="overlay"></div>
  	<div class="container newsletter">
  		<div class="row ">
  			<div class="col-xs-12 ">
  				<h3><?php the_field('newsletter_title'); ?></h3>
  				<div class="content">
  					<?php the_field('newsletter_content'); ?>
  				</div>
  				<div class="code">
  					<?php the_field('news_code'); ?>
  				</div>
  			</div><!-- /col -->
  		</div><!-- /row -->
  	</div> <!-- /container -->
  </div>

  */ ?>




<?php get_footer(); ?>