<?php get_header(); ?>

<?php include('video.php'); ?>
<div class="content">
    <div class="text-left">
        <h2>Explore the Sveston collection</h2>
    </div>
    <div class="text-right">
        <p>The Seveston collection offers a wide range of prestigious, high-precision timepieces, from Professional to Classic models to suit any wrist.</p>
    </div>
</div>
<?php include('slider.php'); ?>

<h1 id="post">Products</h1>
<div class="posts">
    <?php 
    $query = new WP_Query(array('category_name' => 'uncategorized')); 
    if ($query->have_posts()) : 
        while ($query->have_posts()) : $query->the_post(); ?>
            <article class="posts-item" <?php post_class(); ?>>
             <div class="post-thumbnail">
                            <?php the_post_thumbnail(size: 'large'); ?>
                        </div>     
                <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php
                 $thumbnail_id = get_post_thumbnail_id(); 
                 $caption = wp_get_attachment_caption($thumbnail_id);
                 if ($caption) {
                     echo '<p class="image-caption">' . esc_html($caption) . '</p>';
                 }
                 ?>  
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No content found for this post.</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); // Reset the query ?>
</div>
<div class="image">
    <img src="wp-content/themes/Mytheme/image.png" alt="image">
</div>
<div clas="text_index">
    <h2 class="heading_info">SVESTON PAKISTAN | ONLINE SHOPPING FOR WRIST WATCHES IN PAKISTAN</h2>
    <p class="para_info">
        <p class="p1">Welcome to Sveston Pakistan Website, The Affordable Luxury Watch Brand in Pakistan. Sveston Is A Luxury Watch Brand with Over 4 Decades of Experience in Watchmaking Industry and A Family Of 18 Million Happy Customers</p>
        <p class="p1">Experience Online Shopping for Watches in Pakistan With Free Home Delivery with Sveston Watches Original Price in Pakistan. We Encourage Shoppers to Buy Wrist Watches Online from The Best Online Watch Store in Pakistan. </p>
        <p class="p1">Latest Sveston Watches Price in Pakistan 2024 Are Affordable Considering the Build Quality and Luxury Watch Case. We Aim to Redefine Online Watch Shopping in Pakistan By Providing Brand Warranty, Free Home Delivery and Easy to Return Facility.  
        </p>
        <p class="p1">Sveston Tops the List of Best Watch Brands in Pakistan 2024 for its Branded Watches for Sale at Best Prices. We Encourage Shoppers to Experience Luxury and Convenience of Online Watch Shopping in Pakistan with Payment on Delivery.</p>
        <p class="p1">Buy Sveston Wrist Watches Online and Pay Cash on Delivery in Lahore, Karachi, Islamabad, Multan, Rawalpindi, Faisalabad, Hyderabad, Peshawar, Gujranwala, Dera Ismail Khan, Sialkot, Quetta, Bahawalpur And Across Country.</p>
    </p>
</div>
<?php echo paginate_links(); ?>
<?php get_footer();