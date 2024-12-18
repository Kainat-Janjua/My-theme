<!-- 
    Template Name: Contact Template
-->
<?php get_header(); ?>
<div id="post-content">
    <?php 
    if(have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <!-- Your post content can go here -->
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No content found for this post.</p>
    <?php endif; ?>
</div>
<div class="contact-image">
    <img src="<?php echo get_template_directory_uri(); ?>/contact-1.png" alt="contact-1">
    <img src="<?php echo get_template_directory_uri(); ?>/contact-2.png" alt="">
</div>
<div class ="contact_page">
    <h1 class="contact_h1"> GET IN TOUCH</h1>
    <p class="contact_p">We value our customers greatly, and are always here to help. If you have any questions, queries or comments feel free to drop us a line and we will get back to you as soon as we can.</p>
</div>
<style>
    .contact_page
{
   text-align: center;
}
.contact_h1
{
   text-align: center;
}
.contact_p
{
   text-align: center;
}
</style>
<?php get_footer(); ?>
