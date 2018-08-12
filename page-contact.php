<?php get_header(); ?>
	<?php if ( have_posts() ) { while ( have_posts() ) : the_post(); ?>
        <article id="mini_post-<?php the_ID(); ?>" <?php post_class('mini_page clearfix'); ?>>
            <header class="mini_blog-index-header">
                <h1><?php the_title(); ?></h1>
                <?php if(get_field('sub_header')){ ?><h2><?php the_field('sub_header'); ?></h2><?php }; ?>
            </header>
            <main class="mini_page rte">
                <div class="mini_wrap">
                    <div class="miniman_contact-intro">
                    	<?php the_content(); ?>
                    </div>
                    <div class="mini_contact-page-content">
                    	<div class="mini_contact-methods">
                    		<h2>Contact me directly...</h2>
                    		<ul>
                    			<li><a href="mailto:hello@miniman-webdesign.co.uk"><i class="fa fa-fw fa-envelope"></i> hello@miniman-webdesign.co.uk</a></li>
                    			<li><a href="tel:+441413564646"><i class="fa fa-fw fa-phone"></i> +44(0)141 356 4646</a></li>
                    			<li><a href="tel:+447828847356"><i class="fa fa-fw fa-mobile"></i> +44(0)7828 847 356</a></li>
                    			<li><a href="skype:mike.bishop?call"><i class="fa fa-fw fa-skype"></i> mike.bishop</a></li>
                    		</ul>
                    	<div class="mini_best-method">
                    		<h3><i class="fa fa-info-circle"></i> Email is always the best method</h3>
                    		Writing a brief intro about yourself and your idea and popping it in my inbox is always the fastest way to find me. I guarantee that all emails will be answered the same day (unless business is closed, at which time you will receive notification of such an event).
                    	</div>
                    </div>
                    <div class="mini_contact-form">
                    	<h2>...or use this form</h2>
                    	<?php echo do_shortcode( '[contact-form-7 id="118" title="Contact form"]' ); ?>                    
                    </div>
                </div>
            </main>
        </article>
    <?php endwhile; }; ?>
<?php get_footer(); ?>
