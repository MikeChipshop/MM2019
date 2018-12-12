<footer class="mini_main-footer clearfix">
    <div class="mini_wrap">

        <div class="mini_footer-section address">
        	<div class="mini_footer-address-block">
                <h1>Where to find Miniman</h1>
                <p>Why not pop in and say hello? Just make sure to let me know you're coming!</p>
                <ul class="mini_address-list" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                	<li>Miniman Web Design</li>
                    <li itemprop="streetAddress">22 Kinlochard Cottages</li>
                    <li itemprop="addressLocality">Kinlochard</li>
                    <li itemprop="postalCode">FK8 3TW</li>
                </ul>

                <?php
                    $hour = date('H');
                    $weekday = date('D');
	                if ($weekday != 'Sat' && $weekday != 'Sun' && $hour > 9 && $hour < 18):
                        $weareopen = true;
                    else:
                        $weareopen = false;
                    endif;
                ?>

                <ul>
                	<li><a href="mailto:hello@miniman-webdesign.co.uk"><i class="fa fa-fw fa-envelope"></i> <span itemprop="email">hello@miniman-webdesign.co.uk</span></a></li>
					<?php if ($weareopen == true): ?>
                    	<li><a href="tel:+441413564646"><i class="fa fa-fw fa-phone"></i> +44(0)141 356 4646</a></li>
                        <li><a href="tel:07828847356"><i class="fa fa-fw fa-mobile"></i> <span itemprop="telephone">07828 847 356</span></a></li>
                        <li><a href="skype:mike.bishop?call"><i class="fa fa-fw fa-skype"></i> mike.bishop</a></li>
                    <?php else: ?>
                    	<li><i class="fa fa-fw fa-phone"></i> +44(0)141 356 4646</li>
                        <li><i class="fa fa-fw fa-mobile"></i> 07828 847 356</li>
                        <li><i class="fa fa-fw fa-skype"></i> mike.bishop <small>(Currently offline)</small></li>
                    <?php endif; ?>
                </ul>

                <?php if ($weareopen == true): ?>
                	<p class="mini_office-hours open">
                        <strong>Miniman is currently open and working hard!</strong><br />Feel free to drop me a line for a chat or fire off an email and i'll get straight back to you. Office hours are 10AM - 6PM GMT Monday to Friday unless otherwise pre-arranged
                    </p>
                <?php else: ?>
                    <p class="mini_office-hours closed">
                        <strong>Miniman is not currently open but i can be reached via email and shall reply as soon as possible.</strong><br /> Office hours are 10AM - 6PM GMT Monday to Friday unless otherwise pre-arranged
                    </p>
                <?php endif; ?>
			</div>
        </div>
        <div class="mini_footer-section">
            <div class="mini_footer-social-block">
            	<h1>Opening Hours</h1>
                <ol class="mini_footer-opening-hours" itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification">
                	<li><span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">Monday</span> <span itemprop="opens" content="10:00">10:00</span> - <span itemprop="closes" content="18:00">18:00</span></li>
                    <li><span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">Tuesday</span> <span itemprop="opens" content="10:00">10:00</span> - <span itemprop="closes" content="18:00">18:00</span></li>
                    <li><span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">Wednesday</span> <span itemprop="opens" content="10:00">10:00</span> - <span itemprop="closes" content="18:00">18:00</span></li>
                    <li><span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">Thursday</span> <span itemprop="opens" content="10:00">10:00</span> - <span itemprop="closes" content="18:00">18:00</span></li>
                    <li><span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">Friday</span> <span itemprop="opens" content="10:00">10:00</span> - <span itemprop="closes" content="18:00">18:00</span></li>
                    <li><span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">Saturday</span> Closed</li>
                    <li><span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">Sunday</span> Closed</li>
                </ol>
                <h1>Also available socially</h1>
                <ul class="mini_footer-social-icons">
                    <li><a href="https://plus.google.com/+Miniman-webdesignCoUk" target="_blank" rel="noopener"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://www.facebook.com/MinimanWebDesign" target="_blank" rel="noopener"><i class="fa fa-facebook-official"></i></a></li>
                    <li><a href="https://twitter.com/minimanwd" target="_blank" rel="noopener"><i class="fa fa-twitter-square"></i></a></li>
                    <li><a href="https://uk.linkedin.com/in/mikestevebishop" target="_blank" rel="noopener"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
                <h1>Service Areas</h1>
                I work within a variety of <a href="http://miniman-webdesign.co.uk/locations">locations</a>. From <a href="http://miniman-webdesign.co.uk/locations/freelance-web-design-stirlingshire/">Stirlingshire</a> to <a href="http://miniman-webdesign.co.uk/locations/freelance-web-design-glasgow/">Glasgow</a> and beyond. If you don't see yours, <a href="http://miniman-webdesign.co.uk/contact">let me know</a>.<br>I also work remotely.
            </div>
        </div>
        <div class="mini_footer-section">
            <div class="mini_footer-updates-block">
                <h1>Updates from the blog</h1>
                <ul class="mini_updates-list">
                    <?php $footer_query = new WP_Query("posts_per_page=5"); while($footer_query->have_posts()) : $footer_query->the_post(); ?>
                        <li class="mini_update-item">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="grecaptcha-badge" data-style="inline" data-children-count="1"><div class="grecaptcha-logo"><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lehg4AUAAAAANnDkETDDWXVLpEjwCmOHxBrmu_h&amp;co=aHR0cHM6Ly9taW5pbWFuLXdlYmRlc2lnbi5jby51azo0NDM.&amp;hl=en&amp;v=v1543818755456&amp;size=invisible&amp;cb=q5yt715ll1a" width="256" height="60" role="presentation" name="a-whul5g9n0ki0" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" data-children-count="0"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div>
        </div>
    </div>
</footer>

<div class="mini_bottom-footer">
	<div class="mini_wrap">
		Websites &hearts; Miniman &copy; <?php echo date("Y"); ?>
    </div>
</div>
<?php wp_footer(); ?>
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,300italic,700' rel='stylesheet' type='text/css'>
</body>
</html>
