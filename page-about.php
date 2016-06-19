<?php
/**
 * Template Name: About page
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
				<div class="page_area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?>
						    <!-- 單篇post骨架 -->
				        	<div class="page_title_area">
				    	        <h1><?php the_title(); ?></h1>
				            </div>
				            <div class="page_content_area">
				    	        <p><?php the_content(); ?></p>
				            </div>
						<?php endwhile ; ?> <?php endif ; ?>
					</main>
				</div>

<?php get_footer(); ?> 