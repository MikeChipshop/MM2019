<?php get_header(); ?>
	<section class="mini_blog-index">
    	<header class="mini_blog-index-header">
           	<h1>This, is a blog...</h1>
            <h2>All the thoughts and musings of a tiny little web designer</h2>
        </header>
        <div class="mini_blog-index-main clearfix">
           	<main>
				<?php if ( have_posts() ) {  ?>
        	        <ul>
            	        <?php while ( have_posts() ) : the_post(); ?>
                        	<?php if ( has_post_format( 'link' )) { ?>
                                <li>
                                    <div class="mini_wrap">
                                        <article id="mini_post-<?php the_ID(); ?>" <?php post_class('mini_index-post-item clearfix mini_post-format-link'); ?>>
                                             <div class="mini_index-content">
                                                <header>
                                                     <h1><a href="<?php the_field('post_format_link'); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                                                </header>
                                                <main>
                                                    <?php the_content(); ?>
                                                    <a href="<?php the_field('post_format_link'); ?>" class="mini_read-more" target="_blank"><i class="fa fa-link"></i> Visit site</a>
                                                </main>
                                            </div>
                                        </article>
                                    </div>
                                </li>
                            <?php } else { ?>
                                <li>
                                    <div class="mini_wrap">
                                        <article id="mini_post-<?php the_ID(); ?>" <?php post_class('mini_index-post-item clearfix'); ?>>
                                            <aside>
                                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'featured-thumb' ); ?></a>
                                            </aside>
                                             <div class="mini_index-content">
                                                <header>
                                                     <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                                                </header>
                                                <main>
                                                    <?php echo wp_trim_words( get_the_content(), 40 ); ?>
                                                    <a href="<?php the_permalink(); ?>" class="mini_read-more">Read more &raquo;</a>
                                                </main>
                                            </div>
                                        </article>
                                    </div>
                                </li>
                            <? }; ?>
                        <?php endwhile; ?>
                    </ul>
                <?php }; ?>
            </main>
        </div>
	</section>
<?php get_footer(); ?>
