<?php get_header(); ?>
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
   
   <section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></php></h2>

			<div class="grid-8">
         <?php the_content(); ?>
			</div>
	</section>
   
<?php endwhile; else: ?>
   <section class="container sobre">
       <divi class="grid-8">
        <p><?php echo('Sorry, no posts matched your criteria.'); ?></p>
       </divi>
   </section>
<?php endif; ?>

<?php get_footer(); ?>

