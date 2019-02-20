<?php get_header(); ?>

<div class="row reservation_head_bg wow fadeIn">
    <div class="col-sm-12 col-lg-12 col-md-12 text-center">
        <p class="coffee_place_restaurant_res">Coffee Place Restaurant</p>
        <p class="reservation_tile">Reservation</p>
    </div>
</div>

<div class="row mt-4 wow fadeIn" data-wow-duration="1s">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <?php
 $img_table=get_field('image_table');
 $table_name_1=get_post_meta( get_the_ID( ), 'table_name_1', true );
 $table_capacity_1=get_post_meta( get_the_ID( ), 'table_capacity_1', true );
 if( !empty($img_table) ): ?>
        <div class="img_menu thumbnail">

            <img src="<?php echo $img_table['url']; ?>" alt="Mesas" class="image_reservation">
            <div class="middle_reservation">
                <?php endif;
      echo "<p type='button'class='btn btn-outline-light reservation_btn_table' >".$table_name_1."</p>";  
      echo "</div>";
      echo "<div class='text_reservation'>";
      echo "<p>Capacity:".$table_capacity_1."</p>";
  echo "</div>";
 ?>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <?php
 $img_table=get_field('image_table');
 $table_name_2=get_post_meta( get_the_ID( ), 'table_name_2', true );
 $table_capacity_2=get_post_meta( get_the_ID( ), 'table_capacity_2', true );
    if( !empty($img_table) ): ?>
            <div class="img_menu thumbnail">

                <img src="<?php echo $img_table['url']; ?>" alt="Mesas" class="image_reservation">
                <div class="middle_reservation">
                    <?php endif;
    echo "<p type='button'class='btn btn-outline-light reservation_btn_table' >".$table_name_2."</p>";  
  echo "</div>";
  echo "<div class='text_reservation'>";
     echo "<p>Capacity:".$table_capacity_2."</p>";
  echo "</div>";
 ?>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <?php
 $img_table=get_field('image_table');
 $table_name_3=get_post_meta( get_the_ID( ), 'table_name_3', true );
 $table_capacity_3=get_post_meta( get_the_ID( ), 'table_capacity_3', true );
 if( !empty($img_table) ): ?>
                <div class="img_menu thumbnail">

                    <img src="<?php echo $img_table['url']; ?>" alt="Mesas" class="image_reservation">
                    <div class="middle_reservation">
                        <?php endif;
    echo "<p type='button'class='btn btn-outline-light reservation_btn_table' >".$table_name_3."</p>";  
  echo "</div>";
  echo "<div class='text_reservation'>";
     echo "<p>Capacity:".$table_capacity_3."</p>";
  echo "</div>";
 ?>
                    </div>
                </div>
            </div>
            <div class="row mt-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <?php
 $img_table=get_field('image_table');
 $table_name_4=get_post_meta( get_the_ID( ), 'table_name_4', true );
 $table_capacity_4=get_post_meta( get_the_ID( ), 'table_capacity_4', true );
 if( !empty($img_table) ): ?>
                    <div class="img_menu thumbnail">

                        <img src="<?php echo $img_table['url']; ?>" alt="Mesas" class="image_reservation">
                        <div class="middle_reservation">
                            <?php endif;
    echo "<p type='button'class='btn btn-outline-light reservation_btn_table' >".$table_name_4."</p>";  
  echo "</div>";
  echo "<div class='text_reservation'>";
     echo "<p>Capacity:".$table_capacity_4."</p>";
  echo "</div>";
 ?>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <?php
 $img_table=get_field('image_table');
 $table_name_5=get_post_meta( get_the_ID( ), 'table_name_5', true );
 $table_capacity_5=get_post_meta( get_the_ID( ), 'table_capacity_5', true );
 if( !empty($img_table) ): ?>
                        <div class="img_menu thumbnail">

                            <img src="<?php echo $img_table['url']; ?>" alt="Mesas" class="image_reservation">
                            <div class="middle_reservation">
                                <?php endif;
    echo "<p type='button'class='btn btn-outline-light reservation_btn_table' >".$table_name_5."</p>";  
  echo "</div>";
  echo "<div class='text_reservation'>";
     echo "<p>Capacity:".$table_capacity_5."</p>";
  echo "</div>";
 ?>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <?php
 $img_table=get_field('image_table');
 $table_name_6=get_post_meta( get_the_ID( ), 'table_name_6', true );
 $table_capacity_6=get_post_meta( get_the_ID( ), 'table_capacity_6', true );
 if( !empty($img_table) ): ?>
                            <div class="img_menu thumbnail">

                                <img src="<?php echo $img_table['url']; ?>" alt="Mesas" class="image_reservation">
                                <div class="middle_reservation">
                                    <?php endif;
    echo "<p type='button'class='btn btn-outline-light reservation_btn_table' >".$table_name_6."</p>";  
  echo "</div>";
  echo "<div class='text_reservation'>";
     echo "<p>Capacity:".$table_capacity_6."</p>";
  echo "</div>";
 ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 wow fadeInRight" data-wow-duration="1s">

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <?php
 $img_table=get_field('image_table');
 $table_name_7=get_post_meta( get_the_ID( ), 'table_name_7', true );
 $table_capacity_7=get_post_meta( get_the_ID( ), 'table_capacity_7', true );
 if( !empty($img_table) ): ?>
                                <div class="img_menu thumbnail">

                                    <img src="<?php echo $img_table['url']; ?>" alt="Mesas" class="image_reservation">
                                    <div class="middle_reservation">
                                        <?php endif;
    echo "<p type='button'class='btn btn-outline-light reservation_btn_table' >".$table_name_7."</p>";  
  echo "</div>";
  echo "<div class='text_reservation'>";
     echo "<p>Capacity:".$table_capacity_7."</p>";
  echo "</div>";
 ?>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <?php
 $img_table=get_field('image_table');
 $table_name_8=get_post_meta( get_the_ID( ), 'table_name_8', true );
 $table_capacity_8=get_post_meta( get_the_ID( ), 'table_capacity_8', true );
 if( !empty($img_table) ): ?>
                                    <div class="img_menu thumbnail">

                                        <img src="<?php echo $img_table['url']; ?>" alt="Mesas" class="image_reservation">
                                        <div class="middle_reservation">
                                            <?php endif;
    echo "<p type='button'class='btn btn-outline-light reservation_btn_table' >".$table_name_8."</p>";  
  echo "</div>";
  echo "<div class='text_reservation'>";
     echo "<p>Capacity:".$table_capacity_8."</p>";
  echo "</div>";
 ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <?php
 $img_table=get_field('image_table');
 $table_name_9=get_post_meta( get_the_ID( ), 'table_name_9', true );
 $table_capacity_9=get_post_meta( get_the_ID( ), 'table_capacity_9', true );
 if( !empty($img_table) ): ?>
                                        <div class="img_menu thumbnail">

                                            <img src="<?php echo $img_table['url']; ?>" alt="Mesas" class="image_reservation">
                                            <div class="middle_reservation">
                                                <?php endif;
    echo "<p type='button'class='btn btn-outline-light reservation_btn_table' >".$table_name_9."</p>";  
  echo "</div>";
  echo "<div class='text_reservation'>";
     echo "<p>Capacity:".$table_capacity_9."</p>";
  echo "</div>";
 ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col">
                                            <form class="mb-5">
                                                <div class="form-row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="validationReservation01">First name</label>
                                                        <input type="text" class="form-control" id="validationReservation01" placeholder="First name" value="" required>
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="validationReservation02">Last name</label>
                                                        <input type="text" class="form-control" id="validationReservation02" placeholder="Last name" value="" required>
                                                    </div>
                                                    <div class="col-md-4"></div>
                                                </div>
                                                <div class="form-row mb-3">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-2">
                                                        <label for="validationReservation03">Email</label>
                                                        <input type="text" class="form-control" id="validationReservation03" placeholder="" required>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="validationReservation04">Phone number</label>
                                                        <input type="text" class="form-control" id="validationReservation04" placeholder="Phone number" required>
                                                    </div>
                                                    <div class="col-md-4"></div>
                                                </div>
                                                <div class="form-row mb-2">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-2">
                                                        <label for="formControlSelect1">Table Number</label>
                                                        <select class="form-control" id="formControlSelect1">
                                                            <?php  $tables=get_post_meta( get_the_ID( ), 'tables', true );
        
           if( !empty($img_table) ): ?>

                                                            <?php endif;
            echo "<option>".$tables."</option>";
           ?>

                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="formControlSelect2">Time</label>
                                                        <select class="form-control" id="formControlSelect2">

                                                            <?php  $hours=get_post_meta( get_the_ID( ), 'hours', true );
        
           if( !empty($img_table) ): ?>

                                                            <?php endif;
            echo "<option>".$hours."</option>";
           ?>

                                                        </select>
                                                    </div>
                                                    <div class="col-md-4"></div>
                                                </div>
                                                <div class="mx-auto" style="width:200px;"><button class="btn btn-primary subForm" type="submit">Submit form</button></div>
                                        </div>
                                        </form>
                                    </div>


                                    <?php get_footer(); ?>
