<?php get_header(); ?>
<!-- Seccion de imagen destacada  -->
<div class="row">
	<div class="col-sm-12 col-lg-12 col-md-12 d-none d-sm-block thumbnail text-center"><img class='img-fluid'src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID),'thumbnail'); ?>"/>
<?php $featured_image_home=get_post_meta(get_the_ID( ),'featured_image_home', true );
echo "<h1>".$featured_image_home."</h1>"
?>
 <div class="welcomePages">
 <h1 class="coffee_place_restaurant">Coffee Place Restaurant</h1>
 <h4>Creemos que una taza de Café<br>es uno de los mas importantes, placeres en la vida</h4>
<button type="button" class="btn btnShop">Ir a la tienda</button>
 </div>
	</div>
	</div>
  <!-- COMENTARIOS PARA GABO: 
        la seccion del header sigue igual , creo que usted tiene la parte que si sirve.

        clases nuevas:
        home_title_dishes.(buscar en el scss)-->


<!--     FIN        -->

<!---     SECCION DE  TITULO DE PAGINA-->
<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="text-center">
			<p class="home_title_menu mt-1">Menu</p>
		</div>
	</div>
</div>


	<!----   FIN  ----->

  <!------  SECCION DE IMAGENES DEL MENU   ----->
<div class="row">


    <!-----  PRIMERA  ---->
<div class="col-sm-4 col-md-4 wow fadeIn">
      <?php
         $menu_image_01 = get_field('menu_image_01');
         $menu_image_name_01 = get_post_meta( get_the_ID( ), 'menu_image_name_01', true );
         
     if( !empty($menu_image_01) ): ?>
        <div class="img_menu">
         <a href="#"><img class='image_menu w-100 image-fluid' src="<?php echo $menu_image_01['url']; ?>" alt="<?php echo $menu_image_01['alt']; ?>"/>
          <div class="middle">
              <p class="text_menu"> <?php endif;
             echo $menu_image_name_01;?></p></a>

          </div>
       </div>
</div>

<!-----   SEGUNDA ----->

<div class="col-sm-4 col-md-4">
 <?php
$menu_image_02 = get_field('menu_image_02');
$menu_image_name_02 = get_post_meta( get_the_ID( ), 'menu_image_name_02', true );

if( !empty($menu_image_02) ): ?>
<div class="img_menu">
  <img class='image_menu w-100 image-fluid' src="<?php echo $menu_image_02['url']; ?>" alt="<?php echo $menu_image_02['alt']; ?>"/>
  <div class="middle">
    <p class="text_menu"> <?php endif;
echo $menu_image_name_02;?></p>

  </div>
  </div>
</div>

<!-----  TERCERA ----->
<div class="col-sm-4 col-md-4">
 <?php
$menu_image_03 = get_field('menu_image_03');
$menu_image_name_03 = get_post_meta( get_the_ID( ), 'menu_image_name_03', true );

if( !empty($menu_image_03) ): ?>
<div class="img_menu">
  <img class='image_menu w-100 image-fluid' src="<?php echo $menu_image_03['url']; ?>" alt="<?php echo $menu_image_03['alt']; ?>"/>
  <div class="middle">
    <p class="text_menu"> <?php endif;
echo $menu_image_name_03;?></p>

  </div>
  </div>
</div>
</div>
<div class="row wow fadeIn">

  <!-----   CUARTA ----->
<div class="col-sm-4 col-md-4">
 <?php
$menu_image_04 = get_field('menu_image_04');
$menu_image_name_04 = get_post_meta( get_the_ID( ), 'menu_image_name_04', true );

if( !empty($menu_image_04) ): ?>
<div class="img_menu">
  <img class='image_menu w-100 image-fluid' src="<?php echo $menu_image_04['url']; ?>" alt="<?php echo $menu_image_04['alt']; ?>"/>
  <div class="middle">
    <p class="text_menu"> <?php endif;
echo $menu_image_name_04;?></p>

  </div>
  </div>
</div>

<!-----   QUINTA ----->
<div class="col-sm-4 col-md-4">
 <?php
$menu_image_05 = get_field('menu_image_05');
$menu_image_name_05 = get_post_meta( get_the_ID( ), 'menu_image_name_05', true );

if( !empty($menu_image_05) ): ?>
<div class="img_menu">
  <img class='image_menu w-100 image-fluid' src="<?php echo $menu_image_05['url']; ?>" alt="<?php echo $menu_image_05['alt']; ?>"/>
  <div class="middle">
    <p class="text_menu"> <?php endif;
echo $menu_image_name_05;?></p>

  </div>
  </div>
</div>
<!-----   SEXTA----->
<div class="col-sm-4 col-md-4">
 <?php
$menu_image_06 = get_field('menu_image_06');
$menu_image_name_06 = get_post_meta( get_the_ID( ), 'menu_image_name_06', true );

if( !empty($menu_image_06) ): ?>
<div class="img_menu">
  <img class='image_menu w-100 image-fluid' src="<?php echo $menu_image_06['url']; ?>" alt="<?php echo $menu_image_06['alt']; ?>"/>
  <div class="middle">
    <p class="text_menu"> <?php endif;
echo $menu_image_name_06;?></p>

  </div>
  </div>
</div>
</div>

<div class="row home_about">
	<div class="col-lg-4 col-sm-6 col-md-4 d-none d-sm-block d-md-block  wow fadeInLeft">
    <?php
$image_chef = get_field('image_chef');
$chef_name =get_post_meta( get_the_ID( ), 'chef_name', true );
$chef_label =get_post_meta( get_the_ID( ), 'chef_label', true );
$chef_message =get_post_meta( get_the_ID( ), 'chef_message', true );

    if( !empty($image_chef) ): ?>
		<img src="<?php echo $image_chef['url']; ?>" alt="<?php echo $image_chef['alt']; ?>" class="image_chef image-fluid">
	</div>
	<div class="col-lg-1 col-md-1 col-sm-1"> </div>
	<div class="col-lg-6 col-sm-4 col-md-6 mt-5">
    <?php endif;
		echo "<h2 class='about_title'>".$chef_name."</h2>";
		echo "<p class='home_title_about'>".$chef_label."</p>";
		echo "<p class='i_can_give wow fadeInRight'>".$chef_message."</p>";
    ?>
		 <button type="button" class="btn btn-outline-light home_btn_about mb-4">Nosotros</button>
	</div>
	<div class="col-lg-1 col-sm-1  col-md-1"> </div>
</div>
<div class="row">
	<div class="col-lg-1 col-sm-4"></div>
	<div class="col-lg-10 col-sm-4">
		<div class="text-center">
			<p class="home_title_dishes mt-1">Platos diarios</p>

		</div>
		<div class="col-lg-1 col-sm-4"></div>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-md-4 col-xl-4">
<div class="img_menu">
  <?php  

  $daily_d_img_1=get_field('daily_d_img_1');
  $daily_content_1=get_post_meta( get_the_ID( ), 'daily_content_1', true );
    ?>
     <?php if(!empty($image_chef) ): ?>
  <img src="<?php echo $daily_d_img_1['url']; ?>" alt="<?php echo $daily_d_img_1['alt']; ?>" class="image_menu w-100 image-fluid">
  <div class="middle text-center">
     <?php endif;
    echo "<p class='text_menu_dishes'>".$daily_content_1."</p>";
   
    ?>
  </div>
</div>
</div>
<div class="col-sm-4 col-md-4 col-xl-4">
<div class="img_menu">
  <?php  

  $daily_d_img_2=get_field('daily_d_img_2');
  $daily_content_2=get_post_meta( get_the_ID( ), 'daily_content_2', true );
    ?>
     <?php if(!empty($image_chef) ): ?>
  <img src="<?php echo $daily_d_img_2['url']; ?>" alt="<?php echo $daily_d_img_2['alt']; ?>" class="image_menu w-100 image-fluid">
  <div class="middle text-center">
     <?php endif;
    echo "<p class='text_menu_dishes'>".$daily_content_2."</p>";
   
    ?>
  </div>
</div>
</div>
<div class="col-sm-4 col-md-4 col-xl-4">
<div class="img_menu">
  <?php  

  $daily_d_img_3=get_field('daily_d_img_3');
  $daily_content_3=get_post_meta( get_the_ID( ), 'daily_content_3', true );
    ?>
     <?php if(!empty($image_chef) ): ?>
  <img src="<?php echo $daily_d_img_3['url']; ?>" alt="<?php echo $daily_d_img_3['alt']; ?>" class="image_menu w-100 image-fluid" style="width:100%">
  <div class="middle text-center">
     <?php endif;
    echo "<p class='text_menu_dishes'>".$daily_content_3."</p>";
   
    ?>
  </div>
</div>
</div>

</div>

<div class="row mb-5">
<div class="col-sm-4 col-md-4 col-xl-4">
<div class="img_menu">
  <?php  

  $daily_d_img_4=get_field('daily_d_img_4');
  $daily_content_4=get_post_meta( get_the_ID( ), 'daily_content_4', true );
    ?>
     <?php if(!empty($image_chef) ): ?>
  <img src="<?php echo $daily_d_img_4['url']; ?>" alt="<?php echo $daily_d_img_4['alt']; ?>" class="image_menu w-100 image-fluid" style="width:100%">
  <div class="middle text-center">
     <?php endif;
    echo "<p class='text_menu_dishes'>".$daily_content_4."</p>";
   
    ?>
  </div>
</div>
</div>
<div class="col-sm-4 col-md-4 col-xl-4">
<div class="img_menu">
  <?php  

  $daily_d_img_5=get_field('daily_d_img_5');
  $daily_content_5=get_post_meta( get_the_ID( ), 'daily_content_5', true );
    ?>
     <?php if(!empty($image_chef) ): ?>
  <img src="<?php echo $daily_d_img_5['url']; ?>" alt="<?php echo $daily_d_img_5['alt']; ?>" class="image_menu w-100 image-fluid" style="width:100%">
  <div class="middle text-center">
     <?php endif;
    echo "<p class='text_menu_dishes'>".$daily_content_5."</p>";
   
    ?>
  </div>
</div>
</div>
<div class="col-sm-4 col-md-4 col-xl-4">
<div class="img_menu">
  <?php  

  $daily_d_img_6=get_field('daily_d_img_6');
  $daily_content_6=get_post_meta( get_the_ID( ), 'daily_content_6', true );
    ?>
     <?php if(!empty($image_chef) ): ?>
  <img src="<?php echo $daily_d_img_6['url']; ?>" alt="<?php echo $daily_d_img_6['alt']; ?>" class="image_menu w-100 image-fluid" style="width:100%">
  <div class="middle text-center">
     <?php endif;
    echo "<p class='text_menu_dishes'>".$daily_content_6."</p>";
   
    ?>
  </div>
</div>
</div>
		</div>


<div class="row shoping_lets_bg mt-4">
	<div class="col-sm-12 col-lg-12 col-md-12 text-center">
		<div class="">
			<p class="shoping_lets ">"Vamos a comprar"</p>
			 <button type="button" class="btn btn-outline-light home_btn_contact mb-5">Contactanos</button>
		</div>
	</div>		
</div>

<?php get_footer(); ?>



