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




   <div id="banner">
       <h1>&lt;Vadtheme/&gt;</h1>
       <h3>Best blog wordpress theme you can trust</h3>
   </div>

   <main>
       <a href="blogslist.html">
           <h2 class="section-heading">All Blogs</h2>
       </a>

       <section>
       
       
      
      
       
       
    
       
       
    
       
           <?php
           
           $args = array(
           	'post_type' =>'post',
           	'posts_per_page' => 2,
           	
           );
           
           
           $blogposts = new WP_Query($args);
           
           
           
           while ($blogposts->have_posts()){
           $blogposts->the_post();
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

       <a href="blogslist.html">
       	<h2 class="section-heading">All Projects</h2>
   	</a>

       <section>
           <?php
           
           $args = array(
           'post_type' =>'project',
           'posts_per_page' => 2,
           
           );
           
           
           $projectsposts = new WP_Query($args);
           
           
           
           while ($projectsposts->have_posts()){
           $projectsposts->the_post();
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

       <h2 class="section-heading">Source Code</h2>

       <section id="section-source">
           <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum neque qui delectus ad dolor blanditiis perferendis praesentium
               consectetur aut sed provident obcaecati aspernatur perspiciatis, dolores nobis pariatur ipsum vel corrupti!
           </p>
           <a href="#" class="btn-readmore">GitHub Profile</a>
       </section>
       
       


<?php get_footer();