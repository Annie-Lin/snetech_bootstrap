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
	<div class="content-area" id="main-column">
		<main id="main" class="site-main row" role="main">
			<?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?>
	            <!-- 單篇post骨架 -->
	            <div class="index_solution_item col-xs-12 col-sm-3">
	            	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		            	<div class="category_title">
		                	<h1><?php the_title(); ?></h1>
		                </div>
		                <h3><?php getTagsExcept("index"); ?></h3>
						<p><?php if ( has_post_thumbnail() ) : 
								the_post_thumbnail();
							endif; ?></p>
						<p><?php the_content("",true); ?></p>
	            	</a>
	            </div>
	            <!-- 單篇post骨架 End-->
	        <?php endwhile ; ?> <?php else : ?>     
	            <!-- 輸出找不到文章提示 -->
	            <h1>沒有找到文章</h1>
	        <?php endif ; ?>
		</main>
	</div>

<?php get_footer(); ?> 