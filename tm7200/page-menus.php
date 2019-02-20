<?php get_header(); ?>
<div class="row">
	<div class="col-sm-12 col-md-12 d-none d-sm-block thumbnail text-center"><img class='img-fluid w-100'src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID),'thumbnail'); ?>"/>

 <div class="welcomePages">
 	<div class="captionGallery">
 <h1 >Prueba nuestras delicias, <br>cortesía, de Coffe Place...</h1>
 <h4></h4>
 </div>
 </div>
	</div>
	</div>
	<div class="row mt-2 mb-2">
	<div class="col-sm-12 col-md-12">
		<div class="text-center">
			<p class="title_menu">Este es nuestro Menu</p>
		</div>
	</div>
</div>
<div class="row wow fadeIn">
	<div class="col-lg-12">
<div class="parallax3">
	<?php    

	$menu_dish_1=get_post_meta( get_the_ID( ), 'menu_dish_1', true );
     if( !empty($menu_dish_1) ): ?>
<?php endif;
  echo "<a class='btn  menu_dishes' data-toggle='collapse' href='#collapseExample1' role='button' aria-expanded='false' aria-controls='collapseExample1'>". $menu_dish_1.  
   "</a>"
   ?>
 </div>
</div>
</div>

<div class="row mt-4 ">
	<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample1">
    <?php    

	$menus_1_fila_1=get_post_meta( get_the_ID( ), 'menus_1_fila_1', true );
     if( !empty($menus_1_fila_1) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_1_fila_1."</p>";
   ?>
</div>
</div>
<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample1">
      <?php    

	$menus_1_fila_2=get_post_meta( get_the_ID( ), 'menus_1_fila_2', true );
     if( !empty($menus_1_fila_2) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_1_fila_2."</p>";
   ?>
</div>
	</div>
	<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample1">
		 <?php    

	$menus_1_fila_3=get_post_meta( get_the_ID( ), 'menus_1_fila_3', true );
     if( !empty($menus_1_fila_3) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_1_fila_3."</p>";
   ?>
</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
<div class="parallax4 mt-4">
	
 <?php    

	$menu_dish_2=get_post_meta( get_the_ID( ), 'menu_dish_2', true );
     if( !empty($menu_dish_2) ): ?>
<?php endif;
  echo "<a class='btn  menu_dishes' data-toggle='collapse' href='#collapseExample2' role='button' aria-expanded='false' aria-controls='collapseExample1'>". $menu_dish_2.  
   "</a>"
   ?>
 </div>
</div>
</div>

<div class="row mt-4">
	<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample2">
    <?php    

	$menus_2_fila_1=get_post_meta( get_the_ID( ), 'menus_2_fila_1', true );
     if( !empty($menus_2_fila_1) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_2_fila_1."</p>";
   ?>
</div>
</div>
<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample2">
      <?php    

	$menus_2_fila_2=get_post_meta( get_the_ID( ), 'menus_2_fila_2', true );
     if( !empty($menus_2_fila_2) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_2_fila_2."</p>";
   ?>
</div>
	</div>
	<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample2">
		 <?php    

	$menus_2_fila_3=get_post_meta( get_the_ID( ), 'menus_2_fila_3', true );
     if( !empty($menus_2_fila_3) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_2_fila_3."</p>";
   ?>
</div>
	</div>
</div>


<div class="row">
	<div class="col-lg-12">
<div class="parallax5 mt-4">
	
  <?php    

	$menu_dish_3=get_post_meta( get_the_ID( ), 'menu_dish_3', true );
     if( !empty($menu_dish_3) ): ?>
<?php endif;
  echo "<a class='btn  menu_dishes' data-toggle='collapse' href='#collapseExample3' role='button' aria-expanded='false' aria-controls='collapseExample1'>". $menu_dish_3.  
   "</a>"
   ?>
 </div>
</div>
</div>
<div class="row mt-4">
	<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample3">
    <?php    

	$menus_3_fila_1=get_post_meta( get_the_ID( ), 'menus_3_fila_1', true );
     if( !empty($menus_3_fila_1) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_3_fila_1."</p>";
   ?>
</div>
</div>
<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample3">
      <?php    

	$menus_3_fila_2=get_post_meta( get_the_ID( ), 'menus_3_fila_2', true );
     if( !empty($menus_3_fila_2) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_3_fila_2."</p>";
   ?>
</div>
	</div>
	<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample3">
		 <?php    

	$menus_3_fila_3=get_post_meta( get_the_ID( ), 'menus_3_fila_3', true );
     if( !empty($menus_3_fila_3) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_3_fila_3."</p>";
   ?>
</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
<div class="parallax6 mt-4">
	
<?php    

	$menu_dish_4=get_post_meta( get_the_ID( ), 'menu_dish_4', true );
     if( !empty($menu_dish_4) ): ?>
<?php endif;
  echo "<a class='btn  menu_dishes' data-toggle='collapse' href='#collapseExample4' role='button' aria-expanded='false' aria-controls='collapseExample1'>". $menu_dish_4.  
   "</a>"
   ?>
 </div>
</div>
</div>
<div class="row mt-4">
	<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample4">
    <?php    

	$menus_4_fila_1=get_post_meta( get_the_ID( ), 'menus_4_fila_1', true );
     if( !empty($menus_4_fila_1) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_4_fila_1."</p>";
   ?>
</div>
</div>
<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample4">
      <?php    

	$menus_4_fila_2=get_post_meta( get_the_ID( ), 'menus_4_fila_2', true );
     if( !empty($menus_4_fila_2) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_4_fila_2."</p>";
   ?>
</div>
	</div>
	<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample4">
		 <?php    

	$menus_4_fila_3=get_post_meta( get_the_ID( ), 'menus_4_fila_3', true );
     if( !empty($menus_4_fila_3) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_4_fila_3."</p>";
   ?>
</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
<div class="parallax7 mt-4">
	
  <?php    

	$menu_dish_5=get_post_meta( get_the_ID( ), 'menu_dish_5', true );
     if( !empty($menu_dish_5) ): ?>
<?php endif;
  echo "<a class='btn  menu_dishes' data-toggle='collapse' href='#collapseExample5' role='button' aria-expanded='false' aria-controls='collapseExample1'>". $menu_dish_5.  
   "</a>"
   ?>
 </div>
</div>
</div>
<div class="row mt-4">
	<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample5">
    <?php    

	$menus_5_fila_1=get_post_meta( get_the_ID( ), 'menus_5_fila_1', true );
     if( !empty($menus_5_fila_1) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_5_fila_1."</p>";
   ?>
</div>
</div>
<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample5">
      <?php    

	$menus_5_fila_2=get_post_meta( get_the_ID( ), 'menus_5_fila_2', true );
     if( !empty($menus_5_fila_2) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_5_fila_2."</p>";
   ?>
</div>
	</div>
	<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample5">
		 <?php    

	$menus_5_fila_3=get_post_meta( get_the_ID( ), 'menus_5_fila_3', true );
     if( !empty($menus_5_fila_3) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_5_fila_3."</p>";
   ?>
</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
<div class="parallax8 mt-4">
	
 <?php    

	$menu_dish_6=get_post_meta( get_the_ID( ), 'menu_dish_6', true );
     if( !empty($menu_dish_6) ): ?>
<?php endif;
  echo "<a class='btn  menu_dishes' data-toggle='collapse' href='#collapseExample6' role='button' aria-expanded='false' aria-controls='collapseExample1'>". $menu_dish_6.  
   "</a>"
   ?>
 </div>
</div>
</div>
<div class="row mt-4">
	<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample6">
    <?php    

	$menus_6_fila_1=get_post_meta( get_the_ID( ), 'menus_6_fila_1', true );
     if( !empty($menus_6_fila_1) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_6_fila_1."</p>";
   ?>
</div>
</div>
<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample6">
      <?php    

	$menus_6_fila_2=get_post_meta( get_the_ID( ), 'menus_6_fila_2', true );
     if( !empty($menus_6_fila_2) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_6_fila_2."</p>";
   ?>
</div>
	</div>
	<div class="col-lg-4 col-md-4">
		<div class="collapse" id="collapseExample6">
		 <?php    

	$menus_6_fila_3=get_post_meta( get_the_ID( ), 'menus_6_fila_3', true );
     if( !empty($menus_6_fila_3) ): ?>
   <?php endif;
   echo "<p class='filas_menu'>".$menus_6_fila_3."</p>";
   ?>
</div>
	</div>
</div>

<?php get_footer( );?>