<?php get_header(); ?>
<style>
.pagetitle{display: none !important;}
</style>
<div class="row pagecont">
	
	<div class="col-md-12">	
<div class="breadcrumbs">You are here: 
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

		<?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>			 
		 	<a href="<?php the_permalink();?>"><h5><?php the_title(); ?></h5></a>
		 	<?php the_excerpt(); ?>
		
		   <?php endwhile; ?>
		<?php endif; ?>	
	</div>

</div>


</div>

<?php get_footer(); ?>