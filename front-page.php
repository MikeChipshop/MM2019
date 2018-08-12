<?php get_header(); ?>
	<section class="mini_welcome">
    	<div class="mini_welcome-overlay"></div>
    	<div class="mini_wrap">
        	<div class="mini_welcome-intro">
            	<h1 class="fade-in">Creating Your Beautiful, High Performing Online presence</h1>
                <h2 class="fade-in">Miniman | Mike Bishop, UK Freelance Web Designer &amp; Developer based in Stirling</h2>
            </div>
        </div>
    </section>
    	<section class="mini_home-intro clearfix">
        	<div class="mini_wrap">
        		<div class="mini_home-intro-copy">
            		<?php the_field('home_page_intro'); ?>
            	</div>
                <div class="mini_home-intro-img">
            		<img src="<?php bloginfo('stylesheet_directory'); ?>/img/mike-avatar.jpg" alt="Mike Bishop is Miniman Web Design - A Freelance Web Design and developer based in Stirlingshire, Scotland" />
            	</div>
            </div>
        </section>
		<section class="mini_home-services">
        	<div class="mini_wrap">
            	<h1>Services I offer</h1>
                <div class="mini_services-intro">
                	<p>I don't just offer web design in Stirlingshire but also a whole host of web based and digital services.</p>
                	<p>On top of offering web design and web development services i also offer a range of Sitecare packages designed to keep your data and your website backed-up, secure and safe.</p>
                	<p>I also offer a consultancy service to make sure you're getting the best return possible from your online presence.</p>
                </div>
            	<ul class="clearfix">
                	<li><a href="/web-design/" title="Miniman Web Design - Web Design Services"><i class="fa fa-pencil-square-o"></i>Web Design</a></li>
                    <li><a href="/web-development" title="Miniman Web Design - Web Development Services"><i class="fa fa-cogs"></i>Web Development</a></li>
                    <li><a href="/wordpress" title="Miniman Web Design - WordPress Services"><i class="fa fa-wordpress"></i>WordPress</a></li>
                    <li><a href="/white-labeling" title="Miniman Web Design - White Labeling Services"><i class="fa fa-question-circle"></i>White Labelling</a></li>
                    <li><a href="/website-maintenance-packages" title="Miniman Web Design - Sitecare Packages"><i class="fa fa-medkit"></i>Sitecare Maintenance Packages</a></li>
                    <li><a href="/website-consultancy" title="Miniman Web Design - Consultancy Services"><i class="fa fa-user"></i>Consultancy</a></li>
                </ul>
            </div>
        </section>     
        <section class="mini_section-about mini_section">
          <div class="mini_about-content">
            <div class="mini_location">
            	<h1>Where to find me</h1>
            	<p>Miniman web design is based in the beautiful surroundings of the Loch Lomond and Trossachs National Park, found in Stirlingshire in Scotland's central belt.</p>
                <p>The location is the perfect mix of quiet seclusion and ease of access to Scotlands major cities of, Glasgow, Edinburgh and Stirling, making us well positioned for clients</p>
                <a class="mini_view-map" target="_blank" href="https://www.google.co.uk/maps/place/Miniman+Web+Design/@56.1902707,-4.5656766,11.75z/data=!4m2!3m1!1s0x488856cfc44cfe4d:0xb45410f977f52ac8">Find us on google Maps</a>
            </div>
          </div>
        </section>
        <section class="mini_section-contact mini_section">
        	<div class="mini_contact-content">
            	<h1>How to contact me</h1>
            	<p>I want it to be as easy as possible to contact me. The quickest method is by email at <a href="mailto:hello@miniman-webdesign.co.uk" title="Miniman Web Design Contact Email">hello@miniman-webdesign.co.uk</a> but feel free to use your method of choice.</p>
                <p>A full selection of contact methods can be found on my <a href="http://miniman-webdesign.co.uk/contact" title="Contact me">contact page</a>.</p>	
                <a href="http://miniman-webdesign.co.uk/contact" title="Go to Contact Page" class="mini_fp-contact-button">contact me</a>
            </div>
        </section>
			<section class="mini_home-portfolio">
            	<div class="mini_wrap">
                	<h1>My Portfolio</h1>
                    <ul>
                    	<?php 
							query_posts( array(
								'post_type' => array( 'portfolio' ),
								'orderby' => 'RAND',
							)
							); 
							if ( have_posts() ) { while ( have_posts() ) : the_post(); 
						?>
                            <li>
                                <div class="mini_home-portfolio-img">
                                    <!-- <a href="<?php the_permalink(); ?>">--><?php the_post_thumbnail( 'portfolio' ); ?><!-- </a>-->
                                </div>
                                <div class="mini_home-portfolio-content">
                                    <h2><!-- <a href="<?php the_permalink(); ?>">--><?php the_title(); ?><!-- </a>--></h2>
                                </div>
                            </li>
                        <?php endwhile; }; wp_reset_query(); ?>
                    </ul>
                </div>
            </section>     
<?php get_footer(); ?>
