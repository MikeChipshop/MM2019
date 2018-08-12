<?php get_header(); ?>
	<div class="mini_404-content">
		<h1>Uh oh! Page not found.</h1>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/miniman-404.png" alt="Miniman Web Design - Page not found">
        <div class="mini_404-copy rte">
        	<p>Well that's odd, but don't worry about it, we'll soon get you on your merry way</p>
            <p>Either the link is broken or the page never existed, either way that's not much help to you, so give the buttons below a browse and poke the one you like the look of.</p>
        </div>
        <div class="mini_404-buttons">
        	<a href="<?php bloginfo('url'); ?>" title="Back home">Head homeward bound</a>
            <a href="mailto:hello@miniman-webdesign.co.uk" title="Back home">Drop me an email</a>
        </div>
    </div>
<?php get_footer(); ?>
