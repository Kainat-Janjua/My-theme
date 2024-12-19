<?php get_header(); ?>

<div id="post_page">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="title"><?php the_title(); ?></h1>

                
                <div class="post_page">
                    <div class="post-image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); // You can change the size as needed ?>
                        <?php endif; ?>
                    </div>
                    <?php
        $content = get_the_content();
        
        // Optionally, you can apply the 'wpautop' function to add paragraph tags
        $content = wpautop( $content );

        // Display the content
        echo $content;
   
?>

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
