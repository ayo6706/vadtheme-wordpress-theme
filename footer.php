<?php
/**
 * The template for displaying the footer
 *
 */

?>




		<footer>
		<div id="footer">
		<!--start container-->
		<div class="container">
		<!--row -->
		<div class="row">
		
		
		<!--row 1-->
		<div class="col-md-4">
		
		<div id="left-footer">
		<h3>Quick Links</h3>
		<p>
		<ul>
		<li>
		<a href="index.html">Home</a>
		</li>
		<li>
		<a href="about.html">About</a>
		</li>
		<li>
		<a href="#">Privacy Policy</a>
		</li>
		<li>
		<a href="blogslist.html">Blogs</a>
		</li>
		<li>
		<a href="blogslist.html">Projects</a>
		</li>
		<li>
		<a href="#">Contact</a>
		</li>
		</ul>
		</p>
		</div>
		
		</div>
		<!--end row 1-->
		
		<!--row 2-->
		<div class="col-md-4">
		
		<div id="right-footer">
		<h3>Follow us on</h3>
		<div id="social-media-footer">
		<ul>
		<li>
		<a href="#">
		<i class="fa fa-facebook"></i>
		</a>
		</li>
		<li>
		<a href="#">
		<i class="fa fa-youtube"></i>
		</a>
		</li>
		<li>
		<a href="#">
		<i class="fa fa-github"></i>
		</a>
		</li>
		</ul>
		</div>
		<p><?php  dynamic_sidebar('footer_sidebar');?></p>
		</div>
		
		</div>
		
		<!--end row 2-->
		
		
		<!--row 3-->
		<div class="col-md-4">
		
		<div id="right-footer">
		<h3>Follow us on</h3>
		<div id="social-media-footer">
		<ul>
		<li>
		<a href="#">
		<i class="fa fa-facebook"></i>
		</a>
		</li>
		<li>
		<a href="#">
		<i class="fa fa-youtube"></i>
		</a>
		</li>
		<li>
		<a href="#">
		<i class="fa fa-github"></i>
		</a>
		</li>
		</ul>
		</div>
		<p><?php  dynamic_sidebar('footer_sidebar');?></p>
		</div>
		
		</div>
		
		<!--end row 3-->
		</div>
		<!--row end-->
		</div>
		<!--container end-->
		
		
		</div>
		
		
		
		
		<div id="tf-footer">
			<div class="container"><!-- container -->
				<p class="pull-left"> <?php  dynamic_sidebar('copyright_sidebar');?></p></p> <!-- copyright text here-->
					<div class="list-inline social pull-right">
						<p>Theme by vadton tech</p>
						
					</div>
				</div><!-- end container -->
			</div>
		
		
		
		
		
		
		
		
		
		</footer>
		
		
		<?php wp_footer(); ?>
		</body>
		</html>

		

