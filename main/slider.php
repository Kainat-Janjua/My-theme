<div class="slider">
<div class="posts">
    <div class="slides">
    <?php 
    $query = new WP_Query(array('category_name' => 'uncategorized')); 
  
    if ($query->have_posts()) : 
        while ($query->have_posts()) : $query->the_post(); ?>
            <article class="posts-item" <?php post_class(); ?>>
             <div class="post-thumbnail">
                            <?php the_post_thumbnail(size: 'large'); ?>
                        </div>     
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
</div>
</div>
<script>
let currentIndex = 0;
const slides = document.querySelectorAll('.posts-item'); // Change this to match your class
const totalSlides = slides.length;
const slidesToShow = 6; // Change this to the number of slides you want to show

function showSlides() {
    const offset = -currentIndex * (100 / slidesToShow); // Calculate the offset
    document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % (totalSlides - slidesToShow + 1); // Loop back to the first slide
    showSlides();
}

// Automatically change slides every 2 seconds
setInterval(nextSlide, 2000);

// Initial display
showSlides();
</script>