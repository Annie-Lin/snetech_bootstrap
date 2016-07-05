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
	            <div class="category_solution" id="<?php echo rwmb_meta('en_title'); ?>">
	            	<div class="category_solution_title">
	            		<div class="set-vmiddle">
	            		<div class="category_solution_title_container">
		                	<div class="category_solution_title_text col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-2 vcenter"><?php the_title(); ?></div>
		                	<div class="category_solution_shortdescription col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-5 col-md-offset-0 vcenter">
		                		<?php echo rwmb_meta('short_description'); ?>
		                	</div>
		                </div>
		            </div>
	            </div>

	                <div class="category_solution_content">
	                	<div class="category_solution_fulldescription col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-1 col-md-5 col-md-offset-2">
	                		<?php $more = 1; the_content("",true); ?>
	                	</div>
		                
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