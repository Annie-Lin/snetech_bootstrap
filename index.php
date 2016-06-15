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

	<div id="intro" class="index_section">
        <h1>資產異動管理可以更加優化</h1>
        <h6>力十幫您找出最佳解決方案</h6>
        <!-- Standard button -->
<button type="button" class="btn btn-primary">Default</button>
    </div>

    <div id="solution" class="index_section">
        <h2>專業的 RFID 系統整合服務</br>讓管理變得更容易</h2>
        <img alt="" src="<?php bloginfo('template_url'); ?>/img/610x150.gif" />

        <!-- category:solution && tag:index -->
        <?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?>
            <?php if (in_category("solution") && has_tag("index")): ?>
            <!-- 單篇post骨架 -->
            <div class="index_solution_item">
                <img alt="" src="<?php bloginfo('template_url'); ?>/img/Art_Artdesigner.lv.png" />
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php the_content(); ?></p>
                <button class="btn btn-primary"><a href="<?php the_permalink(); ?>">閱讀更多</a></button>
            </div>
            <?php endif ; ?>
        <?php endwhile ; ?> <?php else : ?>     
            <!-- 輸出找不到文章提示 -->
            <h1>沒有成功案例</h1>
        <?php endif ; ?>
    </div>

    <div id="customization" class="index_section">
        <h2>針對您的需求</br>規劃最適合的方案</h2>
        <img alt="" src="<?php bloginfo('template_url'); ?>/img/610x150.gif" />
        <div>
            <h3>成功案例</h3>
            <!-- category:case && tag:index -->
            <?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?>
                <?php if (in_category("case") && has_tag("index")): ?>
                <!-- 單篇post骨架 -->
                <div class="post">
                    <!-- Post Title -->
                    <h6 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                    <img alt="" src="<?php bloginfo('template_url'); ?>/img/223x112.gif" />
                </div>
                <?php endif ; ?>
            <?php endwhile ; ?> <?php else : ?>     
                <!-- 輸出找不到文章提示 -->
                <h1>沒有成功案例</h1>
            <?php endif ; ?>
        </div>
    </div>

    <div id="team" class="index_section">
        <h2>堅強的團隊</br>提供最專業的服務</h2>
        <p>說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼</br>說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼</p>
        <img alt="" src="<?php bloginfo('template_url'); ?>/img/610x150.gif" /></br>
        <button>閱讀更多</button>
    </div>
</div>	

<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 