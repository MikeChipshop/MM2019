<?php get_header(); ?>
	<?php if ( have_posts() ) { while ( have_posts() ) : the_post(); ?>
        <article id="mini_post-<?php the_ID(); ?>" <?php post_class('mini_page clearfix'); ?>>
            <header class="mini_blog-index-header">
                <h1>Portfolio</h1>
                <?php if(get_field('sub_header')){ ?><h2><?php the_field('sub_header'); ?></h2><?php }; ?>
            </header>
            <main class="mini_page">
                <div class="mini_wrap">
                	<div class="mini_portfolio-img">
                    	<?php the_post_thumbnail( 'portfolio' ); ?>
                    </div>
                    <div class="mini_portfolio-content">
                    	<h1><?php the_title(); ?></h1>
                    	<?php the_content(); ?>
                    </div>
                </div>
            </main>
        </article>
    <?php endwhile; }; ?>
<?php get_footer(); ?>
