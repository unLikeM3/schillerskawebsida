<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="span12 mt45">
				<div>
					<div class="postcontainer">
						<div class="padded">
							<?php if(have_posts()) : while(have_posts()) : the_post();?>
								<h1><?php the_title(); ?></h1>
								<p><?php the_content(); ?></p>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>