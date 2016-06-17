<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<!-- <?php get_sidebar('left'); ?>  -->
				<div class="col-md-12 content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?>
						    <!-- 單篇post骨架 -->
						    <div class="row">
						    	<div class="col-xs-12 col-sm-12 page_title_area">
							        <h1><?php the_title(); ?></h1>
						        </div>
						        <div class="col-xs-12 col-sm-12">
							        <p><?php the_content(); ?></p>
						        </div>
						    </div>
						<?php endwhile ; ?> <?php endif ; ?>

					</main>
				</div>
<!-- <?php get_sidebar('right'); ?>  -->
<?php get_footer(); ?> 