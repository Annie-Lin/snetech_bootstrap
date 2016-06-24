<?php
/**
 * Template for displaying single post (read full post page).
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
		            <div>
		            	<div class="single_case_title row">
		                	<div class="col-xs-12 col-sm-6">
			                	<h1><?php the_title(); ?></h1>
			                	<h3><?php getTagsExcept("index"); ?></h3>
		                	</div>
		                	<div class="col-xs-12 col-sm-6">
		                		<p><?php $more = 0; the_content("",true); ?></p> <!-- 繼續閱讀之前不含link -->
		                	</div>
		                </div>
		                <!-- <p><?php $more = 1; the_content(); ?></p> --> <!-- 全文 -->
		                <!-- <p><?php $more = 0; the_content(); ?></p> --> <!-- 繼續閱讀之前含link -->
		                <!-- <p><?php the_content(); ?></p> --> <!-- 繼續閱讀之前含link -->
		                <!-- <p><?php the_content("",true); ?></p> --> <!-- 繼續閱讀之前不含link -->

		                <div class="single_case_content row">
			                <div class="col-xs-12 col-sm-6"><?php $more = 1; the_content("",true); ?></div> <!-- 繼續閱讀之後 -->
			                <div class="col-xs-12 col-sm-6"><?php if ( has_post_thumbnail() ) : 
										the_post_thumbnail();
									endif; ?></div>
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
