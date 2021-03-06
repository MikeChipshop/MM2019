<?php get_header(); ?>
	<section class="mini_page">
		<?php if ( have_posts() ) {  ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('mini_single-post'); ?>>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if(get_field('single_blog_hero')): ?>
						<?php
							$attachment_id = get_field('single_blog_hero');
							$size = "full";
							$image = wp_get_attachment_image_src( $attachment_id, $size );
						?>
						<header class="mini_article-header" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;background-attachment:fixed">
					<?php else: ?>
            			<header class="mini_article-header">
					<?php endif; ?>
						<div class="mini_inner-wrap">
            				<h1 class="mini_page-title"><?php the_title(); ?></h1>
							<?php if(get_field('sub_header')): ?>
								<h2><?php the_field('sub_header'); ?></h2>
							<?php endif; ?>
						</div>
					</header>
					<div class="mini_inner-wrap">
	                	<main class="mini_page-content rte">
	                		<?php the_content(); ?>
	                	</main>
                        <aside class="mini_post-suffix">
                        	<h1>About the Author - Mike Bishop</h1>
                            <p>I'm a UK based freelance web Designer and Web Developer living in Stirling, Scotland and Miniman is my personal brand.</p>
                            <p>If you're looking for a freelancer to take on your next project, then drop me a line over at <a href="http://miniman-webdesign.co.uk/contact">my contact page</a>, and let's have a chat!</p>
							<p>I can also be found at the <a href="https://strathardhub.com" title="Visit Strathard Hub">Strathard Business Hub, Aberfoyle, Stirling</a>, so pop in for a coffee if you're passing.</p>
                            <div class="mini_suffix-other">
                            	More posts from Mike:

                            	<?php $suffix_query = new WP_Query('posts_per_page=1&orderby=rand'); while($suffix_query->have_posts()) : $suffix_query->the_post(); ?>
                                	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                <?php endwhile; wp_reset_query(); ?>
                            </div>
                        </aside>
                        <section class="mm19_comments" id="comments">
                            <div class="mm19_comments-wrap">
                            <?php comments_template( '', true ); ?>
                            </div>
                        </section>
                    </div>
            	<?php endwhile; ?>
			</article>
		<?php }; ?>
  	</section>
<?php get_footer(); ?>
