<?php
/**
 * The main template file
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

	<div id="index_intro" class="index_section col-xs-12 row">
        <div class="index_intro_title col-xs-10 col-xs-offset-1">
            <div class="index_intro_title_typedtext">
                <?php echo do_shortcode( '[typed string0="資產異動管理" string1="衣物洗滌管理" typeSpeed="40" startDelay="0" backSpeed="40" backDelay="3000" loop="1"]' ) ?>
            </div>
            <div class="index_intro_title_fixedtext">
                &nbsp;可以更容易
            </div>
        </div>
        <div class="index_intro_subtitle col-xs-10 col-xs-offset-1">力十幫您找出最佳解決方案</div>
    </div>

    <div id="index_solution" class="index_section col-xs-12 row">
        <div class="index_solution_top row">
            <div class="index_solution_title col-xs-10 col-xs-offset-1">專業的 RFID 系統整合服務</br>讓管理更加優化</div>
        </div>

        <div class="index_solution_bottom row">
            <div class="index_solution_bottom_list col-xs-10 col-xs-offset-1 row equalHeightRow">
                <!-- post-type:solution -->
                <?php $args = array( 'post_type' => 'solution', 'posts_per_page' => 5 );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <!-- 單篇post骨架 -->
                    <div class="index_solution_item col-xs-12 col-sm-15 equalHeightCell">
                        <div class="index_solution_card row row-eq-height">
                            <div class="index_solution_thumbnail col-xs-4 col-sm-12">
                                <?php if ( has_post_thumbnail() ) : the_post_thumbnail(); endif; ?>
                            </div>
                            <div class="index_solution_text col-xs-8 col-sm-12">
                                <div class="index_solution_item_title_topbar"></div>
                                <div class="index_solution_item_title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                <div class="index_solution_item_title_bottombar"></div>
                            </div>
                            <div class="index_solution_item_content col-xs-12 col-sm-12"><?php the_excerpt(); ?></div>
                        </div>
                        <button class="btn"><a href="<?php bloginfo('wpurl'); ?>/category/solution/">閱讀更多</a></button>
                    </div>
                <?php endwhile ; ?><?php wp_reset_postdata(); ?><?php else : ?>     
                    <!-- 輸出找不到文章提示 -->
                    <h1>沒有解決方案</h1>
                <?php endif ; ?>
            </div>
        </div>
    </div>

    <div id="index_customization" class="index_section col-xs-12 row">
        <div class="index_customization_top row">
            <div class="index_customization_title col-xs-10 col-xs-offset-1">針對您的需求</br>規劃最適合的方案</div>
            <div class="index_customization_img col-xs-12 col-md-10 col-md-offset-1">
                <img alt="" src="<?php bloginfo('template_url'); ?>/img/LandingPage_Section03.png" />
            </div>
        </div>

    	<div class="index_case row">
	        <div class="index_case_title">成功案例</div>
            <div class="index_case_list col-xs-10 col-xs-offset-1 row equalHeightRow">
	        <!-- category:case && tag:index -->
    	        <?php $args = array( 'post_type' => 'case', 'posts_per_page' => 4 );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
    	            <!-- 單篇post骨架 -->
    	            <div class="index_case_item col-sm-3 col-xs-12 equalHeightCell">
                        <div class="index_case_card" >
                            <a href="<?php the_permalink(); ?>">
                            <!-- Post Title -->
                            <div class="index_case_card_title"><?php getTagsExcept("index"); ?></div>
                            <div class="index_case_card_title_bottombar"></div>
                            <div class="index_case_card_img"><?php if ( has_post_thumbnail() ) : 
                                    the_post_thumbnail();
                                endif; ?></div>
                            </a>
                        </div>
                    </div>
                <?php endwhile ; ?><?php wp_reset_postdata(); ?><?php else : ?>     
                    <!-- 輸出找不到文章提示 -->
                    <h1>沒有成功案例</h1>
                <?php endif ; ?>
            </div>
        </div>
    </div>

    <div id="index_team" class="index_section col-xs-12 row">
        <div class="index_customization_title">堅強的團隊</br>提供最專業的服務</div>
        <div class="index_team_content">力十科技結合「RFID硬體與相關設備」、「軟體」、「介面」三個主軸，提供完整的解決方案，協助客戶導入系統並建置更易上手的環境。</div>
        <div class="index_team_img">
            <img alt="" src="<?php bloginfo('template_url'); ?>/img/LandingPage_Section04.png" /></br>
        </div>
        <button class="btn"><a href="<?php bloginfo('wpurl'); ?>/關於我們/">閱讀更多</a></button>
    </div>

</main>    
</div>	

<?php get_footer(); ?> 
