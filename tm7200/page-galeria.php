<?php get_header(); ?>
<div class="row">
	<div class="col-sm-12 col-md-12 d-none d-sm-block thumbnail text-center"><img class='img-fluid w-100'src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID),'thumbnail'); ?>"/>

 <div class="welcomePages">
 	<div class="captionGallery">
 <h1 >Echa un vistazo a nuestra rutina diaria, <br>aqui, en Coffee Place...</h1>
 </div>
 </div>
	</div>
	</div>

	<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="text-center">
			<p class="title_gallery mt-1">Galería</p>
		</div>
	</div>
</div>

	<div class="row">
		<div class="col-lg-12">
 <div class="parallax1 parallax1_message">

    <div class="hovereffect">
        <div class="overlay">
           <h2>Comparte tus experiencias</h2>
           <a class="info" href="#">Click aqui</a>
        </div>
    </div>

 </div>
 </div>
</div>
<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="text-center">
			<p class="title_gallery mt-1">Visita nuestras redes sociales</p>
		</div>
	</div>
</div>
<div class="row mt-1">
		<div class="col-lg-12">
 <div class="parallax2 parallax1_message">

    <div class="hovereffect">
        <div class="overlay">
           <h2>Coffee Place en Facebook</h2>
           <a class="info" href="#">Vamos</a>

        </div>
    </div>

 </div>
 </div>
</div>
<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="text-center">
			<p class="title_gallery mt-1">Algunos clientes satisfechos</p>
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