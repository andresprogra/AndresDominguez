<?php get_header(); ?>
<section class="banner-profile center-xs">
		<div class="information-profile">
			<img class="profile" src="<?php bloginfo('template_url') ?>/img/perfil_andres.jpg" alt="Andrés Domínguez">
			<h1>Andrés Domínguez</h1>
			<h2>Desarrollador web</h2>
			<h4>@AndresDguez</h4>
		</div>
	</section>
	<section class="about">
		<div class="container center">
			<p class="title">¿Quién soy?</p>
			<p>Mi nombre es <strong>Andrés Domínguez Gómez</strong> y soy <strong>programador</strong>, desde pequeño siempre me gustó la Informática y conforme a mi edad me iba adentrando más y más en el mundo tecnológico. Mis primeros pasos de desarrollador web (a mis 8 años) fue en una de las plataformas de creación de páginas web con un par de click, con esto sentía que era un Developer Full Stack, pero conforme fuí creciendo y aprendiendo me dí cuenta que realmente eso no era ser un <strong>Desarrollador web</strong>, por lo que fuí aprendiendo de forma autodidácta y al paso de los años logré hacer un Curso de FrontEnd Developer en unas de las mejores Plataformas de Aprendizaje de Sillicon Valley.</p>
			<p>Mi objetivo siempre a sido el <strong>desarrollo web</strong> es por eso que siempre me he enfocado en aprender Front-End. Procuro siempre estar a la vanguardia de las tecnologías, por ejemplo todos mis proyectos son realizados con <strong>HTML5, CSS3, JavaScript</strong>, entre otras tecnologías. Además tu sitio web será <strong>Responsive Design</strong> ("Diseño responsivo"), esto quiere decir que tu sitio web podrá ser visualizado desde cualquier dispositivo sin ningún problema, y no sólo eso, si no que los sitios <strong>responsive design</strong> posicionan mejor en <strong>Google</strong>. Por esto y muchas cosas más, te invito a que pruebes mis servicios.</p>
		</div>
	</section>
	<section>
		<div class="contenedor">
			<br />
			<p class="title">Portafolio</p>
			<br />
			<?php $the_query = new WP_Query( 'cat=4' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<article id="portafolio">
				
				<figure class="project">
					<?php if (has_post_thumbnail() ) { the_post_thumbnail('post-portafolio'); } ?>
				</figure>											
				<p class="project-title">Proyecto: <?php the_title(); ?></p>
				<div class="extract-project"><?php the_excerpt(); ?></div>
				<a class="btn btn-green" href="<?php the_permalink(); ?>">Ver mas</a>
			</article>
			<?php 
			endwhile;
			// Reiniciar el Query
			wp_reset_query();
			?>
		</div>
	</section>
	<section id="last-post">
		<p class="container center title" style="max-width:85%;">Última publicación</p>
		<?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<div class="container center middle-xs">
			<div class="date">
				
				<time><?php the_date(j);?></time>
				
				<hr />
				<time class="month-time"><?php echo get_the_date(M); ?></time>
				
				
				
				
				
				
				
				
				
				
			</div>
			<div class="info">
				<p class="category"><?php  the_category(); ?></p>
				<a style="color:inherit;" href="<?php the_permalink();  ?>"><p class="title"><?php the_title(); ?></p></a>
			</div>
		</div>
	</section>
	<?php
		endwhile;
		wp_reset_postdata();
	?>
	<section class="blog-invite">
		<div class="container center">
			<p>Visita mi blog</p>
			<a href="#" style="float:none;font-size: .6em;" class="btn btn-green">Entrar Ya</a>	
		</div>
				
	</section>


	<section>
		<div class="contenedor">
			<br />
			<p class="title">Servicios</p>
			<br />
			<?php $the_query = new WP_Query( 'cat=6' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<article id="servicios">
				<div class="img-thumb">
				<figure>
					<?php if (has_post_thumbnail() ) { the_post_thumbnail('post-servicios'); } ?>
				</figure>
				</div>
				<div class="txt-service">			
					<p class="project-title"><?php the_title(); ?></p>
					<div class="extract-project"><?php the_excerpt(); ?></div>
					<!--<a class="btn btn-green" href="<?php the_permalink(); ?>">Ver mas</a>-->
				</div>
			</article>
			<hr />
			<?php 
			endwhile;
			// Reiniciar el Query
			wp_reset_query();
			?>
		</div>
	</section>


	
<?php get_footer(); ?>