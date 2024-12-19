<?php get_header(); ?>
<a class="logo" href="#">
                <img src="wp-content/themes/Mytheme/sveston_logo_-removebg-preview.png" alt="Logo" />
            </a>
<div id="post_page">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                
                <div class="post-page">
                    <div class="post-image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); // You can change the size as needed ?>
                        <?php endif; ?>
                    </div>
                    <div class="post-text">
                        <?php the_content(); ?>
                    </div>
                    
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No content found for this post.</p>
    <?php endif; ?>
</div>
<div class="post-meta">
                    <span>Published on: <?php the_date(); ?></span>
                    <span>Author: <?php the_author(); ?></span>
                </div>
<?php get_footer(); ?>
