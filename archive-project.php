<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>




   
   <main>
       <a href="blogslist.html">
           <h2 class="page-heading">All Projects</h2>
       </a>

       <section>
       
       
      
      
       
       
    
       
       
    
       
           <?php
           
             
           while (have_posts()){
           	the_post();
           ?>
           
           <div class="card">
           <div class="card-image">
           <a href="blogpost.html">
           <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
           </a>
           </div>
           
           <div class="card-description">
           <a href=" <?php the_permalink(); ?> ">
           <h3> <?php the_title(); ?> </h3>
           </a>
           <div class="card-meta">
           	<p>posted by <?php the_author();?> on <?php the_time('F j, Y');?> </p>
           
           </div>
           <p>
            <?php echo wp_trim_words(get_the_excerpt(), 30); ?>.
           </p>
           <a href=" <?php the_permalink(); ?> " class="btn-readmore">Read more</a>
           </div>
           </div>
           <?php
           
           }
           
           ?>
          
       </section>

       <div class="pagination">
       	<?php echo paginate_links();?>
       
       </div>
      
       


<?php get_footer();