<?php get_header(); ?>

<div class="row mb-5">
    <div class="col-md-12 welcomeShop">
        <img class='img-full-width w-100 thumbnail' src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID),'thumbnail'); ?>"/>
        <div class="captionShop">
            <h1>Look for a gift or a simple pleasure?</h1>
            <button type="button" class="btn">Explore our shop</button>
        </div>
    </div> 
</div>

<?php get_footer(); ?>