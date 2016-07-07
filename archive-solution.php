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
			<div id="header-space"></div>
			<?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?>
	            <!-- 單篇post骨架 -->
	            <div class="category_solution" id="<?php echo rwmb_meta('en_title'); ?>">
	            	<div class="category_solution_title">
	            		<div class="set-vmiddle">
	            		<div class="category_solution_title_container row">
		                	<div class="category_solution_title_text col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-2 vcenter"><?php the_title(); ?></div>
		                	<div class="category_solution_shortdescription col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-5 col-md-offset-0 vcenter">
		                		<?php the_excerpt(); ?>
		                	</div>
		                </div>
		            </div>
	            </div>

	                <div class="category_solution_content">
	                	<div class="category_solution_content_container row">
	                	<div class="category_solution_fulldescription col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-1 col-md-5 col-md-offset-2">
	                		<?php the_content(); ?>
	                	</div>
		                
		                <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-md-offset-0">
		                	<div class="category_solution_additionalpanel">
		                	<div class="category_solution_feature category_solution_additionalpanel_section"><div class="category_solution_additionalpanel_sectiontitle">產品特色</div></div>
		                	<div class="category_solution_successfulcase category_solution_additionalpanel_section">
		                		<div class="category_solution_additionalpanel_sectiontitle">成功案例</div>

		                		<!-- 取得相關成功案例LIST -->
		                		<?php
		                			$current_solution_id=$post->ID;
		                			$args = array( 'post_type' => 'case');
                    				$sucessfulcases_loop = new WP_Query( $args );
                    				if ( $sucessfulcases_loop->have_posts() ) : while ( $sucessfulcases_loop->have_posts() ) : $sucessfulcases_loop->the_post();
									
									$related_solution_ids_array = rwmb_meta( 'related_solutions' );

			                		if ( in_array($current_solution_id, $related_solution_ids_array) ) {

			                	?>
			                			<a href="<?php the_permalink(); ?>">
			                			<div class="category_solution_sucessfulcase_unit">
			                			
			                			<!-- START category_solution_sucessfulcase_unit_title -->

				                			<div class="category_solution_sucessfulcase_unit_title">
												<?php	
													$sucessfulcase_project_name=rwmb_meta('project_name');
													echo $sucessfulcase_project_name;  
												?>
											</div>

										<!-- END category_solution_sucessfulcase_unit_title -->

										<!-- ADD A YELLOW BAR -->

											<div class="index_case_card_title_bottombar"></div>

										<!-- START category_solution_sucessfulcase_unit_logo -->

											<div class="category_solution_sucessfulcase_unit_logo">
												<?php   
													$sucessfulcase_client_logo=rwmb_meta('client_logo');
													if (!empty($sucessfulcase_client_logo)){
			    										foreach ( $sucessfulcase_client_logo as $logo ) {
															echo '<img src="';
															echo $logo['full_url']; 
															echo '" class="desaturate">';
														}
													}else{
														the_title();
													}

												?>
											</div>  

										<!-- END category_solution_sucessfulcase_unit_logo -->
										
									    </div>
									    </a>


								<?php
									
									}else{
										
									}

		                		?>

		                		<?php endwhile ; ?><?php wp_reset_postdata(); ?><?php else : ?>     
				                    <!-- 輸出找不到文章提示 -->
				                    <h1>沒有成功案例</h1>
				                <?php endif ; ?>
				                
				                <!-- 結束取得相關成功案例LIST -->
		                	</div>
		                </div>

		                	<p><?php if ( has_post_thumbnail() ) : 
									the_post_thumbnail();
								endif; ?></p>
		                </div>
		                
		                
						</div>
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