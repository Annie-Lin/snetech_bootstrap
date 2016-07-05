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

<div id="index_main_container">

	<div id="index_intro" class="index_section row">
        <div class="index_intro_title">
            <span class="typedText"><?php echo do_shortcode( '[typed string0="資產異動管理" string1="衣物洗滌管理" typeSpeed="40" startDelay="0" backSpeed="40" backDelay="3000" loop="1"]' ) ?></span> 
            <span>可以更容易<span></div>
        <div class="index_intro_subtitle">力十幫您找出最佳解決方案</div>
    </div>

    <div id="index_solution" class="index_section row">
        <div class="row index_solution_top">
                <div class="index_solution_title">專業的 RFID 系統整合服務</br>讓管理更加優化</div>
        </div>
        <div class="row index_solution_bottom">
            <div class="row index_solution_bottom_list">
                <!-- category:solution && tag:index -->
                <?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?>
                    <?php if (in_category("solution") && has_tag("index")): ?>
                    <!-- 單篇post骨架 -->
                    <div class="index_solution_item col-xs-12 col-sm-15">
                        <div class="index_solution_card">
                            <p class="index_solution_thumbnail"><?php if ( has_post_thumbnail() ) : 
                                        the_post_thumbnail();
                                    endif; ?></p>
                            <div class="index_solution_item_title_topbar"></div>
                            <div class="index_solution_item_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                            <div class="index_solution_item_title_bottombar"></div>
                            <div class="index_solution_item_content"><?php the_content("",true); ?></div>
                        </div>
                        <button class="btn"><a href="<?php bloginfo('wpurl'); ?>/category/solution/">閱讀更多</a></button>
                    </div>
                    <?php endif ; ?>
                <?php endwhile ; ?> <?php else : ?>     
                    <!-- 輸出找不到文章提示 -->
                    <h1>沒有解決方案</h1>
                <?php endif ; ?>
            </div>
        </div>
    </div>

    <div id="index_customization" class="index_section row">
        <h2 class="col-xs-12 col-sm-12">針對您的需求</br>規劃最適合的方案</h2>
        <div class="col-xs-12 col-sm-12">
        	<img alt="" src="<?php bloginfo('template_url'); ?>/img/610x150.gif" />
    	</div>
    	<div class="index_case col-xs-12 col-sm-12">
	        <h3 class="col-xs-12 col-sm-12">成功案例</h3>
	        <!-- category:case && tag:index -->
	        <?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?>
	            <?php if (in_category("case") && has_tag("index")): ?>
	            <!-- 單篇post骨架 -->
	            <div class="index_case_item col-xs-12 col-sm-3">
                    <a href="<?php the_permalink(); ?>">
	                <!-- Post Title -->
	                <h6 class="title"><?php getTagsExcept("index"); ?></h6>
	                <p><?php if ( has_post_thumbnail() ) : 
                            the_post_thumbnail();
                        endif; ?></p>
                    </a>
	            </div>
	            <?php endif ; ?>
	        <?php endwhile ; ?> <?php else : ?>     
	            <!-- 輸出找不到文章提示 -->
	            <h1>沒有成功案例</h1>
	        <?php endif ; ?>
        </div>
    </div>

    <div id="index_team" class="index_section row">
        <h2>堅強的團隊</br>提供最專業的服務</h2>
        <p>說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼</br>說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼</p>
        <img alt="" src="<?php bloginfo('template_url'); ?>/img/610x150.gif" /></br>
        <button>閱讀更多</button>
    </div>
</div>	

<?php get_footer(); ?> 