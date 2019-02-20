<?php get_header(); ?>

<div class="row">
    <div class="col-12 welcomePages">
        <img class='img-full-width w-100 thumbnail' src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID),'thumbnail'); ?>"/>
        <div class="captionWelcome">
            <h1>Take a look on our daily routine, <br>here, in Coffee Place...</h1>
        </div>
    </div> 
</div>

	<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="text-center">
			<p class="title_gallery mt-1">Gallery</p>
		</div>
	</div>
</div>

	<div class="row">
		<div class="col-lg-12">
 <div class="parallax1 parallax1_message">

    <div class="hovereffect">
        <div class="overlay">
           <h2>Share your Experiences</h2>
           <a class="info" href="#">Link here</a>
        </div>
    </div>

 </div>
 </div>
</div>
<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="text-center">
			<p class="title_gallery mt-1">Visit our Social Networks</p>
		</div>
	</div>
</div>
<div class="row mt-1">
		<div class="col-lg-12">
 <div class="parallax2 parallax1_message">

    <div class="hovereffect">
        <div class="overlay">
           <h2>Coffee Place on Facebook</h2>
           <a class="info" href="#">Visit now</a>

        </div>
    </div>

 </div>
 </div>
</div>
<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="text-center">
			<p class="title_gallery mt-1">Some satisfied customers</p>
		</div>
	</div>
</div>
<div class="row">

<div class="col-md-12 col-sm-4 col-lg-4 ">
    <ul class="slider1">
        <?php 
            $args = array( 'post_type' => 'main-slider' );
            $the_query = new WP_Query( $args ); 


            if($the_query->have_posts()) :
                while($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li><img class='img-fluid' src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>" />
                           <p><?php the_content()?></p>
                      </li>

                <?php endwhile;
            else :
               
            endif;
        ?>
    </ul>
    </div>
    <div class="col-md-12 col-sm-4 col-lg-4">
    <ul class="slider2">
        <?php 
            $args = array( 'post_type' => 'main-slider' );
            $the_query = new WP_Query( $args ); 

            if($the_query->have_posts()) :
                while($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li><img class='img-fluid' src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>" />
                    	 <p><?php the_content()?></p>
                      </li>
                <?php endwhile;
            else :
               
            endif;
        ?>
    </ul>
    </div>
    <div class="col-md-12 col-sm-4 col-lg-4">
    <ul class="slider3">
        <?php 
            $args = array( 'post_type' => 'main-slider' );
            $the_query = new WP_Query( $args ); 

            if($the_query->have_posts()) :
                while($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li><img class='img-fluid' src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>" />
                    	 <p><?php the_content()?></p>
                      </li>

                <?php endwhile;
            else :
               
            endif;
        ?>
    </ul>
    </div>
</div>
<?php get_footer( );?>