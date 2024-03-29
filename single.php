<?php
	get_header();

?>
<?php
	while (have_posts()){
	
		the_post();
		
		
		?>
		
		
		<h2 class="page-heading"><?php the_title();?></h2>
		<div id="post-container">
		<section id="blogpost">
		<div class="card">
		<div class="card-meta-blogpost">
		Posted by <?php the_author();?> on <?php the_time('F j, Y');?> in <a href=""><?php echo get_the_category_list(',');?>
		</div>
		<div class="card-image">
		<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
		</div>
		<div class="card-description">
		<?php the_content(); ?>
		</div>
		</div>
		
		<div id="comments-section">
		<?php comment_form();?>
		
		<?php 
		
			$comments_number = get_comments_number();
			if ($comments_number != 0 ){
			
				?>
				<div class="comments">
					<h3>what others say</h3>
					<ol class="all-comments">
						<?php
						$comments = get_comments(array(
							'post_id' => $post->ID,
							'status' => 'approve',
						
						));
						wp_list_comments(array(
							'per_page' => 15 
						), $comments);
						
						?>
					
					</ol>
				</div>
				<?php
			}
		?>
		
		</div>
		</section>
		
		<aside id="sidebar">
		<?php  dynamic_sidebar('main_sidebar');?>
		</aside>
		</div>
		
		
		
		
		
		
		
		
<?php			
			
	}
	
	
	
?>	
<?php
	get_footer();

?>







