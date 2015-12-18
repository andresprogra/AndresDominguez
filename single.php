<?php get_header(); ?>
<div class="article-post container center	">
	<div class="post-article">
		<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="post">
				<div class="img-thum-post">
				<figure>
					<?php if (has_post_thumbnail() ) { the_post_thumbnail('post-servicios'); } ?>
				</figure>
				</div>
				<div class="txt-service">
					<div class="p-article">							
						<p class="project-title"><?php the_title(); ?></p>
						<time><?php the_date(); ?></time>
					</div>
					<div class="extract-project"><?php the_content(); ?></div>
					<!--<a class="btn btn-green" href="<?php the_permalink(); ?>">Ver mas</a>-->
				</div>
				<section id="comments">
					<?php comments_template(); ?>
				</section>
				</article>
				<?php endwhile; else: ?>
					<hgroup>Hubo un error...</hgroup>
				<?php endif; ?>
				
		
	</div>
	<section class="widget">
	<div class="widget-article">
		<article class="autor-post">
			<div class="bg-autor center">
				<center>
					<?php echo get_avatar( get_the_author_meta('email'), '80' ); ?>
				</center>
			</div>
			<h3 class="text-center autor-nombre"><strong style="text-decoration:none;"><?php the_author(); ?></strong></h3>
			<p class="text-center autor-descripcion"><?php the_author_meta('description'); ?></p>
		</article>
	</div>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : endif; ?>
	</section>
</div>

	
<?php get_footer(); ?>		
