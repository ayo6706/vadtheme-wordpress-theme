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
		
		<div class="card-description">
		
		<?php the_content();?>
		
		</div>
		</div>
	
		 
		</section>
		<?php			
		
		}
		
		
		
		?>
		
		<aside id="sidebar">
		<h3>Sidebar Heading</h3>
		<p>Sidebar 1</p>
		</aside>
		</div>
		
		
		
		
		
		
		
		
			
	
<?php
	get_footer();

?>