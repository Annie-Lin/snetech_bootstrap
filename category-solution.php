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
	<div id="main-column">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?>
	            <!-- 單篇post骨架 -->
	            <div class="category_solution">
	            	<div class="category_solution_title">
	                	<h1 class="col-xs-12 col-sm-6"><?php the_title(); ?></h1>
	                	<div class="col-xs-12 col-sm-6">
	                		<p><?php $more = 0; the_content("",true); ?></p> <!-- 繼續閱讀之前不含link -->
	                	</div>
	                </div>
	                <div class="category_solution_content">
		                <p><?php $more = 1; the_content("",true); ?></p>
		                <p><?php if ( has_post_thumbnail() ) : 
									the_post_thumbnail();
								endif; ?></p>
					</div>
	            </div>
	            <!-- 單篇post骨架 End-->
	        <?php endwhile ; ?> <?php else : ?>     
	            <!-- 輸出找不到文章提示 -->
	            <h1>沒有找到文章</h1>
	        <?php endif ; ?>
		</main>
	</div>

<?php get_footer(); ?> 