<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap clearfix">

        <?php do_shortcode( '[responsive_slider]' ); ?>

		    <div class="fourcol first homepage-sections clearfix">
		    	<h2>Announcements</h2>
	    		<?php if (function_exists (news_announcement)) news_announcement(); ?>
		    </div>
		    
		    <div class="fourcol homepage-sections clearfix">
		    	<h2>Contact Us</h2>
				    <strong>Address:</strong> Magsaysay Ave. Cor. Apacible St., 
				    University of the Philippines, Diliman, Quezon City<br/>

				    <ul class="contact-page">
							<li id="phone">(02) 981-8500 | Local 2050 </li>
							<li id="mail">helpdesk@upd.edu.ph </li>
						</ul>

				    <strong>Office Hours:</strong> Mondays to Fridays, 8:00AM - 5:30PM
		    </div>

		    <div class="fourcol homepage-sections clearfix last">
		    	<h2>Links</h2>
						<a href="http://up.edu.ph">University of the Philippines System</a>
						<a href="http://upd.edu.ph">University of the Philippines Diliman</a>
						<a href="http://ucc.upd.edu.ph">University Computer Center</a>
						<a href="#">FOSS</a>
					<h2>Connect with Us</h2>
						<a id="fb-link" href="https://www.facebook.com/updilnet">
					  	<img src="<?php echo get_template_directory_uri(); ?>/library/images/f_logo.png">
					  </a>
					  <a id="twit-link" href="https://twitter.com/dilnet">
					  	<img src="<?php echo get_template_directory_uri(); ?>/library/images/twitter-bird-white-on-blue.png">
					  </a>
					  
		    </div>


		    <?php // get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
