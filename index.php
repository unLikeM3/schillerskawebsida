<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="span12 mt41 h400">
				<div id="slider">
					<script type="text/javascript">
						$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?",{tags: "engine",tagmode: "any", format: "json" },
						function(data) {
							$.each(data.items, function(i,item){
								console.log(data);
							    $("<img/>").attr({src : item.media.m.replace('_m.','.')}).appendTo("#slider");
							    if ( i == (data.items.length - 1) ) {
							        $('#slider').coinslider({ width: $(window).width(), height: 370, hoverPause: true });
							        return false;
							    }
							});
						});
					</script>
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
						<p>Skrivet av: <?php the_author(); ?> - <?php the_time('F jS, Y'); ?></p>
					</div>
				</div>
			<?php endwhile; else : ?>
				<p><?php _e('Det finns inga artiklar skrivna!'); ?></p><?php endif; ?>
				
				<!--<div class="postcontainer padded">
					<h1>Ever since</h1>
					<p>I was eight or nine <br>
						I've been standing on the shoreline <br> 
						for all my life I've been waiting <br>
						for something lasting <br>
						you loose your hunger and you loose your way<br> 
						you get confused and then you fade away<br>
						Author - <a href="#">Broder Daniel</a> 13:37 13/04/20 </p>
				</div> -->

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