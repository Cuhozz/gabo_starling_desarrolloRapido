<?php get_header(); ?>

<!-- Welcome Section -->
<div class="row mb-5">
    <div class="col-12 welcomePages">
        <img class='img-full-width w-100 thumbnail' src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID),'thumbnail'); ?>" />
        <div class="captionWelcome">
            <h1>Meet Us!</h1>
            <h4 class="mt-3">You are part of our history</h4>
        </div>
    </div>
</div>

<h3 class="aboutMessage mb-5">In Coffee Place we care about you</h3>

<div class="aboutSection">
    <div class="row mb-5">
        <div class="col-md-5">
            <?php
            $aboutImage1 = get_field('aboutusimage1');  
        if( !empty($aboutImage1) ): ?>
            <img class='img-fluid imgAbout' src="<?php echo $aboutImage1['url']; ?>" alt="<?php echo $aboutImage1['alt']; ?>" />
            <?php endif; ?>
        </div>
        <div class="col-md-1"></div>
        <div class="col-12 col-md-5">
            <?php 
            $aboutTitle1 = get_post_meta( get_the_ID( ), 'aboutustitle1', true ); 
            $aboutDesc1 = get_post_meta( get_the_ID( ), 'aboutusdescription1', true ); 
            echo "<h5>".$aboutTitle1."</h5>";
            echo "<p>".$aboutDesc1."</p>";
        ?>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row mt-3 md-5">
        <div class="col-12 col-md-5">
            <?php 
            $aboutTitle2 = get_post_meta( get_the_ID( ), 'aboutustitle2', true ); 
            $aboutDesc2 = get_post_meta( get_the_ID( ), 'aboutusdescription2', true ); 
            echo "<h5>".$aboutTitle2."</h5>";
            echo "<p>".$aboutDesc2."</p>";
        ?>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">        
            <?php
            $aboutImage2 = get_field('aboutusimage2');  
        if( !empty($aboutImage2) ): ?>
            <img class='img-fluid imgAbout' src="<?php echo $aboutImage2['url']; ?>" alt="<?php echo $aboutImage2['alt']; ?>" />
            <?php endif; ?>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<div class="row interestOnShop mt-2">
    <div class="col-12 col-sm-5">
        <p>Interested on shopping?</p>
    </div>
    <div class="col-sm-3"></div>
    <div class="col-12 col-sm-4">
        <button type="button" class="btn btnAbout_Shop">Shop</button>
    </div>
</div>

<?php get_footer(); ?>
