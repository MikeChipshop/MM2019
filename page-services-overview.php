<?php get_header(); ?>
	<?php if ( have_posts() ) { while ( have_posts() ) : the_post(); ?>
        <article id="mini_post-<?php the_ID(); ?>" <?php post_class('mini_page clearfix'); ?>>
            <header class="mini_blog-index-header">
                <h1><?php the_title(); ?></h1>
                <?php if(get_field('sub_header')){ ?><h2><?php the_field('sub_header'); ?></h2><?php }; ?>
            </header>
            <main class="mini_page rte">
                <div class="mini_wrap">
                    <?php the_content(); ?>
                </div>
                <section class="mini_services-overview-list">
                	<ul>
                    	<li>
                        	<a href="/web-design/">
                        	<div class="mini_services-overview-list-cont">
                        		<i class="fa fa-pencil-square-o"></i>
                                <h1>Web Design</h1>
                           	</div>
                            </a>
                        </li>
                        <li>
                        	<a href="/web-development">
                        	<div class="mini_services-overview-list-cont">
                            	<i class="fa fa-cogs"></i>
                                <h1>Web Development</h1>
                        	</div> 
                            </a>   
                        </li>
                    	<li>
                        	<a href="/wordpress">
                        	<div class="mini_services-overview-list-cont">
                            	<i class="fa fa-wordpress"></i>
                                <h1>WordPress</h1>
                            </div>
                            </a>
                        </li>
                    	<li>
                        	<a href="/white-labeling">
                        	<div class="mini_services-overview-list-cont">
                        		<i class="fa fa-question-circle"></i>
                                <h1>White Labelling</h1>
                            </div>
                            </a>
                        </li>
                    	<li>
                        	<a href="/website-maintenance-packages">
                        	<div class="mini_services-overview-list-cont">
                        		<i class="fa fa-medkit"></i>
                                <h1>Maintenance Packages</h1>
                            </div>
                            </a>
                        </li>
                    	<li>
                        	<a href="/website-consultancy">
                        	<div class="mini_services-overview-list-cont">
                        		<i class="fa fa-user"></i>
                                <h1>Consultancy</h1>
                            </div>
                            </a>
                        </li>
                    </ul>
                </section>
            </main>
        </article>
    <?php endwhile; }; ?>
<?php get_footer(); ?>
