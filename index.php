<?php get_header(); ?>

	<div id="intro" class="index_section">
        <h1>資產異動管理可以更加優化</h1>
        <h6>力十幫您找出最佳解決方案</h6>
    </div>

    <div id="solution" class="index_section">
        <h2>專業的 RFID 系統整合服務</br>讓管理變得更容易</h2>
        <img alt="" src="<?php bloginfo('template_url'); ?>/images/610x150.gif" />
        <div class="index_solution_item">
            <img alt="" src="<?php bloginfo('template_url'); ?>/images/Blog_Artdesigner.lv.png" />
            <h5>資產異動管理</h5>
            <p>一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。</p>
            <button>閱讀更多</button>
        </div>
        <div class="index_solution_item">
            <img alt="" src="<?php bloginfo('template_url'); ?>/images/Blog_Artdesigner.lv.png" />
            <h5>洗滌服務系統</h5>
            <p>一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。</p>
            <button>閱讀更多</button>
        </div>
        <div class="index_solution_item">
            <img alt="" src="<?php bloginfo('template_url'); ?>/images/Blog_Artdesigner.lv.png" />
            <h5>智慧櫥櫃系統</h5>
            <p>一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。</p>
            <button>閱讀更多</button>
        </div>
        <div class="index_solution_item">
            <img alt="" src="<?php bloginfo('template_url'); ?>/images/Blog_Artdesigner.lv.png" />
            <h5>門禁管理系統</h5>
            <p>一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。</p>
            <button>閱讀更多</button>
        </div>
        <div class="index_solution_item">
            <img alt="" src="<?php bloginfo('template_url'); ?>/images/Blog_Artdesigner.lv.png" />
            <h5>其他創新應用</h5>
            <p>一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。一些些簡單的說明。</p>
            <button>閱讀更多</button>
        </div>
    </div>

    <div id="customization" class="index_section">
        <h2>針對您的需求</br>規劃最適合的方案</h2>
        <img alt="" src="<?php bloginfo('template_url'); ?>/images/610x150.gif" />
        <div>
            <h3>成功案例</h3>
            <!-- Blog Post -->
            <?php if ( have_posts ( ) ) : while ( have_posts ( ) ) : the_post ( ) ; ?>
                <!-- 單篇post骨架 -->
                <div class="post">
                    <!-- Post Title -->
                    <h6 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                    <img alt="" src="<?php bloginfo('template_url'); ?>/images/223x112.gif" />
                </div>
            <?php endwhile ; ?> <?php else : ?>     
                <!-- 輸出找不到文章提示 -->
                <h1>沒有文章</h1>
            <?php endif ; ?>
        </div>
    </div>

    <div id="team" class="index_section">
        <h2>堅強的團隊</br>提供最專業的服務</h2>
        <p>說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼</br>說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼說說為什麼</p>
        <img alt="" src="<?php bloginfo('template_url'); ?>/images/610x150.gif" /></br>
        <button>閱讀更多</button>
    </div>
	
<?php get_footer(); ?>