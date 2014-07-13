<?php 
/*
Template Name: Subpage
*/
get_header(); ?>

<div class="row pagecont">
	
	<?php

			$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");

		if($children){

	?>
		<div class="col-sm-3 pagelist">
			<ul id="leftlist">
			<?php 
				//use wp_list_pages to display parent and all child pages all generations (a tree with parent)
				echo $children;
			?>
			</ul>
		</div>
	<?php
		}
	?>
	
	<div class="col-sm-9">
<div class="breadcrumbs">You are here: 
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
		<h4><?php the_title(); ?></h4>
		<?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>			 
		 	<?php the_content(); ?>
		
		   <?php endwhile; ?>
		<?php endif; ?>	
	</div>

</div>


</div>

<?php get_footer(); ?>