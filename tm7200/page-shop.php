<?php get_header(); ?>

<div class="row">
    <div class="col-12 welcomePages">
        <img class='img-full-width w-100 thumbnail' src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID),'thumbnail'); ?>" />
        <div class="captionWelcome">
            <h1>Look for a gift or a simple pleasure?</h1>
            <h4 class="mt-3">Hope you find something nice</h4>
        </div>
    </div>
</div>

<div class="parallax mt-3" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/shop/img_parallax.png');">
    <h3 class="sectionTitle"> Categories</h3>
</div>

<!-- Categories -->
<div class="row mt-2 mb-4 categoriesShop">
    <div class="col-12 col-sm-8 col-md-7 col-lg-8  categoriesBig">
        <?php 
            $category1Image = get_field('categoriesshopimage1');  
            $category1Text = get_post_meta( get_the_ID( ), 'categoriesshoptitle1', true ); 
        if( !empty($category1Image) ): ?>
        <img class='img-fluid' src="<?php echo $category1Image['url']; ?>" alt="<?php echo $category1Image['alt']; ?>" />
        <div class="categoriesCaptionBig">
            <?php endif;
                echo "<h1>".$category1Text."</h1>";
            ?>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-5 col-lg-4 categoriesSmall">
        <div class="containerCategorySmall1">
            <?php 
            $category2Image = get_field('categoriesshopimage2');  
            $category2Text = get_post_meta( get_the_ID( ), 'categoriesshoptitle2', true ); 
        if( !empty($category2Image) ): ?>
            <img class='img-fluid mb-3' src="<?php echo $category2Image['url']; ?>" alt="<?php echo $category2Image['alt']; ?>" />
            <div class="categoriesCaptionSmall1">
                <?php endif;
                echo "<h1>".$category2Text."</h1>";
            ?>
            </div>
        </div>
        <div class="containerCategorySmall2">
            <?php 
            $category3Image = get_field('categoriesshopimage3');  
            $category3Text = get_post_meta( get_the_ID( ), 'categoriesshoptitle3', true ); 
        if( !empty($category3Image) ): ?>
            <img class='img-fluid' src="<?php echo $category3Image['url']; ?>" alt="<?php echo $category3Image['alt']; ?>" />
            <div class="categoriesCaptionSmall2">
                <?php endif;
                echo "<h1>".$category3Text."</h1>";
            ?>
            </div>
        </div>
    </div>
</div>

<!-- Trend products -->
<div class="parallax" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/shop/img_parallax.png');">
    <h3 class="sectionTitle">Trend products</h3>
</div>

<div class="trendProducts mb-5 " style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/shop/backShopTrend.png');">

    <div class="row">
        <div class="col-md-1 col-lg-1"></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card"><a href="#" style="text-decoration: none;">
                    <?php 
            $product1Image = get_field('featured_productimage1');  
            $product1Name = get_post_meta( get_the_ID( ), 'featured_productname1', true ); 
            $product1Description = get_post_meta( get_the_ID( ), 'featured_productdescription1', true );  
        if( !empty($product1Image) ): ?>
                    <img class='card-img-top' src="<?php echo $product1Image['url']; ?>" alt="<?php echo $product1Image['alt']; ?>" />
                    <div class="card-body">
                        <?php endif;
            echo "<h5 class='card-title'>".$product1Name."</h5>";
            echo "<p class='card-text'>".$product1Description."</p>";
        ?>
                    </div>
                </a></div>
        </div>
        <div class="col-md-2 col-lg-2"></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card"><a href="#" style="text-decoration: none;">
                    <?php 
            $product2Image = get_field('featured_productimage2');  
            $product2Name = get_post_meta( get_the_ID( ), 'featured_productname2', true ); 
            $product2Description = get_post_meta( get_the_ID( ), 'featured_productdescription2', true );  
        if( !empty($product2Image) ): ?>
                    <img class='card-img-top' src="<?php echo $product2Image['url']; ?>" alt="<?php echo $product2Image['alt']; ?>" />
                    <div class="card-body">
                        <?php endif;
            echo "<h5 class='card-title'>".$product2Name."</h5>";
            echo "<p class='card-text'>".$product2Description."</p>";
        ?>
                    </div>
                </a></div>
        </div>
        <div class="col-md-1 col-lg-1"></div>
    </div>

    <div class="row">
        <div class="col-md-1 col-lg-1"></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card"><a href="#" style="text-decoration: none;">
                    <?php 
            $product3Image = get_field('featured_productimage3');  
            $product3Name = get_post_meta( get_the_ID( ), 'featured_productname3', true ); 
            $product3Description = get_post_meta( get_the_ID( ), 'featured_productdescription3', true );  
        if( !empty($product3Image) ): ?>
                    <img class='card-img-top' src="<?php echo $product3Image['url']; ?>" alt="<?php echo $product3Image['alt']; ?>" />
                    <div class="card-body">
                        <?php endif;
            echo "<h5 class='card-title'>".$product3Name."</h5>";
            echo "<p class='card-text'>".$product3Description."</p>";
        ?>
                    </div>
                </a></div>
        </div>
        <div class="col-md-2 col-lg-2"></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card"><a href="#" style="text-decoration: none;">
                    <?php 
            $product4Image = get_field('featured_productimage4');  
            $product4Name = get_post_meta( get_the_ID( ), 'featured_productname4', true ); 
            $product4Description = get_post_meta( get_the_ID( ), 'featured_productdescription4', true );  
        if( !empty($product4Image) ): ?>
                    <img class='card-img-top' src="<?php echo $product4Image['url']; ?>" alt="<?php echo $product4Image['alt']; ?>" />
                    <div class="card-body">
                        <?php endif;
            echo "<h5 class='card-title'>".$product4Name."</h5>";
            echo "<p class='card-text'>".$product4Description."</p>";
        ?>
                    </div>
                </a></div>
        </div>
        <div class="col-md-1 col-lg-1"></div>
    </div>

</div>

<div class="parallax" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/shop/img_parallax.png');">
    <h3 class="alsoYouShop">Also you might get interest on this items</h3>
</div>

<div class="row mt-2">
    <ul class="slider">
        <?php 
            $args = array( 'post_type' => 'main-slider' );
            $the_query = new WP_Query( $args ); 
            if($the_query->have_posts()) :
                while($the_query->have_posts()) : $the_query->the_post(); ?>
        <li><a href="#"><img class='img-fluid w-50' src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>" />
                <h1>
                    <?php the_content() ?>
                </h1>
            </a></li>
        <?php endwhile;
            else :
                echo "<p>no content</p>";
            endif;
        ?>
    </ul>
</div>

<?php get_footer(); ?>
