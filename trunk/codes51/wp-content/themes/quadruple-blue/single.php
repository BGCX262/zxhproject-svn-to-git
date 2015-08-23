<?php get_header(); ?>

			<div class="narrow_column">

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">

	<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<div class="postdate"><?php _e('Posted on'); ?> <?php the_time('F jS, Y') ?> <?php _e('by'); ?> <?php the_author() ?></div>
	<div class="entry">

		<?php the_content(); ?>
		<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

		<p class="postinfo">
<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
		</p>

		<!--
		<?php trackback_rdf(); ?>
		-->

		<div class="comments-template"><?php comments_template(); ?></div>

	</div><!-- end entry -->

</div><!-- end post -->
<?php endwhile; ?>

<?php include (TEMPLATEPATH . '/browse.php'); ?>

<?php else : ?>

<div class="post">

	<h2><?php _e('Not Found'); ?></h2>
	<div class="entry">
<p class="notfound"><?php _e('Sorry, but you are looking for something that isn&#39;t here.'); ?></p>
	</div>

</div>

<?php endif; ?>

			</div><!-- end narrow column -->

<?php get_footer(); ?>