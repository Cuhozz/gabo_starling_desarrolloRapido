    <?php get_header(); ?>

<img class='img-full-width' src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID),'thumbnail'); ?>"/>

<?php 
    $nombre_prod=get_post_meta(get_the_ID( ),'nombre_del_producto', true );
    echo "<h1>".$nombre_prod."</h1>";

    if(have_posts()) :
        while(have_posts()): the_post(); ?>
            <p><?php the_content(); ?></p>
        <?php endwhile;
    else:
        echo "<p> no hay contenido. </p>";
    endif;
?>

<?php get_footer(); ?>