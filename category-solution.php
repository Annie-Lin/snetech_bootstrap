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
	<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?>
	            <?php if (in_category("solution")): ?>
	            <!-- 單篇post骨架 -->
	            <div class="index_solution_item row">
	                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	                <p><?php $more = 1; the_content(); ?></p>
	            </div>
	            <?php endif ; ?>
	        <?php endwhile ; ?> <?php else : ?>     
	            <!-- 輸出找不到文章提示 -->
	            <h1>沒有找到文章</h1>
	        <?php endif ; ?>
		</main>
	</div>

<?php get_footer(); ?> 