<?php get_header ( ) ; ?>
	<!-- Caption Line -->
	<h2 class="grid_12 caption clearfix">Our <span>blog</span>, SINGLE</h2>
	<div class="hr grid_12 clearfix">&nbsp;</div>
	<!-- Column 1 /Content --> 
	<?php if ( have_posts ( ) ) : the_post ( ) ; update_post_caches ( $posts ) ; ?>
	<div class="grid_8">
		<!-- Blog Post -->
		<div class="post">
			<!-- Post Title -->
			<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<!-- Post Data -->
			<p class="sub">
    			<!-- show tag -->
    			<?php the_tags ( '標籤：' , ', ' , '' ) ; ?> &bull; <!-- http://codex.wordpress.org/Template_Tags/the_tags -->
    			<!-- show date time -->
    			<?php the_time('F j, Y g:i a'); ?> &bull; <!-- http://codex.wordpress.org/Template_Tags/the_time -->
    			<?php comments_popup_link ( '0條評論' , '1條評論' , '%條評論' , '' , '評論已關閉' ) ; ?>
    			<?php edit_post_link ( '編輯' , ' • ' , ' ' ) ; ?>
    			<div class="hr dotted clearfix">&nbsp;</div>
			<!-- Post Content -->
			<?php the_content ( ) ; ?>
			<!-- Post Links -->
			<p class="clearfix"> 
				<a href=" <?php echo get_option ( 'home' ) ; ?> " class="button float" >返回首頁</a> 
				<a href="# commentform" class="button float right" >發表評論</a> 
			</p>
		</div>
		<div class="hr clearfix">&nbsp;</div>
		<!-- Comment -->
		<?php comments_template ( ) ; ?>
	</div> <?php else : ?>     
		<div class="errorbox">沒有文章！</div> 
	<?php endif ; ?> 
	<!-- Column 2 / Sidebar -->
	<?php get_sidebar(); ?>
	<div class="hr grid_12 clearfix">&nbsp;</div>

<?php get_footer ( ) ; ?>