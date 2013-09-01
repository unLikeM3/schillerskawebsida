<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="span12 mt46 h400">
				<div id="slider">
					<?php echo do_shortcode("[metaslider id=260]"); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span8">
				<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="postcontainer">
						<div class="padded">
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<p><?php the_content(__('more...')); ?></p>
							<p>Skrivet av: <?php the_author(); ?> - <?php the_time('M jS, Y'); ?></p>
						</div>
					</div>
				<?php endwhile; else : ?>
					<p><?php _e('Det finns inga artiklar skrivna!'); ?></p><?php endif; ?>
			</div>
			<div class="span4 sidebar">
				<div class="padded">
					<?php get_sidebar();?>
				</div>
			</div>
			<div class="mb45"></div>
		</div>
		<div class="row">
			<div class="span12" style="height:45px"></div>
		</div>
<?php get_footer(); ?>