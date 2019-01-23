<?php get_header(); ?>

<div class="row mb-5">
    <div class="col-md-12 welcomeContact">
        <img class='img-full-width w-100 thumbnail' src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID),'thumbnail'); ?>"/>
        <div class="captionContact">
            <h1>Contact Us!</h1>
            <h4>We are glad to serve you</h4>
        </div>
    </div> 
</div>
<div class="row mt-5 mb-2">
    <div class="col-md-12 welcomeForm"><h2>Send us a message and we will answer you</h2></div>
</div>
<form class="mb-5 mt-5">
  <div class="form-row">
    <div class="col-md-4"></div>
    <div class="col-md-2 mb-3">
      <label for="validationServer01">First name</label>
      <input type="text" class="form-control is-invalid" id="validationServer01" placeholder="First name" value="" required>
    </div>
    <div class="col-md-2 mb-3">
      <label for="validationServer02">Last name</label>
      <input type="text" class="form-control is-invalid" id="validationServer02" placeholder="Last name" value="" required>
    </div>
    <div class="col-md-4"></div>
  </div>
  <div class="form-row mb-3">
   <div class="col-md-4"></div>
    <div class="col-md-2">
      <label for="validationServer03">Email</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="example@mail.com" required>
    </div>
    <div class="col-md-2">
      <label for="validationServer04">Phone number</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Phone number" required>
    </div>
    <div class="col-md-4"></div>
  </div>
  <div class="form-row mb-2">
      <div class="col-md-4"></div>
   <div class="col-md-4">
    <label for="formControlSelect1">You are?</label>
    <select class="form-control" id="formControlSelect1">
      <option>I'm a client</option>
      <option>I'm looking for a job</option>
      <option>Other</option>
    </select>
    </div>
    <div class="col-md-4"></div>
  </div>
  <div class="form-row mb-3">
     <div class="col-md-4"></div>
      <div class="col-md-4">
         <textarea class="form-control" id="validationTextarea" placeholder="Message" required></textarea>
      </div>
      <div class="col-md-4"></div>
  </div>
    <div class="mx-auto" style="width:200px;"><button class="btn btn-primary subForm" type="submit">Submit form</button></div>
</form>
<div class="row mt-4 mb-3"> 
    <div class="col-md-2"></div>
    <div class="col-md-8 closeContact"><h3>Or visit us on our different locations</h3></div>
    <div class="col-md-2"></div>
</div>
<div class="row locationsSection mb-5">
    <div class="col-md-3"></div>
    <div class="col-md-2">
        <p>44 Canal Center Plaza #200,<br> Alexandria, VA 22314, USA <br> TEL: 88888888 <br> coffeeplace@email.com</p>
    </div>   
    <div class="col-md-2">
         <p>44 Canal Center Plaza #200,<br> Alexandria, VA 22314, USA <br> TEL: 88888888 <br> coffeeplace@email.com</p>
    </div>
    <div class="col-md-2">
         <p>44 Canal Center Plaza #200,<br> Alexandria, VA 22314, USA <br> TEL: 88888888 <br> coffeeplace@email.com</p>
    </div>
    <div class="col-md-3"></div>
</div>
<?php get_footer(); ?>