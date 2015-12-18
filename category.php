<?php get_header(); ?>
<section>
		
		<div class="contenedor">
			<br />
			<p class="title"><?php single_cat_title( $prefix = '', $display = true );?></p>
			<br />	
		</div>				
		<div class="row  contenedor center" style="margin: auto;">
			<?php query_posts("paged=$paged"); ?>				
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article id="category">
				
				<figure class="category-img">
					<?php if (has_post_thumbnail() ) { the_post_thumbnail('post-portafolio'); } ?>
				</figure>
				<div>											
					<p class="project-title">Proyecto: <?php the_title(); ?></p>
					<div class="extract-project"><?php the_excerpt(); ?></div>
					<a class="btn btn-green" href="<?php the_permalink(); ?>">Ver mas</a>
				</div>
			</article>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
		<section class="contenedor center paginacion">
			<p> <?php previous_posts_link('<- Post anteriores')?>
			<?php next_posts_link('Post siguientes ->')?>
		</section>
	</section>
<?php get_footer(); ?>