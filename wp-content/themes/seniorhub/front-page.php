<?php get_header(); ?>

		<?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>

    	<div class="row">
    		<div class="col-sm-12" id="homecont">
    			<h1>Welcome to Senior Hub</h1>
    			<?php the_content(); ?>
    		</div>
    	</div>
    	
    	<div class="row homefeatures">
    		<div class="col-sm-4">
    			<div class="homenavpic">
    			<a href="<?php echo ot_get_option( 'home_link_1'); ?>">
    				<img class="img-responsive" src="<?php echo ot_get_option( 'home_image_1'); ?>" alt="" />
    			</a>
    			</div>
    			<h3><?php echo ot_get_option( 'home_title_1'); ?></h3>
    			<p><?php echo ot_get_option( 'home_text_1'); ?></p>
    			<a href="<?php echo ot_get_option( 'home_link_1'); ?>">
					<div class="learnbtn">Learn more ></div>
    			</a>
    		</div>
    		<div class="col-sm-4">
    			<div class="homenavpic">
    			<a href="<?php echo ot_get_option( 'home_link_2'); ?>">
    				<img class="img-responsive" src="<?php echo ot_get_option( 'home_image_2'); ?>" alt="" />
    			</a>
    			</div>
    			<h3><?php echo ot_get_option( 'home_title_2'); ?></h3>
    			<p><?php echo ot_get_option( 'home_text_2'); ?></p>
    			<a href="<?php echo ot_get_option( 'home_link_2'); ?>">
					<div class="learnbtn">Learn more ></div>
    			</a>
    		</div>
    		<div class="col-sm-4">
    			<div class="homenavpic">
    			<a href="<?php echo ot_get_option( 'home_link_3'); ?>">
    				<img class="img-responsive" src="<?php echo ot_get_option( 'home_image_3'); ?>" alt="" />
    			</a>
    			</div>
    			<h3><?php echo ot_get_option( 'home_title_3'); ?></h3>
    			<p><?php echo ot_get_option( 'home_text_3'); ?></p>
    			<a href="<?php echo ot_get_option( 'home_link_3'); ?>">
					<div class="learnbtn">Learn more ></div>
    			</a>
    		</div>	
    	</div>
    	<div class="row homefeatures">
    		<div class="col-sm-4">
    			<div class="homenavpic">
    			<a href="<?php echo ot_get_option( 'home_link_4'); ?>">
    				<img class="img-responsive" src="<?php echo ot_get_option( 'home_image_4'); ?>" alt="" />
    			</a>
    			</div>
    			<h3><?php echo ot_get_option( 'home_title_4'); ?></h3>
    			<p><?php echo ot_get_option( 'home_text_4'); ?></p>
    			<a href="<?php echo ot_get_option( 'home_link_4'); ?>">
					<div class="learnbtn">Learn more ></div>
    			</a>
    		</div>
    		<div class="col-sm-4">
    			<div class="homenavpic">
    			<a href="<?php echo ot_get_option( 'home_link_5'); ?>">
    				<img class="img-responsive" src="<?php echo ot_get_option( 'home_image_5'); ?>" alt="" />
    			</a>
    			</div>
    			<h3><?php echo ot_get_option( 'home_title_5'); ?></h3>
    			<p><?php echo ot_get_option( 'home_text_5'); ?></p>
    			<a href="<?php echo ot_get_option( 'home_link_5'); ?>">
					<div class="learnbtn">Learn more ></div>
    			</a>
    		</div>
    		<div class="col-sm-4">
    			<div class="homenavpic">
    			<a href="<?php echo ot_get_option( 'home_link_6'); ?>">
    				<img class="img-responsive" src="<?php echo ot_get_option( 'home_image_6'); ?>" alt="" />
    			</a>
    			</div>
    			<h3><?php echo ot_get_option( 'home_title_6'); ?></h3>
    			<p><?php echo ot_get_option( 'home_text_6'); ?></p>
    			<a href="<?php echo ot_get_option( 'home_link_6'); ?>">
					<div class="learnbtn">Learn more ></div>
    			</a>
    		</div>	
    	</div>
    	
    	
    	
		   <?php endwhile; endif; ?>
    </div>

    
<?php get_footer(); ?>